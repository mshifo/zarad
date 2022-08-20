<header class="site-header mo-left header-transparent overlay header navstyle4">

    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion logo-white">
                    <a href="{{route('home')}}"><img src="{{asset('images/logo-white.png')}}" alt=""></a>

                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header d-md-block d-lg-none">
                        <a href="index.html"><img src="images/logo-8.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li> <a href="{{route('home')}}">{{__('titles.home')}}</a></li>
                        <li> <a href="{{route('services')}}">{{__('titles.services')}}</a></li>
                        <li> <a href="{{route('products')}}">{{__('titles.products')}}</a></li>
                        <li> <a href="{{route('about')}}">{{__('titles.about')}}</a></li>
                        <li> <a href="{{route('faq')}}">{{__('titles.faq')}}</a></li>
                        <li><a href="{{route('contact')}}">{{__('titles.contact')}}</a></li>
                    </ul>
                    <div class="dlab-social-icon">
                        <ul>
                            <li><a class="site-button circle fa fa-facebook" href="{{$contacts->facebook}}"></a></li>
                            <li><a class="site-button  circle fa fa-twitter" href="{{$contacts->twitter}}"></a></li>
                            <li><a class="site-button circle fa fa-linkedin" href="{{$contacts->linkedin}}"></a></li>
                            <li><a class="site-button circle fa fa-instagram" href="{{$contacts->instagram}}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
