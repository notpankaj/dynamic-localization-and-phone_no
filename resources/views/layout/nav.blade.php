<nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        
        <ul class="nav navbar-nav ">
          <li><a href="/" title="">01 : @lang('home')</a></li>
          <li><a href="/works" title="">02 : {{ __('works') }}</a></li>
          <li><a href="/about" title="">03 : {{ __('about_me') }}</a></li>
          <li><a href="/contact" title="">04 : {{ __('contact') }}</a></li>
          <li><a href="/components" title="">05 : {{ __('components') }}</a></li>
          <li><a href="/numberList" title="">69 : Set Number</a></li>
        </ul>

        <br>
       <span>
        <a href='/change/lang/?lang=en' style="color: #000" >EN</a>
        <a href='/change/lang/?lang=jp' style="color: #000"  >JP</a>
       </span>


        
      </div> 
    </div>
  </nav>