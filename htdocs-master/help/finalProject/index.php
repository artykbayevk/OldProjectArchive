<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style media="screen">
    .navik{
      background-color: #f0f8ff;
    }
    #s-nav{
      margin-top: 2%;
    }

    .carousel{
      height: 360px;
      border: none;
    }
    .slide{
      height: 380px;
      border: none;
    }
    .carousel-inner{
      height: 380px;
      border: none;
    }
    .footer{
      width: 100%;
      height: 100px;
      background-color: #f0f8ff;
      display: inline-block;
      background-color: #f0f8ff;
    }
    .content{
      width: 93%;
      margin: 0px auto;
    }
    .caption{
      text-align: center;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top navik">
    <div class="container-fluid">

      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:black; font-family: 'Source Sans Pro', cursive;font-size:32px">Your Accountings</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#"><span >Log in</span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Information <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"> Accounting Topics </a></li>
              <li><a href="#">Questions And Anwers</a></li>
              <li><a href="#">Visual Learning</a></li>
            </ul>
          </li>

        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">GO!</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NEW <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">My Accountings</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">New Accountings</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div id="s-nav" class="col-md-2">
      <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="2str.html" style="color:white; text-decoration:none;">Dictionary of Terms</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="3str.html" style="color:white; text-decoration:none;">Business Forms</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="4str.html" style="color:white; text-decoration:none;">Events And Webinars</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info">Favourite Posts</button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info">Best Experiences</button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info">Financial Services</button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info">Professional Staffing</button></li>
      </ul>
    </div>
    <div id="s-nav" class="col-md-10  " style="border:solid black 1px;">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="files/1.jpg" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="files/2.jpg" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="files/4.jpg" alt="...">
      <div class="carousel-caption">
          <h3>Caption Text</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->

    </div>
  </div>

  <div class="content">
      <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="files/con.jpg" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>

    </div><!--ROW-->
  </div><!--CONTENT-->
  <div class="footer">
    <h1 style="text-align:center">FOOTER</h1>
  </div>


   </body>
</html>
