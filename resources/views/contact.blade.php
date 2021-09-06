<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">

  <title>Title page</title>  

<link href="./main.3f6952e4.css" rel="stylesheet"></head>

<body class="">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
 <!-- Add your content of header -->
<header>
  
  @include('layout.nav')

  
</header>

<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">04 : {{ __('contactPage title') }}</h1>
          </div>
          
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <form action="" class="reveal-content">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="{{ __('contactPage email') }}">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="subject" placeholder="{{ __('contactPage subject') }}">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="{{ __('contactPage EnterYourMessage') }}"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default btn-lg">{{ __('contactPage send') }}</button>
                    </div>
                    <div class="col-md-5 address-container">
                      <ul class="list-unstyled">
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                          </span>
                          
      <span class="renderActiveNo">777777777777777</span>
    </li>
    <li>
      <span class="fa-icon">
        <i class="fa fa-at" aria-hidden="true"></i>
      </span>
      e-mail@mail.io
    </li>
    <li>
      <span class="fa-icon">
        <i class="fa fa fa-map-marker" aria-hidden="true"></i>
      </span>
      42 rue Moulbert 75016 Paris
    </li>
  </ul>
  <h3>{{ __('contactPage FollowMeMessage') }}</h3>
  <a href="http://www.facebook.com" title="" class="fa-icon">
    <i class="fa fa-facebook"></i>
  </a>
  <a href="http://www.twitter.com" title="" class="fa-icon">
    <i class="fa fa-twitter"></i>
  </a>
  <a href="http://www.linkedin.com" title="" class="fa-icon">
    <i class="fa fa-linkedin"></i>
  </a>
  
</div>
</div>
</form>
</div>

</div>

</div>
</div>
</div>
</div>


<footer class="footer-container text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>© UNTITLED | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>
      </div>
    </div>
  </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>

<script src="dynamicPhoneNo.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 
  
  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
  </script>
  
--> <script type="text/javascript" src="./main.70a66962.js"></script></body>

</html>