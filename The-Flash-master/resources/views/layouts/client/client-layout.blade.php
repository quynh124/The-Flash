<!doctype html>
<html lang="tr">

<!-- Mirrored from www.kayserispor.gen.tr/ks/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 05:37:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="images/fav.png" type="image/png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/css-client/custom.css">
<link rel="stylesheet" href="/css-client/responsive.css">
<link rel="stylesheet" href="/css-client/color.css">
<link rel="stylesheet" href="/css-client/bootstrap.min.css">
<link rel="stylesheet" href="/css-client/fontawesome.css">
<link rel="stylesheet" href="/css-client/owl.carousel.min.css">
<link rel="stylesheet" href="/css-client/prettyPhoto.css">
<!--Rev Slider Start-->
<link rel="stylesheet" href="/js-client/rev-slider/css/settings.css"  type='text/css' media='all' />
<link rel="stylesheet" href="/js-client/rev-slider/css/layers.css"  type='text/css' media='all' />
<link rel="stylesheet" href="/js-client/rev-slider/css/navigation.css"  type='text/css' media='all' />

{{-- Lib Toast Message --}}
<link rel="stylesheet" href="/libraries/messages/messages.css">

<!--Rev Slider End-->
<title>Soccer</title>
</head>
<body>
    {{-- Toast DIV ID --}}
    <div id="toast"></div>
    
    {{-- JS Toast Message --}}
    <script src="/libraries/messages/messages.js"></script>
<!--Wrapper Start-->
<div class="wrapper">

    @include('partials-client.header')
      @yield('content')
    @include('partials-client.footer')
</div>

  <!-- Optional JavaScript -->
  <script src="/js-client/jquery-3.3.1.min.js"></script>
  <script src="/js-client/jquery-migrate-3.0.1.js"></script>
  <script src="/js-client/popper.min.js"></script>
  <script src="/js-client/bootstrap.min.js"></script>
  <script src="/js-client/mobile-nav.js"></script>
  <script src="/js-client/owl.carousel.min.js"></script>
  <script src="/js-client/isotope.js"></script>
  <script src="/js-client/jquery.prettyPhoto.js"></script>
  <script src="/js-client/jquery.countdown.js"></script>
  <script src="/js-client/custom.js"></script>
  <!--Rev Slider Start-->
  <script type="text/javascript" src="/js-client/rev-slider/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="/js-client/rev-slider/js/extensions/revolution.extension.video.min.js"></script>
  </body>

  @if (Session::has('feedback'))
      <script>
        toast({
          title: 'Feedback success',
          message: 'Successfully feedback',
          type: 'success'
        })
      </script>
  @endif
    @if (Session::has('contact'))
      <script>
        toast({
          title: 'Contact success',
          message: 'Successfully contact',
          type: 'success'
        })
      </script>
  @endif

  <!-- Mirrored from www.kayserispor.gen.tr/ks/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 05:37:45 GMT -->
  </html>
