<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">
   <?php $siteSetup=\App\SiteSetup::all()->first();?>
    <title>{{$siteSetup->site_name}} | Home</title>

    <!-- Bootstrap core CSS -->
{!!Html::style("css/bootstrap.min.css")!!}
{!!Html::style("css/theme.css" )!!}
{!!Html::style("css/bootstrap-reset.css" )!!}
 <!--external css-->
{!!Html::style("assets/font-awesome/css/font-awesome.css")!!}
{!!Html::style("assets/fancybox/source/jquery.fancybox.css" )!!}
{!!Html::style("css/flexslider.css")!!}
{!!Html::style("assets/bxslider/jquery.bxslider.css")!!}
{!!Html::style("assets/fancybox/source/jquery.fancybox.css")!!}

{!!Html::style("assets/revolution_slider/css/rs-style.css" )!!}
{!!Html::style("assets/revolution_slider/rs-plugin/css/settings.css")!!}

{!!Html::style("css/superfish.css" )!!}
{!!Html::style("css/superfish-vertical.css" )!!}

 <!-- Custom styles for this template -->
{!!Html::style("css/style.css")!!}
{!!Html::style("css/style-responsive.css" )!!}

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
 <!--[if lt IE 9]>
    {!!Html::script("js/html5shiv.js")!!}
    {!!Html::script("js/respond.min.js")!!}
 <![endif]-->
</head>

<body>
<!--header start-->
<header class="header-frontend">
 <div class="navbar navbar-default navbar-static-top">
     <div class="container">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="fa fa-bar"></span>
                 <span class="fa fa-bar"></span>
                 <span class="fa fa-bar"></span>
             </button>
             <a class="navbar-brand" href="{{url('home')}}"><span style="    font-size: 24px;font-weight: 600;text-transform: uppercase;"> <?php $contestDefault=\App\Contest::where('default','=','Yes')->get()->first();?>@if(count($contestDefault)> 0){{$contestDefault->contest_name}}@endif</span></a>
         </div>
         <div class="navbar-collapse collapse ">
             @yield('menus')

         </div>
     </div>
 </div>
</header>
<!--header end-->

<!--breadcrumbs start-->
<div class="breadcrumbs">
 <div class="container">
     <div class="row">
         <div class="col-lg-4 col-sm-9">
             <h1>@yield('breadcrumbs')</h1>
         </div>
     </div>
 </div>
</div>
<!--breadcrumbs end-->

<!--container start-->
@yield('contents')

<!--container end-->

<!--footer start-->
<footer class="footer">
 <div class="container">
     <div class="row">
         <div class="col-lg-3 col-sm-3">
             <h1>contact info</h1>
             <address>
                 <p>{{$siteSetup->site_name}}<br/>{{$siteSetup->postal_address}}<br/>
                {{$siteSetup->physical_address}}</p>
                 <p>Phone : {{$siteSetup->phone1}}</p>
                 <p>Fax : {{$siteSetup->phone2}}</p>
                 <p>Email : <a href="javascript:;">{{$siteSetup->email}}</a></p>
             </address>
         </div>
         <div class="col-lg-5 col-sm-5">
             <h1>latest tweet</h1>
             <div class="tweet-box">
                 <i class="fa fa-twitter"></i>
                 <em>Please follow <a href="javascript:;">@contesttz</a> for all future updates of us! <a href="javascript:;">twitter.com/contesttz</a></em>
             </div>
         </div>
         <div class="col-lg-3 col-sm-3 col-lg-offset-1">
             <h1>stay connected</h1>
             <ul class="social-link-footer list-unstyled">
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                 <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-skype"></i></a></li>
                 <li><a href="#"><i class="fa fa-github"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube"></i></a></li>
             </ul>
         </div>
     </div>
 </div>
</footer>
<!--footer end-->

<!-- js placed at the end of the document so the pages load faster -->
{!! Html::script("js/jquery.js")!!}
{!! Html::script("js/jquery-1.8.3.min.js")!!}
{!! Html::script("js/bootstrap.min.js")!!}
{!! Html::script("js/hover-dropdown.js")!!}

{!! Html::script("js/jquery.flexslider.js")!!}
{!! Html::script("assets/bxslider/jquery.bxslider.js")!!}


{!! Html::script("js/superfish.js")!!}
{!! Html::script("js/jquery.isotope.js")!!}

{!! Html::script("js/jquery.easing.min.js")!!}
{!! Html::script("js/link-hover.js")!!}

{!! Html::script("assets/fancybox/source/jquery.fancybox.pack.js")!!}


<!--common script for all pages-->
{!! Html::script("js/common-scripts.js")!!}



<script>


 $(window).load(function() {
     $('[data-zlname = reverse-effect]').mateHover({
         position: 'y-reverse',
         overlayStyle: 'rolling',
         overlayBg: '#fff',
         overlayOpacity: 0.7,
         overlayEasing: 'easeOutCirc',
         rollingPosition: 'top',
         popupEasing: 'easeOutBack',
         popup2Easing: 'easeOutBack'
     });
 });

 $(window).load(function() {
     $('.flexslider').flexslider({
         animation: "slide",
         start: function(slider) {
             $('body').removeClass('loading');
         }
     });
 });

 //    fancybox
 jQuery(".fancybox").fancybox();

 $(function() {
     var $container = $('#gallery');
     $container.isotope({
         itemSelector: '.item',
         animationOptions: {
             duration: 750,
             easing: 'linear',
             queue: false
         }
     });

     // filter items when filter link is clicked
     $('#filters a').click(function() {
         var selector = $(this).attr('data-filter');
         $container.isotope({filter: selector});
         return false;
     });
 });



</script>

</body>
</html>
