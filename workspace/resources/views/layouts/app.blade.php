<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Tue May 03 2016 23:05:53 GMT+0000 (UTC) -->
<html data-wf-site="5728f709d483652b197fa2e8" data-wf-page="572928abb9102088306565c1">
<head>
  <meta charset="utf-8">
  <title>Fitness Matters</title>
  <meta property="og:title" content="layout">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href={{URL :: secure('src/css/normalize.css')}}>
  <link rel="stylesheet" type="text/css" href={{URL :: secure('src/css/webflow.css')}}>
  <link rel="stylesheet" type="text/css" href={{URL :: secure('src/css/alex-mathews-dynamite-site.webflow.css')}}>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Montserrat:400,700","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
      }
    });
  </script>
  <script type="text/javascript" src={{URL :: secure('src/js/modernizer.js')}}></script>
  <script type="text/javascript" src={{URL :: secure('src/js/webflow.js')}}></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
</head>
<body>
    
  <div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navbar">
    <div class="w-container navbarcontainer">
      <a href="#" class="w-nav-brand"><img width="107" src={{URL :: to('src/images/logo.png')}} class="image">
      </a>
      <div class="text-logo">Fitness Matters</div>
        @if(Auth::guest())
        <nav role="navigation" class="w-nav-menu"><a href="{{ url('/') }}" class="w-nav-link nav-link">Home</a><a href="{{ url('/about') }}" class="w-nav-link nav-link">About</a>
        </nav>
        @else
        <nav role="navigation" class="w-nav-menu"><a href="{{ url('/') }}" class="w-nav-link nav-link">Home</a><a href="{{ url('/about') }}" class="w-nav-link nav-link">About</a><a href="{{ url('/logout') }}" class="w-nav-link nav-link">Logout</a>
        </nav>
        @endif
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  
  @yield('content')
  
  <footer class="w-container footercontainer">
    <div class="w-row">
      <div class="w-col w-col-6">
        <div class="footertwxt">Copyright © 2008 Fitness Matters</div>
      </div>
      <div class="w-col w-col-6">
        <div class="footertwxt right">Contact: (793) 151-6230
          <br>Address: Ap #86 Sit Rd. Azusa New York 39531</div>
      </div>
    </div>
  </footer>
  
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src={{URL :: secure('src/js/webflow.js')}}></script>
  <script type="text/javascript">
       $(function() {
           $("#tabs").tabs();
       });
   </script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>