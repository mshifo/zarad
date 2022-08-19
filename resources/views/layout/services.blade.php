@extends('index')
@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr3.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{__('titles.services')}}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">{{__('titles.home')}}</a></li>
                        <li>{{__('titles.services')}}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Services Info Head -->
        <div class="section-full content-inner-2 bg-primary overlay-primary-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 service-main-title text-white text-center">
                        <h3 class="title max-w700 m-auto">{{__('services.heading')}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Info Head END -->
        <!-- Services -->
        <div class="section-full">
            <div class="row spno about-industry">
                <div class="col-lg-8">
                    <img src="{{asset('storage/'.$media->services_image_1)}}" alt="" class="img-cover">
                </div>
                <div class="col-lg-4 bg-white">
                    <div class="service-box style2">
                        <div>
                            @php $service = explode(' ',$services[0]->name) @endphp
                            <h2 class="title text-black"><span>{{$service[0]}}</span> <br />{{$service[1]}}</h2>
                            <p>{{$services[0]->breif}}</p>
                            <a href="{{route('service',$services[0]->id)}}" class="site-button outline outline-2">{{__('buttons.about_us')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <img src="{{asset('storage/'.$media->services_image_2)}}" alt="" class="img-cover">
                </div>
                <div class="col-lg-4 bg-secondry text-white">
                    <div class="service-box style2">
                        <div>
                            @php $service = explode(' ',$services[1]->name) @endphp
                            <h2 class="title text-black"><span>{{$service[0]}}</span> <br />{{$service[1]}}</h2>
                            <p>{{$services[1]->breif}}</p>
                            <a href="{{route('service',$services[1]->id)}}" class="site-button outline outline-2">{{__('buttons.about_us')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <img src="{{asset('storage/'.$media->services_image_3)}}" alt="" class="img-cover">
                </div>
                <div class="col-lg-4 bg-primary text-white">
                    <div class="service-box style2">
                        <div>
                            @php $service = explode(' ',$services[2]->name) @endphp
                            <h2 class="title text-black"><span>{{$service[0]}}</span> <br />{{$service[1]}}</h2>
                            <p>{{$services[2]->breif}}</p>
                            <a href="{{route('service',$services[2]->id)}}" class="site-button outline outline-2">{{__('buttons.about_us')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <img src="{{asset('storage/'.$media->services_image_4)}}" alt="" class="img-cover">
                </div>
                <div class="col-lg-4 bg-primary text-white">
                    <div class="service-box style2">
                        <div>
                            @php $service = explode(' ',$services[2]->name) @endphp
                            <h2 class="title text-black"><span>{{$service[0]}}</span> <br />{{$service[1]}}</h2>
                            <p>{{$services[2]->breif}}</p>
                            <a href="{{route('service',$services[2]->id)}}" class="site-button outline outline-2">{{__('buttons.about_us')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 bg-white">
                    <div class="service-box style2">
                        <div>
                            @php $service = explode(' ',$services[3]->name) @endphp
                            <h2 class="title text-black"><span>{{$service[0]}}</span> <br />{{$service[1]}}</h2>
                            <p>{{$services[3]->breif}}</p>
                            <a href="{{route('service',$services[3]->id)}}" class="site-button outline outline-2">{{__('buttons.about_us')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                <img src="{{asset('storage/'.$media->services_image_5)}}" alt="" class="img-cover">
                </div>
            </div>
        </div>
        <!-- Services END -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END-->

@endsection
