<footer class="site-footer text-white">
    <div class="footer-top bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
                    <div class="widget widget_services border-0">
                        <h5 class="m-b30 text-white">{{__('footer.title1')}}</h5>
                        <ul>
                            <li> <a href="{{route('home')}}">{{__('titles.home')}}</a></li>
                            <li> <a href="{{route('services')}}">{{__('titles.services')}}</a></li>
                            <li> <a href="{{route('products')}}">{{__('titles.products')}}</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-7 col-xl-2 col-lg-3 col-sm-6 footer-col-4">
                    <div class="widget widget_services border-0">
                        <h5 class="m-b30 text-white">{{__('footer.links')}}</h5>
                        <ul>
                        <li> <a href="{{route('about')}}">{{__('titles.about')}}</a></li>
                            <li> <a href="{{route('faq')}}">{{__('titles.faq')}}</a></li>
                            <li><a href="{{route('contact')}}">{{__('titles.contact')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-lg-3 col-sm-6 footer-col-4">
                    <div class="widget widget_getintuch">
                        <h5 class="m-b30 text-white ">{{__('title.contact')}}</h5>
                        <ul>
                            <li><i class="ti-location-pin"></i><strong>{{__('contact.address')}}</strong> {{$contacts->address}} </li>
                            <li><i class="ti-mobile"></i><strong>{{__('contact.phone')}}</strong>{{$contacts->phone1}}</li>
                            <li><i class="ti-email"></i><strong>  {{__('contact.email')}}</strong>{{$contacts->email}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4 col-lg-4 col-sm-6 footer-col-4 ">
                    <div class="widget">
                        <h5 class="m-b30 text-white">{{__('footer.newsletter')}}</h5>
                        <p class="text-capitalize m-b20">{{__('footer.newsletter2')}}</p>
                        <div class="subscribe-form m-b20">
                            <form class="dzSubscribe" action="" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="input-group">
                                    <input name="dzEmail" required="required" class="form-control" placeholder="{{__('contact.email')}}" type="email">
                                    <span class="input-group-btn">
                                        <button name="submit" value="Submit" type="submit" class="site-button black btnhover21 radius-xl">{{__('buttons.submit')}}</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <ul class="list-inline m-a0">
                            <li><a href="{{$contacts->facebook}}" class="site-button btnhover21 facebook circle "><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$contacts->youtube}}" class="site-button btnhover21 youtube circle "><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{$contacts->linkedin}}" class="site-button btnhover21 linkedin circle "><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{$contacts->instagram}}" class="site-button btnhover21 instagram circle "><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{$contacts->twitter}}" class="site-button btnhover21 twitter circle "><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom  bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left "> <span>Copyright © 2021 <a href="/" target="_blank">Zarad</a></span> </div>
                <!-- <div class="col-md-6 col-sm-6 text-right ">
                    <div class="widget-link ">
                        <ul>
                            <li><a href="about-2.html"> About</a></li>
                            <li><a href="help-desk.html"> Help Desk</a></li>
                            <li><a href="privacy-policy.html"> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</footer>
