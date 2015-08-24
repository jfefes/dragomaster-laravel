<!doctype html>
<html>
  <head>


    <title> {{ $title }}


    </title>


    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/css/styles.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
  </head>
  <body>

<div class="container-fluid">
  <!--
  <div class="navbar navbar-inverse" style="background-color:#3F62C4"><div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="/" class="navbar-brand" style="color:white">Kingdom of Goldenvale
  </div>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/" class="btn btn-primary" style="color:white" >Home</a></li>
      <li><a href="http://goldenvale.freeforums.net/" target="_blank" class="btn" style="color:white">Forums</a></li>
      <!--<li><a href="/about" class="btn" style="color:white">About/News</a></li>
      <li><a href="/schedule" class="btn" style="color:white">Schedule</a></li>
      <li><a href="http://contact.goldenvale.org" class="btn" style="color:white">Contact</a></li>
    </ul>
  </div>
</div>
</div>-->

@yield('content')


<br>
<br>
    <footer><p class="text-center">App by Ritari of Caradoc Hold<br>
    <a href="mailto:jfefes@gmail.com" target="_top" class="btn btn-small btn-default">Report an issue</a> &nbsp; &nbsp; &nbsp;
    </footer>
    </div>
  </body>
</html>
