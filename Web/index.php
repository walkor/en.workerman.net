<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="An asynchronous event driven PHP framework for easily building fast, scalable network applications. Supports HTTP, Websocket and other custom protocols. Supports libevent, HHVM.">
<meta name="keywords" content="PHP WebSocket, PHP Socket,PHP event driven, PHP asynchronous">
<meta name="author" content="walkor">

<title>
  
    Workerman &middot; An asynchronous event driven PHP framework.
  
</title>

<!-- Bootstrap core CSS -->

<link href="/css/bootstrap.min.css" rel="stylesheet">


<!-- Documentation extras -->

<link href="/css/style.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="icon" href="/img/favicon.png">

  <body class="bs-docs-home">

    <!-- Docs master nav -->
  <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">Workerman</a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="/getting-started/">Getting started</a>
        </li>
        <li>
          <a href="http://wiki.workerman.net">Documentation</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </nav>
  </div>
</header>


    <!-- Page content of course! -->
    <main class="bs-docs-masthead" id="content" role="main" tabindex="-1">
  <div class="container">
    <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">W</span>
    <p class="lead">An asynchronous event driven PHP framework for easily building fast, scalable network applications.</p>
    <p class="lead">
      <a href="https://github.com/walkor/Workerman/archive/v3.1.7.zip" class="btn btn-outline-inverse btn-lg">Download Workerman</a>
    </p>
    <p class="version">Currently v3.1.7</p>
  </div>
</main>

<div class="bs-docs-featurette">
  <div class="container">
    <h2 class="bs-docs-featurette-title">Lightweight and efficient.</h2>
    <p class="lead">Workerman makes network applications development faster and easier. Event-driven, <br>non-blocking I/O makes it lightweight and efficient, perfect for real-time applications.</p>

    <hr class="half-rule">

       <h2 class="bs-docs-featurette-title">Examples</h2>
       <div class="col-sm-6">
         <div style="text-align:left;background-color:#EEEEEE;padding:15px;font-size:13px;">
         <?php 
          $codes = '<?php
use Workerman\\Worker;
require_once \'./Workerman/Autoloader.php\';

// Create a Websocket server
$ws_worker = new Worker("websocket://0.0.0.0:2346");

// 4 processes
$ws_worker->count = 4;

// Emitted when new connection come
$ws_worker->onConnect = function($connection)
{
    echo "New connection\n";
 };

// Emitted when data received
$ws_worker->onMessage = function($connection, $data)
{
    // Send hello $data
    $connection->send("hello $data");
};

// Emitted when connection closed
$ws_worker->onClose = function($connection)
{
    echo "Connection closed\n";
};

// Run worker
Worker::runAll();';

echo highlight_string($codes,true);
       ?>
      </div>
    </div>

    <div class="col-sm-6">
      <div style="text-align:left;background-color:#EEEEEE;padding:15px;font-size:13px;margin:8px;">
      <?php
       $codes = '<?php
require_once \'./Workerman/Autoloader.php\';
use Workerman\Worker;

// #### http worker ####
$http_worker = new Worker("http://0.0.0.0:2345");
$http_worker->count = 4;
$http_worker->onMessage = function($connection, $data)
{
    // $_GET, $_POST, $_COOKIE, $_SESSION, $_SERVER, $_FILES are available
    var_dump($_GET, $_POST, $_COOKIE, $_SESSION, $_SERVER, $_FILES);
    // send data to client
    $connection->send("hello world \n");
};

// run all workers
Worker::runAll();
';
echo highlight_string($codes,true);
    ?>
      </div>
    </div>
    <hr class="half-rule">
  </div>
</div>

<div class="bs-docs-featurette">
  <div class="container">
    <p class="lead">Bootstrap is open source. It's hosted, developed, and maintained on GitHub.</p>
    <a href="https://github.com/walkor/workerman" class="btn btn-outline btn-lg">View the GitHub project</a>
    <h2 class="bs-docs-featurette-title">Built with Bootstrap.</h2>
    <p class="lead">Millions of amazing sites across the web are being built with Bootstrap. Get started on your own with our growing <a href="http://getbootstrap.com/getting-started/#examples">collection of examples</a> or by exploring some of our favorites.</p>

    <hr class="half-rule">

    <div class="row bs-docs-featured-sites">
    
      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/10/29/lyft/" target="_blank" title="Lyft">
          <img src="/img/browserquest.jpg" alt="Lyft" class="img-responsive">
        </a>
      </div>
    
      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/09/30/vogue/" target="_blank" title="Vogue">
          <img src="/img/shadowsocks-php.png" alt="Vogue" class="img-responsive">
        </a>
      </div>
    
      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/03/13/riot-design/" target="_blank" title="Riot Design">
          <img src="/img/web-msg-sender.png" alt="Riot Design" class="img-responsive">
        </a>
      </div>
    
      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/02/12/newsweek/" target="_blank" title="Newsweek">
          <img src="/img/workerman-todpole.png" alt="Newsweek" class="img-responsive">
        </a>
      </div>
    
    </div>

    <hr class="half-rule">

    <p class="lead">We showcase dozens of inspiring projects built with Bootstrap on the Bootstrap Expo.</p>
    <a href="http://expo.getbootstrap.com/" class="btn btn-outline btn-lg">Explore the Expo</a>
  </div>
</div>


    <!-- Footer
================================================== -->
<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
    <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>.</p>
    <p>Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Code licensed under <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, documentation under <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
    <ul class="bs-docs-footer-links text-muted">
      <li>Currently v3.3.5</li>
      <li>·</li>
      <li><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
      <li>·</li>
      <li><a href="http://getbootstrap.com/getting-started/#examples">Examples</a></li>
      <li>·</li>
      <li><a href="http://getbootstrap.com/2.3.2/">v2.3.2 docs</a></li>
      <li>·</li>
      <li><a href="http://getbootstrap.com/about/">About</a></li>
      <li>·</li>
      <li><a href="http://expo.getbootstrap.com/">Expo</a></li>
      <li>·</li>
      <li><a href="http://blog.getbootstrap.com/">Blog</a></li>
      <li>·</li>
      <li><a href="https://github.com/twbs/bootstrap/issues">Issues</a></li>
      <li>·</li>
      <li><a href="https://github.com/twbs/bootstrap/releases">Releases</a></li>
    </ul>
  </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.min.js"></script>


<script src="/js/bootstrap.min.js"></script>



<script src="/js/style.js"></script>

</body></html>
