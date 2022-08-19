@extends('index')
@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{'storage/'.$path}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{__('titles.contact')}}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">{{__('titles.home')}}</a></li>
                        <li>{{__('titles.contact')}}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="row">
                <!-- right part start -->
                <div class="col-lg-4 col-md-6 d-flex m-b30">
                    <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm">
                        <h3 class="m-b5">{{__('contact.title1')}}</h3>
                        <p>{{__('about.title1_description')}}</p>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper left m-b30">
                                <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">{{__('contact.address')}}:</h6>
                                    <p>{{$contacts->address}}</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left  m-b30">
                                <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">{{__('contact.email')}}:</h6>
                                    <p>{{$contacts->email}}</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left">
                                <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">{{__('contact.phone')}}</h6>
                                    <p>{{$contacts->phone1}}</p>
                                </div>
                            </li>
                        </ul>
                        <div class="m-t20">
                            <ul class="dlab-social-icon border dlab-social-icon-lg">
                                <li><a href="{{$contacts->facebook}}" class="fa fa-facebook bg-primary"></a></li>
                                <li><a href="{{$contacts->instagram}}" class="fa fa-instagram bg-primary"></a></li>
                                <li><a href="{{$contacts->linkedin}}" class="fa fa-linkedin bg-primary"></a></li>
                                <li><a href="{{$contacts->twitter}}" class="fa fa-twitter bg-primary"></a></li>
                                <li><a href="{{$contacts->youtube}}" class="fa fa-youtube bg-primary"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- right part END -->
                <!-- Left part start -->
                <div class="col-lg-4 col-md-6  mb-4 m-b30 mb-md-0">
                    <div class="p-a30 bg-gray clearfix radius-sm">
                        <h3 class="m-b10">{{__('contact.form_title')}}</h3>
                        <div class="dzFormMsg"></div>
                        <form method="post" class="dzForm" action="{{route('message')}}">
                            @csrf
                            <input type="hidden" value="Contact" name="dzToDo">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="name" type="text" required class="form-control" placeholder="{{__('contact.name')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control" required placeholder="{{__('contact.email')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="message" rows="4" class="form-control" required placeholder="{{__('contact.message')}}"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button "> <span>{{__('contact.submit')}}</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Left part END -->
                <div class="col-lg-4 d-flex m-b30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch radius-sm" style="border:0; width:100%; min-height:100%;" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->

@endsection
