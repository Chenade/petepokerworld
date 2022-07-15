@include('includes.language')
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mobile-hidden">
        <div class="container">
            <a class="navbar-brand" href="/">
                <div class=""><img src="/img/interwellness_eng.png" style="margin-bottom: 5px; height: 30px;"/>
                    <!-- <b>interWellness</b> -->
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="collapse navbar-collapse" id="navbarNavDropdown" style="margin: 0;">
                <ul class="navbar-nav w-100">
                    <div class="ml-auto"></div>
                    <li class="nav-item" style="margin: 0 1.5em;font-size:0.9em;"><a class="nav-link" href="/admin/news" data-admin="news">{{trans('dictionary.news')}}</a></li>
                    <!-- <li class="nav-item" style="margin: 0 1.5em;font-size:0.9em;"><a class="nav-link" href="#service">{{trans('dictionary.Service')}}</a></li>
                    <li class="nav-item" style="margin: 0 1.5em;font-size:0.9em;"><a class="nav-link" href="#article">{{trans('dictionary.Article')}}</a></li>
                    <li class="nav-item" style="margin: 0 1.5em;font-size:0.9em;"><a class="nav-link" href="#fnq">{{trans('dictionary.Fnq')}}</a></li> -->
                </ul>
            </ul>
        </div>
    </nav>
</header>
