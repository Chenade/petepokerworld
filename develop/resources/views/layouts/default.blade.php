@include('includes.language')
<!doctype html>
<html>
<head>
    @include('includes.head')
    <title>小P的撲克世界 | Pete's Poker World</title>
    <link rel="icon" href="/img/logo.ico">
</head>
<body>
@include('includes.navbar')
<main role="main" style="margin-top: 50px;">
    <div class="col" style="margin-bottom: 15px;display: none">
        <h2>{{$page_header}}</h2>
        <div class="border-bottom"></div>
    </div>

    <!-- <div id="breadcrumb" class="breadcrumb-area bg-img"> -->
    <div id="breadcrumb" class="breadcrumb-area bg-img" style="background-image: url(/img/{{$page_banner}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">{{$page_header}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{$page_parent_path}}">{{$page_parent}}</a></li>
                                <li class="breadcrumb-item active breadcrumb-item-active" aria-current="page">{{$page_path}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-page">
        @yield('content')
    </div>
</main>
{{--<p>{{ session() -> all()  }}</p>--}}
@include('includes.footer')
<script>
    $('.language').on('click', function () {
        var val = $(this).attr('id');
        window.location.href = '/language/' + val;
    });

</script>
@yield('end_script')
</body>
</html>
