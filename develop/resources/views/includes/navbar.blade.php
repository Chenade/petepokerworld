@include('includes.language')
<header class="fixed-top">
    <div class="d-flex align-items-center top-header-area" style="height: 50px;">
        <div class="container d-flex">
            <div class="col-6 d-flex align-items-center top-header-content justify-content-start">
                <a href="https://www.facebook.com/petepokerworld/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/yen_han_chen/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://discord.com/channels/714859751967555687/715697555916324875" target="_blank"><i class="fab fa-brands fa-discord"></i></a>
                <a href="https://www.youtube.com/channel/UCK08Pe47bZVJK39rXmXiUgQ" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="col-6 d-flex align-items-center top-header-content justify-content-end">
                <!-- <a href="#"><i class="fas fa-phone-alt"></i> <span class="mobile-hide"> (+886)-4-2225-0948</span></a> -->
                <a href="mailto:support@petepoker.com" target="_blank"><i class="fas fa-envelope"></i> <span class="mobile-hide">support@petepoker.com</span></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <div class=""><img src="/img/logo.png" style="margin-bottom: 0px; height: 30px;"/>
                    <b>Petepokerworld</b>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="collapse navbar-collapse" id="navbarNavDropdown" style="margin: 0;">
                <ul class="navbar-nav w-100">
                    <div class="ml-auto"></div>
<!-- {{--                    <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>--}} -->
                    <li class="nav-item" style="margin: 0 1.5em;font-size:0.9em;"><a class="nav-link" href="/news">{{trans('dictionary.news')}}</a></li>
                    <li class="nav-item" style="margin: 0 1.5em;font-size:0.9em;"><a class="nav-link" href="/about_p">{{trans('dictionary.about_p')}}</a></li>
                    <li class="nav-item" style="margin: 0 1.5em;font-size:0.9em;"><a class="nav-link" href="/media">{{trans('dictionary.p_community')}}</a></li>
                    <li class="nav-item" style="margin: 0 1.5em;font-size:0.9em;"><a class="nav-link" href="/course">{{trans('dictionary.course_intro')}}</a></li>
                    <li class="nav-item dropdown" style="margin: 0 1.5em;font-size:0.9em; background-color: orange; ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: white;">
                            {{trans('dictionary.team')}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/teams/intro">{{trans('dictionary.teams_intro')}}</a></li>
                            <li><a class="dropdown-item" href="/teams/join">{{trans('dictionary.teams_join')}}</a></li>
                            <li><a class="dropdown-item" href="/teams/discount">{{trans('dictionary.teams_discount')}}</a></li>
                            <!-- <li><a class="dropdown-item" href="/teams/discount">{{trans('dictionary.teams_line')}}</a></li> -->
                        </ul>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>
</header>
