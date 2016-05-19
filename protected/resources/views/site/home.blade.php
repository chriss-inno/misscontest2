@extends('layout.main')
@section('breadcrumbs')
    Welcome:
    @stop
@section('menus')
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('home')}}">Home</a></li>
        <li><a href="{{url('about')}}">About Us</a></li>
        <li><a href="{{url('show-case')}}">Contest Showcase</a></li>
        <li><a href="{{url('contact-us')}}">Contact</a></li>
    </ul>
@stop
@section('contents')
    <div class="container">
        <!--portfolio start-->
        <div class="gallery-container">

            <div id="gallery" class="col-4">

                <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img1.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img1.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element frontend item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img2.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img2.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element flat item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img3.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img3.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element development flat item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img4.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img4.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element design flat item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img5.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img5.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element dashboard frontend inner-photography item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img6.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img6.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element flat dashboard design item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img7.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img7.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img1.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img1.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img1.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img1.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element frontend item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img2.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img2.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element flat item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img3.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img3.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

                <div class="element development flat item view view-tenth" data-zlname="reverse-effect">
                    <img src="img/works/img4.jpg" alt="" />
                    <div class="mask">
                        <h2>Freshness </h2>
                        <a data-zl-popup="link" href="javascript:;">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img4.jpg">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--portfolio end-->
        <!--recent work start-->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="r-work">Meet our contestants</h2>
                <ul class="bxslider">
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="img/works/img1.jpg" alt="" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img1.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="img/works/img2.jpg" alt="" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img2.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="img/works/img3.jpg" alt="" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img3.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="img/works/img4.jpg" alt="" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img4.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="img/works/img5.jpg" alt="" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img5.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="img/works/img6.jpg" alt="" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img6.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="img/works/img7.jpg" alt="" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img7.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="img/works/img1.jpg" alt="" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="img/works/img1.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--recent work end-->
    </div>
    @stop