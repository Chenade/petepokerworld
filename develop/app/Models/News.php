<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    
    public $timestamps = true;

    protected $guarded = [];

    protected $casts = [
        'content' => 'array'
    ];

    public static function store($request)
    {
        $content = new News;
        $content->title = $request['title'];
        $content->content = $request['content'];
        $content->start_at = $request['start_at'];
        $content->end_at = $request['end_at'];
        $content->ts = (array_key_exists('ts', $request)) ? $request['ts'] : time();
        if (array_key_exists('link', $request)) $content->link = $request['link'];
        if (array_key_exists('link_alt', $request)) $content->link_alt = $request['link_alt'];
        if (array_key_exists('ord', $request)) $content->ord = $request['ord'];
        $content->save();
    }

    public static function getList()
    {
        return DB::table('news')
                -> where('del', 0)
                -> orderBy('ord', 'DESC') 
                -> get();
    }

    public static function getByCategoryId($id)
    {
        if ($id > 2)
            return NULL;
        return  DB::table('news') -> where('category', $id) -> where('del', 0) -> orderBy('ord', 'DESC') -> get();
    }

    public static function getElementById($id)
    {
        return DB::table('news') -> where('id', $id) -> where('del', 0) -> orderBy('ord', 'DESC') -> get();
    }

    public static function deleteById($id)
    {
        $row = DB::table('news') -> where('id',$id) -> first();
        if (!$row)
            return NULL;
        $input = [];
        $input['del'] = 1;
        DB::table('news')-> where('id', $id)-> update($input);

        return true;
    }

    public static function updateById($id, $input)
    {
        $content = NEWS::find($id);
        if (!$content)
            return NULL;
        $content->timestamps = true;
        if (array_key_exists('title', $input)) $content->title = $input['title'];
        if (array_key_exists('content', $input)) $content->content = ($input['content']);
        if (array_key_exists('link', $input)) $content->link = $input['link'];
        if (array_key_exists('link_alt', $input)) $content->link_alt = $input['link_alt'];
        if (array_key_exists('ord', $input)) $content->ord = $input['ord'];
        if (array_key_exists('start_at', $input)) $content->start_at = $input['start_at'];
        if (array_key_exists('end_at', $input)) $content->end_at = $input['end_at'];
        $content->save();
        return true;
    }
}
