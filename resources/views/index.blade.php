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

  <title>Title page: {{ app()->getLocale(); }}</title>  

<link href="./main.3f6952e4.css" rel="stylesheet"></head>

<body class="minimal">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
<!-- Add your content of header -->
<header>
 
  @include('layout.nav')
</header>
<!-- Add your site or app content here -->

<div class="hero-full-container background-image-container white-text-container" style="background-image: url('./assets/images/space.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="hero-full-wrapper">
          <div class="text-content">
            <h1>{{ __('indexPage hello') }},<br>
              <span id="typed-strings">
                <span>@lang('indexPage name')</span>
                <span>{{ __('indexPage work') }}</span>
                <span>{{ __('indexPage occupation') }}</span>
              </span>
              <span id="typed"></span>
            </h1>
            <p style="color:#fff;font-size:2rem;background:black" >call at: <br>  <span class="renderActiveNo" style="color:#fff;font-size:2rem;background:black">777777777777777</span></p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     type();
     movingBackgroundImage();
  });
</script>

<script src="dynamicPhoneNo.js"></script>


<script type="text/javascript" src="./main.70a66962.js"></script></body>

</html>