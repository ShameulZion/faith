<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Faith In Action | Empowering Community</title>
  <!-- Stylesheets -->
  <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
  
  <!-- Color File -->
  <link href="{{ asset('frontend/css/color.css') }}" rel="stylesheet">

  <link rel="shortcut icon" href="{{ setting('site_favicon') != null ?  Storage::disk('media')->url(setting('site_favicon')) : '' }}" type="image/x-icon">
  <link rel="icon" href="{{ setting('site_favicon') != null ?  Storage::disk('media')->url(setting('site_favicon')) : '' }}" type="image/x-icon">
  <!-- main css -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <!-- Responsive File -->
  <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  @notifyCss
</head>

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"><div class="icon"></div></div> -->
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
        <div class="popup-inner">
        <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Main Header -->
    <header class="main-header"  id="header">
		@include('layouts.frontend.partial.header')
    </header>
    <!-- End Main Header -->

    
	@yield('content')

	<!-- Main Footer -->
	<footer class="main-footer" id="footer">
		@include('layouts.frontend.partial.footer')
	</footer>

</div>
<!--End pagewrapper-->
<!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/js/lazyload.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <x:notify-messages />
    @notifyJs
</body>
</html>