@extends('index')
@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- Slider -->
    <div class="main-slider style-two default-banner" id="home">
        <div id="rev_slider_1061_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="creative-freedom" data-source="gallery" style="background-color:#1f1d24;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_1061_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    @foreach($sliders as $slider)
                    <!-- SLIDE  -->
                    <li data-index="rs-100" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="2000" data-thumb="{{asset('storage/'.$slider->image)}}" data-rotate="0" data-saveperformance="off" data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('storage/'.$slider->image)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-tobggroup" id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontweight="['100','100','400','400']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; background-color:rgba(18, 12, 20, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-shape tp-shapewrapper bg-primary rs-parallaxlevel-3" id="slide-100-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-178','-120','-141']" data-width="5" data-height="100" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Creative-SubTitle tp-resizeme rs-parallaxlevel-2 text-primary" id="slide-100-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-91','-20','-30']" data-fontsize="['14','14','14','14']" data-lineheight="['14','14','14','14']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-family: 'Roboto Condensed', sans-serif;">{{$slider->title}}
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption Creative-Title tp-resizeme rs-parallaxlevel-1" id="slide-100-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['40','-10','60','40']" data-fontsize="['70','70','50','40']" data-lineheight="['70','70','55','45']" data-width="['none','none','none','320']" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2550,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-family: 'Roboto Condensed', sans-serif;">
                            {{$slider->heading}}
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper bg-primary rs-parallaxlevel-3" id="slide-100-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['200','137','210','180']" data-width="5" data-height="100" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption Creative-Button rev-btn text-primary rs-parallaxlevel-15" id="slide-100-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['720','611','800','650']" data-fontweight="['400','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3850,"ease":"Power2.easeOut"},{"delay":"wait","speed":500,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#e87800;bc:#e87800;bw:1px 1px 1px 1px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]" data-paddingright="[50,50,50,30]" data-paddingbottom="[15,15,15,15]" data-paddingleft="[50,50,50,30]" style="z-index: 10; white-space: nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; cursor:pointer;font-family: 'Roboto Condensed', sans-serif; border-color: var(--color-primary);">{{$slider->button_text}}
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
    <!-- Slider END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- About Me -->
        <div class="section-full content-inner exhibition-bx">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="exhibition-carousel owl-carousel owl-none m-b30">
                            @foreach(json_decode($media->home_gallery) as $image)
                            <div class="item"><img src="{{asset('storage/'.$image)}}" alt=""></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="content-bx1">
                            <div class="section-head">
                                <h2 class="title">{{__('home.title1')}} </h2>
                                <p>{{__('home.paragraph1')}} </p>
                            </div>
                            <a href="{{route('contact')}}" class="site-button btnhover21 black m-r10 m-b10">{{__('titles.contact')}}</a>
                            <a href="{{route('services')}}" class="site-button btnhover21 black m-b10">{{('titles.portfolio')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Project and Gallery -->
        <div class="section-full">
            <div class="row spno about-industry">
                <div class="col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="dlab-img-effect zoom">
                        <img src="{{asset('storage/'.$media->home_image_1)}}" alt="" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-4 bg-secondry text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="service-box style2">
                        <div>
                            <h2 class="title"><span>{{__('home.title2')}}</h2>
                            <p>{{__('home.paragraph2')}} </p>
                            <a href="{{route('about')}}" class="site-button btnhover21 outline white outline-2">{{__('titles.about')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.9s">
                    <div class="dlab-img-effect zoom">
                        <img src="{{asset('storage/'.$media->home_image_2)}}" alt="" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-4 bg-primary text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="service-box style2">
                        <div>
                            <h2 class="title"><span>{{__('home.title3')}}</h2>
                            <p>{{__('home.paragraph3')}} </p>
                            <a href="{{route('about')}}" class="site-button btnhover21 outline white outline-2">{{__('titles.about')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="dlab-img-effect zoom">
                        <img src="{{asset('storage/'.$media->home_image_3)}}" alt="" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-4 bg-primary text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="service-box style2">
                        <div>
                            <h2 class="title text-black"><span>{{__('home.title4')}}</h2>
                            <p>{{__('home.paragraph4')}} </p>
                            <a href="{{route('about')}}" class="site-button btnhover21 outline white outline-2">{{__('titles.about')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Project and Gallery End -->
        <!-- Latest Project -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">{{__('titles.gallery')}}</h2>
                    <p>{{__('titles.gallery_description')}}</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="site-filters m-b20">
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active"><input type="radio"><a href="#" class="site-button btnhover21 outline outline-2 button-sm"><span>{{__('gallery.all')}}</span></a></li>
                                @foreach($categories as $category)
                                <li data-filter="{{$category->name}}" class="btn"><input type="radio"><a href="#" class="site-button btnhover21 outline outline-2 button-sm"><span>{{$category->name}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row sp15">
                    <div class="col-lg-12 m-b15">
                        <ul id="masonry" class="dlab-gallery-listing gallery mfp-gallery text-center">
                            @foreach($galleries as $gallery)
                            <li class="card-container col-lg-3 col-md-6 col-sm-6 {{$gallery->category->name}} m-b15 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox1 style1">
                                    <img src="images/gallery/leather/pic1.jpg" alt="" />
                                    <div class="overlay-bx">
                                        <div class="portinner">
                                            <h3 class="port-title"><a href="portfolio-details.html">Solid Wastes</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Project End -->
        <!-- Company staus -->
        <div class="section-full text-white bg-img-fix content-inner overlay-black-dark counter-staus-box" style="background-image:url(images/background/bg14.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="section-head text-white">
                            <a href="{{$media->home_vedio}}" class="popup-youtube video play-btn"><span><i class="fa fa-play"></i></span>{{__('buttons.play')}}</a>
                            <h2 class="title">{{__('home.title5')}}</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="row sp20">
                            <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="icon-bx-wraper center counter-style-5">
                                    <div class="icon-xl m-b20">
                                        <span class="icon-cell"><i class="flaticon-worker"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <div class="dlab-separator bg-primary"></div>
                                        <h2 class="dlab-tilte counter">{{__('home.point1_counter')}}</h2>
                                        <p>{{__('home.point1_description')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 m-b30 wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="icon-bx-wraper center counter-style-5">
                                    <div class="icon-xl m-b20">
                                        <span class="icon-cell"><i class="flaticon-settings"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <div class="dlab-separator bg-primary"></div>
                                        <h2 class="dlab-tilte counter">{{__('home.point2_counter')}}</h2>
                                        <p>{{__('home.point2_description')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="icon-bx-wraper center counter-style-5">
                                    <div class="icon-xl m-b20">
                                        <span class="icon-cell"><i class="flaticon-conveyor-1"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <div class="dlab-separator bg-primary"></div>
                                        <h2 class="dlab-tilte counter">{{__('home.point3_counter')}}</h2>
                                        <p>{{__('home.point3_description')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company staus End -->
        <!-- Team Section -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head style2 text-center">
                    <h2 class="title">{{__('titles.team')}}</h2>
                    <p>{{__('home.team_description')}}</p>
                </div>
                <div class="row">
                    @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="dlab-box m-b30 dlab-team6">
                            <div class="dlab-media">
                                <a href="team-2.html">
                                    <img alt="" src="{{asset('storage/'.$team->picture)}}">
                                </a>
                            </div>
                            <div class="dlab-info">
                                <h4 class="dlab-title"><a href="team-2.html">{{$team->name}}</a></h4>
                                <span class="dlab-position">{{$team->title}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team Section End -->
        <!-- Testimonials -->
        <div class="section-full content-inner bg-gray">
            <div class="container">
                <div class="section-head style2 text-center">
                    <h2 class="title">{{__('titles.testimonials')}}
                        << /h2>
                            <p>{{__('home.testimonials_description')}}</p>
                </div>
                <div class="testimonial-five owl-carousel owl-btn-center-lr owl-btn-2 primary dots-style-3 owl-theme">
                    @foreach($testimonials as $testimonial)
                    <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="testimonial-14 quote-left">
                            <div class="testimonial-detail clearfix text-white">
                                <h5 class="testimonial-name m-t10 m-b5">{{$testimonial->name}}</h5>
                                <span class="testimonial-position">{{$testimonial->title}}</span>
                            </div>
                            <div class="testimonial-text">
                                <p>{{$testimonial->content}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonials End -->
        <!-- Latest blog -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-head style2 text-center">
                    <h2 class="title">{{__('titles.blog')}}</h2>
                    <p>{{__('home.blog_description')}}</p>
                </div>
                <div class="blog-carousel owl-none owl-carousel">

                    @foreach($blogs as $blog)
                    <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="blog-post post-style-2">
                            <div class="dlab-post-media dlab-img-effect">
                                <a href="#"><img src="{{asset('storage/'.$blog->picture)}}" alt=""></a>
                            </div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-meta">
                                    <ul>
                                        <li class="post-date"> <strong>{{date('d M', strtotime($blog->date))}}</strong> <span> {{date('Y', strtotime($blog->date))}}</span> </li>

                                        <li class="post-author"> By <a href="#">{{$blog->reporter}}</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-title">
                                    <h4 class="post-title"><a href="#">{{$blog->title}}</a></h4>
                                </div>
                                <!-- <div class="dlab-post-readmore">
                                    <a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button btnhover21">READ MORE</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Latest blog END -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END -->


@endsection
