
<!DOCTYPE html>
<head>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>index lab1</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">




    <!-- Custom styles for this template -->
  <!--   This links to all of the selectors required by the lab outline     -->
  </head>
  <body>
<!-- NAVBAR================================================== -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Toronto Sports Fans</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php#head2">Trending <span class="sr-only">(current)</span></a></li>
        <li><a href="index.php#head1">News</a></li>
        <li><a href="index.php#head3">Hightlights</a></li>
        <li><a href="index.php#head4">Stats</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Form.php">Form</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="jumbotron ">
        <h2 class="success">Goal Differential</h2>
        <div id="divname" style="height: 300px;"></div>
        <br />
      </div>
    </div>
    <div class="col-md-6">
      <div class="jumbotron">
        <h2 class="success">Win/loss differential</h2>
        <div id="donut-example" style="height: 300px;"></div>
        <br />
      </div>
    </div>
  </div>
</div>




      <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2016 Company, Inc. &middot;
        <a href="#">Privacy</a> &middot;
        <a href="#">Terms</a> &middot;
        <a href="AboutUs.html">About Us</a>
      </p>
    </footer>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87351461-1', 'auto');
      ga('send', 'pageview');

    </script>

    <script>
    Morris.Donut({
      element: 'donut-example',
      data: [
    {label: "Win", value: 2},
    {label: "Loss", value: 4},
    {label: "Overtime-loss", value: 3}
            ]
    });

    new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'divname',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { Game: '1', GF: 4 , GA: 5 },
    { Game: '2', GF: 4 , GA: 1},
    { Game: '3', GF: 4  , GA: 5},
    { Game: '4', GF: 2  , GA: 3},
    { Game: '5', GF: 4 , GA: 5},
    { Game: '6', GF: 3 , GA: 7},
    { Game: '7', GF: 3  , GA: 2.0},
    { Game: '8', GF: 1  , GA: 2},
    { Game: '9', GF: 1 , GA: 5}
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'Game',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['GF','GA'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Goals For', 'Goals Against']
});
    </script>
  </body>
</html>
