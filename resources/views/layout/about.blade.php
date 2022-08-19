@extends('index')
@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{'storage/'.$path}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{__('titles.about')}}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">{{__('titles.home')}}</a></li>
                        <li>{{__('titles.about')}}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="our-story">
                            <span>{{__('about.title1')}}</span>
                            <h2 class="title">{{__('about.title2')}} <br />{{__('about.title3')}} <br /><span class="text-primary">{{__('about.title4')}}</span></h2>
                            <h4 class="title">{{__('about.paragraph1')}}.</h4>
                            <p>{{__('about.paragraph2')}}</p>
                            <a href="javascript:void(0);" class="site-button">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30 our-story-thum">
                        <img src="{{asset('storage/'.$about->about_image_1)}}" class="radius-sm" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->
        <!-- Abouts -->
        <div class="section-full box-about-list">
            <div class="row spno">
                <div class="col-lg-6 col-md-12">
                    <img src="{{asset('storage/'.$about->about_image_2)}}" alt="" class="img-cover" />
                </div>
                <div class="col-lg-6 col-md-12 bg-primary">
                    <div class="max-w700 m-auto p-tb50 p-lr20">
                        <div class="text-white">
                            <h2>{{__('about.title4')}}</h2>
                        </div>
                        <div class="icon-bx-wraper m-b30 left">
                            <div class="icon-md">
                                <a href="javascript:void(0);" class="icon-cell text-white">
                                    <i class="flaticon-factory"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte">{{__('about.point1')}}</h4>
                                <p>{{__('about.point1_description')}}</p>
                            </div>
                        </div>
                        <div class="icon-bx-wraper m-b30 left">
                            <div class="icon-md">
                                <a href="javascript:void(0);" class="icon-cell text-white">
                                    <i class="flaticon-settings"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                            <h4 class="dlab-tilte">{{__('about.point2')}}</h4>
                                <p>{{__('about.point2_description')}}</p>
                            </div>
                        </div>
                        <div class="icon-bx-wraper left">
                            <div class="icon-md">
                                <a href="javascript:void(0);" class="icon-cell text-white">
                                    <i class="flaticon-worker"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                            <h4 class="dlab-tilte">{{__('about.point3')}}</h4>
                                <p>{{__('about.point3_description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Abouts END -->
        <!-- Our Services -->
        <div class="section-full bg-gray content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title"> {{__('about.services_title')}}</h2>
                    <p>{{__('about.services_description')}}</p>
                </div>
                <div class="section-content row">
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="01">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-robot-arm"></i></a>
                            </div>
                            <div class="icon-content">
                                <h2 class="dlab-tilte">{{__('about.service1_title')}}</h2>
                                <p>{{__('about.service1_description')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="02">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-factory-1"></i></a>
                            </div>
                            <div class="icon-content">
                            <h2 class="dlab-tilte">{{__('about.service2_title')}}</h2>
                                <p>{{__('about.service2_description')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="03">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-fuel-station"></i></a>
                            </div>
                            <div class="icon-content">
                            <h2 class="dlab-tilte">{{__('about.service3_title')}}</h2>
                                <p>{{__('about.service3_description')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="04">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-fuel-truck"></i></a>
                            </div>
                            <div class="icon-content">
                            <h2 class="dlab-tilte">{{__('about.service4_title')}}</h2>
                                <p>{{__('about.service4_description')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="05">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-conveyor-1"></i></a>
                            </div>
                            <div class="icon-content">
                            <h2 class="dlab-tilte">{{__('about.service5_title')}}</h2>
                                <p>{{__('about.service5_description')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
                        <div class="icon-bx-wraper" data-name="06">
                            <div class="icon-lg">
                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-engineer-1"></i></a>
                            </div>
                            <div class="icon-content">
                            <h2 class="dlab-tilte">{{__('about.service6_title')}}</h2>
                                <p>{{__('about.service6_description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- About progress -->
        <div class="section-full about-progress">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-12 bg-white">
                        <div class="max-w700  m-auto content-inner">
                            <div class="section-head">
                                <h2 class="title">{{__('about.title5')}}</h2>
                                <p>{{__('about.title5_description')}}</p>
                            </div>
                            <div class="about-progress-box">
                                <h6 class="text-primary">{{__('about.point1')}}<span class="progress-num pull-right">{{__('about.point1_percent')}}%</span></h6>
                                <div class="about-progress-bar bg-gray-dark">
                                    <div class="about-progress bg-primary wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s" style="width: {{__('about.point1_percent')}}%;"></div>
                                </div>
                            </div>
                            <div class="about-progress-box">
                                <h6 class="text-primary">{{__('about.point2')}}<span class="progress-num pull-right">{{__('about.point2_percent')}}%</span></h6>
                                <div class="about-progress-bar bg-gray-dark">
                                    <div class="about-progress bg-primary wow slideInLeft" data-wow-delay="0.4s" data-wow-duration="2s" style="width: {{__('about.point2_percent')}}%;"></div>
                                </div>
                            </div>
                            <div class="about-progress-box">
                                <h6 class="text-primary">{{__('about.point3')}}<span class="progress-num pull-right">{{__('about.point2_percent')}}%</span></h6>
                                <div class="about-progress-bar bg-gray-dark">
                                    <div class="about-progress bg-primary wow slideInLeft" data-wow-delay="0.6s" data-wow-duration="2s" style="width: {{__('about.point2_percent')}}%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 p-a0">
                        <img src="{{asset('storage/'.$about->about_image_3)}}" alt="" class="img-cover " />
                    </div>
                </div>
            </div>
        </div>
        <!-- About progress END -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END-->
@endsection
