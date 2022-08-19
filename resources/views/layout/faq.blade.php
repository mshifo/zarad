@extends('index')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{'storage/'.$path}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{__('titles.faq')}} </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="javascript:void(0);">{{__('titles.home')}}</a></li>
							<li>{{__('titles.faq')}}</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Your Faq -->
            <div class="section-full overlay-white-middle content-inner" style="background-image:url(images/pattern/pic1.jpg);">
                <div class="container">
                    <div class="section-head text-black text-center">
						<h3 class="title">{{__('faq.title')}}</h3>
						<p>{{__('faq.description')}}</p>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12 m-b30">
							<div class="faq-video">
								<a class="play-btn popup-youtube" href="{{$media->faq_vedio}}">
								<i class="flaticon-play-button text-white"></i></a>
								<img src="{{asset('storage/'.$media->faq_cover_image)}}" alt="" class="img-cover radius-sm"/>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 m-b30">
							<div class="dlab-accordion faq-1 box-sort-in m-b30" id="accordion1">
                                @foreach($faqs as $i => $faq)
                                @php $i++; @endphp
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a href="javascript:void(0);" data-toggle="collapse" data-target="#faq{{$i}}" class="collapsed" aria-expanded="true">
											{{$faq->question}}</a> </h6>
									</div>
									<div id="faq{{$i}}" class="acod-body collapse" data-parent="#accordion1">
										<div class="acod-content">{{$faq->answer}}</div>
									</div>
								</div>
                                @endforeach
							</div>
						</div>
					</div>
					<!-- Faq Info -->
					<div class="row">
						<div class="col-lg-4 col-md-6 m-b30">
							<div class="icon-bx-wraper bx-style-1 bg-white p-a30 left">
								<div class="icon-md text-primary m-b20">
									<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-factory"></i></a>
								</div>
								<div class="icon-content">
									<h5 class="dlab-tilte">{{__('faq.point1')}}</h5>
									<p>{{__('faq.point1_description')}}</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 m-b30">
							<div class="icon-bx-wraper bx-style-1 bg-white p-a30 left">
								<div class="icon-md text-primary m-b20">
									<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-worker"></i></a>
								</div>
								<div class="icon-content">
									<h5 class="dlab-tilte">{{__('faq.point2')}}</h5>
									<p>{{__('faq.point2_description')}}</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 m-b30">
							<div class="icon-bx-wraper bx-style-1 bg-white p-a30 left">
								<div class="icon-md text-primary m-b20">
									<a href="javascript:void(0);" class="icon-cell"><i class="flaticon-settings"></i></a>
								</div>
								<div class="icon-content">
									<h5 class="dlab-tilte">{{__('faq.point3')}}</h5>
									<p>{{__('faq.point3_description')}}</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Faq Info END -->
                </div>
            </div>
            <!-- Your Faq End -->
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
