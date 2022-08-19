@extends('index')
@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{'storage/'.$path}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{__('titles.products')}}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">{{__('titles.home')}}</a></li>
                        <li>{{__('titles.products')}}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="section-full content-inner">
        <!-- Product -->
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="item-box m-b10">
                        <div class="item-img">
                            <img src="{{asset('storage/'.$product->main_image)}}" alt="" />

                        </div>
                        <div class="item-info text-center text-black p-a10">
                            <h6 class="item-title font-weight-500"><a href="{{route('product',$product->id)}}">{{$product->name}}</a></h6>

                            <h4 class="item-price"><del>EGP {{$product->old_price}}</del> <span class="text-primary">EGP {{$product->price}}</span></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Product END -->
    </div>
    <!-- Shop Service info -->
    <div class="section-full p-t50 p-b20 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="icon-bx-wraper left shop-service-info m-b30">
                        <div class="icon-md text-black radius">
                            <a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-gift"></i></a>
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte">{{__('products.title1')}}</h5>
                            <p>{{__('products.description1')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="icon-bx-wraper left shop-service-info m-b30">
                        <div class="icon-md text-black radius">
                            <a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-plane"></i></a>
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte">{{__('products.title2')}}</h5>
                            <p>{{__('products.description2')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="icon-bx-wraper left shop-service-info m-b30">
                        <div class="icon-md text-black radius">
                            <a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-history"></i></a>
                        </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte">{{__('products.title3')}}</h5>
                            <p>{{__('products.description3')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Service info End -->
</div>
<!-- Content End -->
@endsection
