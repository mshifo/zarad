@extends('index')
@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('storage/'.$path)}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{__('titles.service_details')}}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">{{__('titles.home')}}</a></li>
                        <li>{{__('titles.services')}}</li>
                        <li>{{__('titles.service_details')}}</li>
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
        <div class="section-full content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="widget sidebar-widget ext-sidebar-menu widget_nav_menu">
                            <ul class="menu">
                                <li><a href="javascript:void(0);">{{__('services.all_services')}}</a> </li>
                                @foreach($services as $service)
                                <li class="active"><a href="{{route('service',$service->id)}}">{{$service->name}}</a> </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="download-file">
                                <h4 class="title">{{__('services.get_brochures')}}</h4>
                                <ul>
                                    @if(json_decode($service->company_brochure))
                                    <li>
                                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url(json_decode($service->company_brochure)[0]->download_link) ?: '' }}" target="_blank">
                                            <div class="text">{{__('services.company_brochures')}}</div>
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </li>
                                    @endif
                                    @if(json_decode($service->company_info))
                                    <li>
                                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url(json_decode($service->company_info)[0]->download_link) ?: '' }}" target="_blank">
                                            <div class="text">{{__('services.company_info')}}</div>
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7 m-b30">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="dlab-box">
                                    <div class="dlab-media"> <a href="javascript:void(0);"><img src="{{asset('storage/'.$service->image1)}}" alt=""></a> </div>
                                    <div class="dlab-info m-t30 ">
                                        {!! $service->paragraph1 !!}
                                        <!-- <h4 class="dlab-title m-t0"><a href="javascript:void(0);">The Initial Planning </a></h4>
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="dlab-box">
                                    <div class="dlab-media m-b30 p-b5"> <a href="javascript:void(0);"><img src="{{asset('storage/'.$service->image2)}}" alt=""></a></div>
                                    <div class="dlab-media"> <a href="javascript:void(0);"><img src="{{asset('storage/'.$service->image3)}}" alt=""></a></div>
                                    <div class="dlab-info m-t30">
                                        {!! $service->paragraph2 !!}
                                        <!-- <h4 class="dlab-title m-t0"><a href="javascript:void(0);">From Start To finish</a></h4>
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END-->
@endsection
