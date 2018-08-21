<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @yield('headscript')

  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/vendor/zurb/foundation.min.css">
  <link rel="stylesheet" href="/css/myapp.css">

</head>

<body>
  <div class="top-nav">
    <div class="row">
      <div class="columns large-6 medium-6">
        <ul class="top-list">
          <li><i class="fa fa-map-marker"></i><a href="contact"> Someplace, CA, USA</a></li>
          <li><i class="fa fa-phone"></i><a href="contact"> 555-555-5555</a></li>
          <li><i class="fa fa-envelope"></i><a href="contact"> email@host.net</a></li>
        </ul>
      </div>
      <div class="columns large-6 medium-6">
        <ul id="menu-topmenu" class="top-list-right">
          <li><a href="about">About Us</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="top-bar">
    <div class="row">
      <div class="top-bar-left">
        <img src="img/logo.png" style="width:25%;height:25%;">

      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="home">Home</a></li>
          <li><a href="menu1">Menu 1</a></li>
          <li><a href="menu2">Menu 2</a></li>
          <li><a href="menu3">Menu 3</a></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="showcase">
@yield('showcase')
  </section>



  <section class="domain-search">
  @yield('subshowcase')
  </section>

  <section class="section-a">
    @yield('section-a')
  </section>

  <section class="section-b">
    <h1>Quotes are quoted quotatiously</h1>
    <i class="fa fa-quote-left fa-3x" aria-hidden="true"></i> &nbsp;&nbsp;
    <i>Somebody said something once and I've written it down.</i>

  </section>



  <section class="section-c">
    <div class="row">
      <div class="columns large-3">
        <i class="fa fa-3x fa-book" aria-hidden="true"></i>
        <h4>Insightful</h4>
        <p>Cleverly discerning stuff about abstract figments!</p>
      </div>
      <div class="columns large-3">
        <i class="fa fa-3x fa-seedling" aria-hidden="true"></i>
        <h4>Thoughtful</h4>
        <p>We couldn't stop thinking even if we could!</p>
      </div>
      <div class="columns large-3">
        <i class="fa fa-3x fa-dove" aria-hidden="true"></i>
        <h4>Eponymous</h4>
        <p>We were even named after ourselves!</p>
      </div>
      <div class="columns large-3">
        <i class="fa fa-3x fa-user" aria-hidden="true"></i>
        <h4>Imaginitive</h4>
        <p>Collectively we've dreamed up as much as twice the people thinking half as long!</p>
      </div>
    </div>
  </section>

  <footer style="background-image:url(img/showcase.png); background-repeat: no-repeat; background-size:100%; background-position: 100% 100%;">
    <div class="row">
      <div class="columns large-3" style="color:#9b907e;">
        <p>ACME &copy; copyright <?php
        $copyYear = 3018;
        $curYear = date('Y');
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
        ?></p>
        <p>All your base are copyright &copy; to us. All Rights Reversed. </p>
      </div>
      <div class="columns large-3" style="color:#9b907e;">
        <h5>Church</h5>
        <ul class="menu vertical">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Contribute</a></li>
        </ul>
      </div>
      <div class="columns large-3" style="color:#9b907e;">
        <h5>Jump</h5>
        <ul class="menu vertical">
          <li><a href="#">Go here</a></li>
          <li><a href="#">Go there</a></li>
          <li><a href="#">Stay here</a></li>

        </ul>
      </div>
      <div class="columns large-3">

      <i class="fab fa-laravel fa-5x" style="color:#9b907e;"></i>
      </div>
    </div>
  </footer>


@yield('subpage')


<script src="/js/vendor/ten-1-seven/what-input.js"></script>
<script src="/js/vendor/zurb/foundation.js"></script>
<script src="/js/myapp.js"></script>
@yield('footerscript')
</body>

</html>
