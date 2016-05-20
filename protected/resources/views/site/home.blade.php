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


                <?php $contestDefault=\App\Contest::where('default','=','Yes')->get()->first();?>
                    @if(count($contestDefault)>0 && $contestDefault != null)
                        @if($contestDefault->contestants !=null && count($contestDefault->contestants)>0)
                            @foreach($contestDefault->contestants as $contestants)
                            <div class="element design development item view view-tenth" data-zlname="reverse-effect">
                                <img src="{{ asset('img/profile/'.$contestants->profile_image) }}" alt="{{$contestants->full_name}}" />
                                <div class="mask">
                                    <h2>{{$contestants->full_name}}</h2>
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="{{ asset('img/profile/'.$contestants->profile_image) }}">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    @endif

            </div>
        </div>
        <!--portfolio end-->
        <!--recent work start-->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="r-work">Contestants showcase</h2>
                <ul class="bxslider">
                    @if(count($contestDefault)>0 && $contestDefault != null)
                        @if($contestDefault->contestants !=null && count($contestDefault->contestants)>0)
                            @foreach($contestDefault->contestants as $contestants)
                    <li>
                        <div class="element item view view-tenth" data-zlname="reverse-effect">
                            <img src="{{ asset('img/profile/'.$contestants->profile_image) }}" alt="{{$contestants->full_name}}" />
                            <div class="mask">
                                <a data-zl-popup="link" href="javascript:;">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a data-zl-popup="link2" class="fancybox" rel="group" href="{{ asset('img/profile/'.$contestants->profile_image) }}">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                            @endforeach
                        @endif
                    @endif

                </ul>
            </div>
        </div>
        <!--recent work end-->
    </div>
    @stop