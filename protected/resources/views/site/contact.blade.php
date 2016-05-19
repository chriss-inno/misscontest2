@extends('layout.main')
@section('breadcrumbs')
    Contact Us
@stop
@section('menus')
    <ul class="nav navbar-nav">
        <li ><a href="{{url('home')}}">Home</a></li>
        <li><a href="{{url('about')}}">About Us</a></li>
        <li><a href="{{url('show-case')}}">Contest Showcase</a></li>
        <li class="active"><a href="{{url('contact-us')}}">Contact</a></li>
    </ul>
@stop
@section('contents')
    <!--google map start-->
    <div class="contact-map">
        <div id="map-canvas" style="width: 100%; height: 400px"></div>
    </div>
    <!--google map end-->
    <!--container start-->
    <div class="container">


        <div class="row">
            <div class="col-lg-5 col-sm-5 address">
                <?php $siteSetup=\App\SiteSetup::all()->first();?>
                <h4>{{$siteSetup->site_name}}</h4>
                <p>
                    {{$siteSetup->contact_person}}-{{$siteSetup->contact_person_title}} <br/>
                    {{$siteSetup->postal_address}} <br/>
                    {{$siteSetup->physical_address}}
                </p>
                <br>
                <br>
                <br>
                <p>
                    Phone <br/>
                    <span class="muted">{{$siteSetup->phone1}}</span><br/>
                    Fax <br/>
                    <span class="muted">{{$siteSetup->phone2}}</span><br/>
                    Email <br/>
                    <span class="muted">{{$siteSetup->email}}</span>
                </p>
            </div>
            <div class="col-lg-7 col-sm-7 address">
                <h4>Send a Message</h4>
                <div class="contact-form">
                    <form role="form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" placeholder="" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" placeholder="" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Message</label>
                            <textarea placeholder="" rows="5" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-danger" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!--container end-->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>

    <script>

        //google map
        function initialize() {
            var myLatlng = new google.maps.LatLng(-6.779774, 39.224582);
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Hello World!'
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);



    </script>
    @stop