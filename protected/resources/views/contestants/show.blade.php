@extends('layout.main')
@section('breadcrumbs')
    CONTESTANT SHOWCASE: {{$contestant->full_name}}
@stop
@section('menus')
    <ul class="nav navbar-nav">
        <li ><a href="{{url('home')}}">Home</a></li>
        <li><a href="{{url('about')}}">About Us</a></li>
        <li class="active"><a href="{{url('show-case')}}">Contest Showcase</a></li>
        <li><a href="{{url('contact-us')}}">Contact</a></li>
    </ul>
@stop
@section('contents')
    <?php $contestDefault=\App\Contest::where('default','=','Yes')->get()->first();?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="blog-img">
                                <img src="{{ asset('img/profile/'.$contestant->profile_image) }}" alt="{{$contestant->full_name}}" />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <h1><a href="#">{{$contestant->full_name}}</a></h1>
                            <p><?php echo $contestant->profile_note?></p>
                             <div class="post-comment">
                                <h3 class="skills">Post Comments</h3>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-lg-4">
                                            <input type="text" placeholder="Name" class="col-lg-12 form-control">
                                        </div>

                                        <div class="col-lg-4">
                                            <input type="text" placeholder="Email" class="col-lg-12 form-control">
                                        </div>

                                        <div class="col-lg-4">
                                            <input type="text" placeholder="2*five=? *" class="col-lg-12 form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <textarea placeholder="Message" rows="8" class=" form-control"></textarea>
                                        </div>
                                    </div>
                                    <p>
                                        <button type="submit" class="btn btn-danger pull-right">Post Comment</button>
                                    </p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="blog-side-item">
                    <div class="blog-post">
                        <h3>Latest News</h3>
                        <div class="media">

                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">Sample title  </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                        <div class="media">

                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">Sample title  </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                        <div class="media">

                            <div class="media-body">
                                <h5 class="media-heading"><a href="javascript:;">Sample title  </a></h5>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus amet int
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post">
                        <h3>Most viewed</h3>
                        @if(count($contestDefault)>0 && $contestDefault != null)
                            @if($contestDefault->contestants !=null && count($contestDefault->contestants)>0)
                                @foreach($contestDefault->contestantsMostViewed as $contestants)
                                    <div class="media">
                                        <a class="pull-left" href="{{url('contestant/review')}}/{{$contestants->id}}">
                                            <img class=" " src="{{ asset('img/profile/'.$contestants->profile_image)}}" alt="{{$contestants->full_name}}" width="81px" height="81px">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"><a href="{{url('contestant/review')}}/{{$contestants->id}}">{{$contestants->full_name}} </a></h5>
                                            <p>
                                                {{substr(strip_tags($contestants->profile_note),0,48)}}..<a href="#" style="color: #F77B6F;">Read More</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endif
                    </div>

                </div>
            </div>

        </div>
        <!--separator start-->
        <div class="row" style="background-color: #475268;padding: 10px 0; margin-top: 5px; margin-bottom: 5px"></div>
        <!--separator ends ->
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
                                            <a data-zl-popup="link" href="{{url('contestant/review')}}/{{$contestants->id}}">
                                                <i class="fa fa-bar-chart-o"></i>
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