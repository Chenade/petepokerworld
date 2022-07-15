<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Board_Leader;
use App\Models\News;
use App\Models\Activity;
use App\Models\PostImage;
use App\Models\Admin;
use App\Models\Teams;
use App\Models\Promo;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//----- Admin Control ----//
Route::prefix('admin')->group(function () {
    Route::post('/signup', function(){
        $input = request() -> all();
        $required = array('account', 'password', 'username');
        if (count(array_intersect_key(array_flip($required), $input)) != count($required))
            return response() -> json(['success' => False, 'message' => 'Missing required column.'], 400);    
        $token = ADMIN::store($input);
        return response() -> json(['success' => True, 'message' => $token], 200);
    });

    Route::post('/login', function(){
        $input = request() -> all();
        $required = array('account', 'password');
        if (count(array_intersect_key(array_flip($required), $input)) != count($required))
            return response() -> json(['success' => False, 'message' => 'Missing required column.'], 400);
        $id = ADMIN::getlogin($input);
        if(!$id)
            return  response() -> json(['success' => False, 'message' => 'Wrong account or password'], 403);
        $content = ADMIN::find($id);
        $token = ADMIN::genToken($input['account']);
        $content->token = $token;
        $content->timestamps = true;
        $content->save();
        return response() -> json(['success' => True, 'message' => $token], 200);
    });

    Route::post('/ct', function(){
        $input = request() -> all();
        $token = ADMIN::checkToken($input);
        return response() -> json(['success' => True, 'message' => '', 'token' => $token], 200);
    });

});

Route::prefix('news')->group(function () {
    Route::get('/list',function (){
        $row = NEWS::getList();
        foreach ($row as &$value) {
            $value->content = str_replace("'", '"', trim($value->content, "\\\""));
            $value->content = json_decode($value->content, true);
        }
        return response() -> json(['success' => True, 'message' => '','data' => $row], 200);
    });

    Route::get('/adminlist',function (){
        $row = NEWS::getList();
        foreach ($row as &$value) {
            $value->content = str_replace("'", '"', trim($value->content, "\\\""));
            $value->content = json_decode($value->content, true);
            $value->start_at = '<span class="date-convert">' . $value->start_at . '</span>';
            $value->end_at = '<span class="date-convert">' . $value->end_at . '</span>';
            $value->operate = '<button type="button" class="btn btn-info edit-btn" style="margin:0" data-id="'.$value->id.'"><i class="far fa-solid fa-gears"></i></button>';
            $value->operate .= '<button type="button" class="btn btn-danger delete-btn" style="margin:0" data-id="'.$value->id.'"><i class="far fa-solid fa-trash-can"></i></button>';
        }
        return response() -> json(['success' => True, 'message' => '','data' => $row], 200);
    });
    
    Route::post('/create',function (){
        $input = request() -> all();
        $token = ADMIN::checkToken($input);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $required = array('title', 'content');
        if (count(array_intersect_key(array_flip($required), $input)) != count($required))
            return response() -> json(['success' => False, 'message' => 'Missing required column.'], 400);    
        $row = NEWS::store($input);
        return response() -> json(['success' => True, 'message' => '', 'token' => ''], 200);
    });

    Route::get('/{id}',function ($id){
        $input = request() -> all();
        $token = ADMIN::checkToken($input);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $content = NEWS::getElementById($id);
        if (!$content)
            return response() -> json(['success' => False, 'message' => 'News not found.'], 404);
        return response() -> json(['success' => True, 'message' => '', 'data' => $content[0]], 200);
    });
    
    Route::put('/{id}',function ($id){
        $input = request() -> all();
        $token = ADMIN::checkToken($input);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $content = NEWS::updateById($id, $input);
        if (!$content)
            return response() -> json(['success' => False, 'message' => 'News not found.'], 404);
        return response() -> json(['success' => True, 'message' => '', 'token' => $token], 200);
    });
    
    Route::delete('/{id}/{token}',function ($id, $token){
        $token = ADMIN::validToken($token);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $row = NEWS::deleteById($id);
        if (!$row)
            return response() -> json(['success' => False, 'message' => 'News not found.'], 200);
        return response() -> json(['success' => True, 'message' => '', 'token' => $token], 200);
    });
    
    Route::post('/{id}/store-image', function(Request $request, $id){
        $token = ADMIN::validToken(request() -> token);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $content = NEWS::getElementById($id);
        if (!$content)
            return response() -> json(['success' => False, 'message' => 'News not found.'], 404);
        $filename = PostImage::store($request, 1);
        if (!$filename)
            return response() -> json(['success' => False, 'message' => 'Image upload failed'], 400);
        $content = NEWS::updateById($id, ['image' => $filename]);
        return response() -> json(['success' => True, 'message' => '', 'token' => $token], 200);
    });
});

Route::prefix('article')->group(function () {
    Route::get('/list/{id}',function ($id){
        $row = ARTICLE::getList($id);
        foreach ($row as &$value) {
            $value->content = str_replace("'", '"', trim($value->content, "\\\""));
            $value->content = json_decode($value->content, true);
        }
        return response() -> json(['success' => True, 'message' => '','data' => $row], 200);
    });
    
    Route::post('/create',function (){
        $input = request() -> all();
        $token = ADMIN::checkToken($input);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $required = array('title', 'content');
        if (count(array_intersect_key(array_flip($required), $input)) != count($required))
            return response() -> json(['success' => False, 'message' => 'Missing required column.'], 400);    
        $row = ARTICLE::store($input);
        return response() -> json(['success' => True, 'message' => '', 'token' => ''], 200);
    });
    
    Route::put('/{id}',function ($id){
        $input = request() -> all();
        $token = ADMIN::checkToken($input);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $content = ARTICLE::updateById($id, $input);
        if (!$content)
            return response() -> json(['success' => False, 'message' => 'News not found.'], 404);
        return response() -> json(['success' => True, 'message' => '', 'token' => $token], 200);
    });
    
    Route::delete('/{id}/{token}',function ($id, $token){
        $token = ADMIN::validToken($token);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $row = ARTICLE::deleteById($id);
        if (!$row)
            return response() -> json(['success' => False, 'message' => 'News not found.'], 200);
        return response() -> json(['success' => True, 'message' => '', 'token' => $token], 200);
    });
    
    Route::post('/{id}/store-image', function(Request $request, $id){
        $token = ADMIN::validToken(request() -> token);
        if(!$token)
            return $response = response() -> json(['success' => False, 'message' => 'Invalid Token'], 403);
        $content = NEWS::getElementById($id);
        if (!$content)
            return response() -> json(['success' => False, 'message' => 'News not found.'], 404);
        $filename = PostImage::store($request, $content->type);
        if (!$filename)
            return response() -> json(['success' => False, 'message' => 'Image upload failed'], 400);
        $content = ARTICLE::updateById($id, ['image' => $filename]);
        return response() -> json(['success' => True, 'message' => '', 'token' => $token], 200);
    });
});

Route::prefix('about')->group(function () {
    
});

Route::prefix('ads')->group(function () {
    
});

Route::prefix('banner')->group(function () {
    
});
