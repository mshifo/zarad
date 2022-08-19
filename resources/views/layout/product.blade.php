@extends('index')
@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('storage/'.$path)}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{__('titles.product_details')}}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">{{__('titles.home')}}</a></li>
                        <li>{{__('titles.product_details')}}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="section-full content-inner bg-white">
        <!-- Product details -->
        <div class="container woo-entry">
            <div class="row m-b30">
                <div class="col-md-5 col-lg-5 col-sm-12">

                    <div class="product-gallery on-show-slider lightgallery" id="lightgallery">
                        <div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <div class="dlab-thum-bx dlab-img-overlay1 ">
                                            <img src="{{asset('storage/'.$product->main_image)}}" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <span data-exthumbimage="{{asset('storage/'.$product->main_image)}}" data-src="{{asset('storage/'.$product->main_image)}}" class="check-km">
                                                        <i class="ti-fullscreen"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach(json_decode($product->other_images) as $image)
                            <div class="item">
                                <div class="mfp-gallery">
                                    <div class="dlab-box">
                                        <div class="dlab-thum-bx dlab-img-overlay1 ">
                                            <img src="{{asset('storage/'.$image)}}" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <span data-exthumbimage="{{asset('storage/'.$image)}}" data-src="{{asset('storage/'.$image)}}" class="check-km">
                                                        <i class="ti-fullscreen"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div id="sync2" class="owl-carousel owl-theme owl-none">
                            <div class="item">
                                <div class="dlab-media">
                                    <img src="{{asset('storage/'.$product->main_image)}}" alt="">
                                </div>
                            </div>
                            @foreach(json_decode($product->other_images) as $image)
                            <div class="item">
                                <div class="dlab-media">
                                    <img src="{{asset('storage/'.$image)}}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>



                <div class="col-md-7 col-lg-7 col-sm-12">

                    <div class="dlab-post-title">
                        <h4 class="post-title"><a href="javascript:void(0);">{{$product->name}}</a></h4>
                        <p class="m-b10">{{$product->brief}}</p>
                        <div class="dlab-divider bg-gray tb15">
                            <i class="icon-dot c-square"></i>
                        </div>
                    </div>



                    <div class="row">
                        <div class="m-b30 col-md-7 col-sm-8">
                            <h6>{{__('product.sizes')}}</h6>
                            <div class="btn-group product-item-size" data-toggle="buttons">
                                @foreach($product->sizes as $size)
                                <label class="btn ">
                                    <input type="radio" name="options" id="option1" checked>{{$size->size_name}}
                                </label>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="m-b30">
                        <h6>{{__('product.colors')}}</h6>
                        <div class="btn-group product-item-color" data-toggle="buttons">
                            @foreach($product->colors as $color)
                            <label class="btn bg-{{$color->name}} ">
                                <input type="radio" name="options" id="option6" checked>
                            </label>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dlab-tabs  product-description tabs-site-button">
                        <ul class="nav nav-tabs ">
                            <li><a data-toggle="tab" href="#web-design-1" class="active"><i class="fa fa-globe"></i> {{__('product.description')}}</a></li>

                        </ul>
                        <div class="tab-content">
                            <div id="web-design-1" class="tab-pane active">
                               {!! $product->description !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="m-b20">{{__('product.related')}}</h5>
                    <div class="img-carousel-content owl-carousel owl-btn-center-lr owl-btn-1 primary">
                        @foreach($products as $product)
                        <div class="item">
                            <div class="item-box">
                                <div class="item-img">
                                <img src="{{asset('storage/'.$product->main_image)}}" alt="">
                                </div>
                                <div class="item-info text-center text-black p-a10">
                                    <h6 class="item-title text-uppercase font-weight-500"><a href="{{route('product', $product->id)}}">{{$product->name}}</a></h6>

                                    <h4 class="item-price">
                                        <del>EGP {{$product->old_price}}</del>
                                        <span class="text-primary">EGP {{$product->price}}</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Product details -->
    </div>
    <!-- contact area  END -->
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
<!-- Content END-->
@endsection
@push('custom-scripts')
<script>
    $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: false,
            dots: false,
            loop: true,
            rtl: false,
            responsiveRefreshRate: 200,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        }).on('changed.owl.carousel', syncPosition);

        sync2.on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        }).owlCarousel({
            items: slidesPerPage,
            dots: false,
            nav: false,
            margin: 5,
            rtl: false,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            //sync1.data('owl.carousel').to(number, 300, true);

            sync1.data('owl.carousel').to(number, 300, true);

        });
    });
</script>
@endpush
