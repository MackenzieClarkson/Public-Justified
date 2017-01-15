<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Testing Grounds</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link href="css/carousel.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="css/formValidation.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <!--   This links to all of the selectors required by the lab outline     -->
    <?php ob_start();?>
</head>
<body>
    <!-- NAVBAR================================================== -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Justified</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#head2">Blog<span class="sr-only">(current)</span></a></li>
                    <li><a href="#head1">Videos</a></li>
                    <li><a href="#head3">Comments</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="Form.php">Form</a></li>
                    <li><a href="plots.php">Plots</a></li>
                    <li><a href="Node.html">Node</a></li>
                </ul>
            </div
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Carousel
    ================================================== -->

    <!-- Carousel
        ================================================== -->
    <div class="container marketing">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img class="first-slide" src="images/Stock-Blog.jpeg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Blog</h1>
                            <p>Opinions</p>
                            <p><a class="btn btn-lg btn-primary" href="#head2" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img class="second-slide" src="images/Stock-2.jpeg" alt="Second slide">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Videos</h1>
                            <p>Frames moving quickly!</p><a class="btn btn-lg btn-primary" href="#head4" role="button">Videos</a></p>
                        </div>
                    </div>

                </div>

                <div class="item">
                    <img class="third-slide" src="images/stock3.jpeg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Comments</h1>
                            <p>Let us know what you think</p>
                            <p><a class="btn btn-lg btn-primary" href="#head3" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.carousel -->


        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="jumbotron">

            <!-- Three columns of text below the carousel -->
            <div class="row featurette">
                <div class="row">
                    <div class="col-lg-3">
                        <img class="img-circle" src="images/stock code.jpeg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Blog</h2>
                        <p>Check out the blog!</p>
                        <p><a class="btn btn-default" href="#head2" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-3">
                        <img class="img-circle" src="images/stock code.jpeg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Videos</h2>
                        <p>Trending Videos</p>
                        <p><a class="btn btn-default" href="#head1" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-3">
                        <img class="img-circle" src="images/stock code.jpeg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Comments</h2>
                        <p>Some comments</p>
                        <p><a class="btn btn-default" href="#head3" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->

                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->


                <!--  <div class="jumbotron">-->
                <div class="col-md-6">
                    <h1 id="head2" class="featurette-heading">Like us on Social Media<span class="text-muted"> for Updates</span></h1>
                    <p class="lead">Facebook, Twitter, Youtube</p>
                </div>
                <div class="col-md-6">
                    <ol class="lead pad-top">
                      <li>Link to our <a href="https://Facebook.com/">Facebook</a></li>
                        <li>Link to our <a href="https://twitter.com/">Twitter</a></li>
                        <li>Link to our <a href="https://youtube.com/">Youtube</a></li>
                    </ol>
                </div>
            </div>

            <!-- START THE FEATURETTES -->

            <hr id="head1" class="featurette-divider"></hr>


            <div class="row featurette">

                <div class="col-md-5">

                    <img class="img-responsive pad-top" src="images/stock matrix.jpg" alt="Generic placeholder image">
                </div>

                <div class="col-md-7">
                    <h1 class="featurette-heading">Blog <span class="text-muted">It'll blow your mind.</span></h1>
                    <p class="lead">Blog <a href = "http://justifiedbelief.org">Here </a></p>
                </div>

            </div>


              <hr id="head4" class="featurette-divider"></hr>



                  <h1 class="featurette-heading">Comment <span class="text-muted">your Thoughts</span></h1>
                  <p class="lead pad-below"></p>


                  </div>
                </div>
              </div>
                      <div class="container" style = "border:solid">

                      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"class="form-horizontal" name="signinForm" id="signinForm" >

                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Jane Doe">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="email" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="password" class="col-sm-2 control-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="choose1" class="col-sm-2 control-label">Favourite Sport</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="choose1" name="choose1">
                              <optgroup label="Favourite Sport">
                              <option value="" selected disabled>Select one</option>
                              <option value="1">Hockey</option>
                              <option value="2">Baseball</option>
                              <option value="3">Basketball</option>
                              <option value="4">Football</option>
                              <option value="5">Soccer</option>
                            </optgroup>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inlineRadioOptions" class="col-sm-2 control-label">Gender</label>
                          <div class="col-sm-10">
                            <div class="radio">
                            <label><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">Male</label>
                            <label><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">Female</label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="inlineCheckbox[]" class="col-sm-2 control-label">Notifications</label>
                            <div class="col-sm-10" >
                              <div class="checkbox">
                              <label><input type="checkbox" name="inlineCheckbox[]" id="inlineCheckbox[]" value="1">Hockey </label>
                              <label><input type="checkbox" name="inlineCheckbox[]" id="inlineCheckbox[]" value="2">Baseball</label>
                              <label><input type="checkbox" name="inlineCheckbox[]" id="inlineCheckbox[]" value="3">Basketball</label>
                              <label><input type="checkbox" name="inlineCheckbox[]" id="inlineCheckbox[]" value="4">Football</label>
                              <label><input type="checkbox" name="inlineCheckbox[]" id="inlineCheckbox[]" value="5">Soccer</label>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="text1" class="col-sm-2 control-label">Comments</label>
                          <div class="col-sm-10">
                          <textarea name="text1" id="text1" class="form-control" rows="3"></textarea>
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit"  name="formSubmit"class="btn btn-primary" >Sign in</button>

                          </div>
                        </div>
                          </form>
                      </div>

                      <div class = "container">
                                          <div class="row featurette">

                                              <table class="table table-bordered table-hover">
                                            <tbody>
                                                          <tr class="warning">
                                                                <th class="text-center col-md-2">
                                                                Name</td>
                                                                <th class="text-center col-md-4">
                                                                Email</td>
                                                                <th class="text-center col-md-6">
                                                                Comment</td>
                                                            </tr>
                                                        </tbody>
                                                        <?php
                        $db = new mysqli('sofe2800.csaojkabloh0.us-east-1.rds.amazonaws.com', 'admin', 'newpassword1', 'lab');

                      // You should see sucess if you can connect
                      if($db->connect_errno > 0){
                          echo "ERROR";
                          die('Unable to connect to database [' . $db->connect_error . ']');
                      }
                      else {
                          echo '<br />';
                      }

                      // Query to return data from your database
                      $result = $db->query("SELECT * FROM sample");

                      // check if the query succeeded
                      if (!$result) {
                          die('There was an error running the query[' . $db->error . ']');
                      }

                      // Display the results of the query for each row

                      while ($row = $result->fetch_assoc()) {
                          echo            '<tr>
                                            <td class="text-center lead col-md-2">'.$row['name'].'</td>
                                            <td class="text-center lead col-md-4">'.$row['email'].'</td>
                                            <td class="text-center"  col-md-3>'.$row['message'].'</td>
                                          <tr>';
                      }

                      // Close the database connection
                      $result->free();
                      $db->close();
                    ?>
                  </table>
                                                      </div>
                                                    </div>
    <!-- FOOTER -->
        <hr id="head5" class="featurette-divider"></hr>
  <div class = "container">
    <div class="row featurette">

    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot;
          <a href="#">Privacy</a> &middot;
          <a href="#">Terms</a> &middot;
          <a href="AboutUs.html">About Us</a>
        </p>
    </footer>
  </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="js/formValidation.min.js"></script>
      <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87351461-1', 'auto');
      ga('send', 'pageview');

    </script>
    <script>
      $(document).ready(function() {
          $('#signinForm').formValidation({
              framework: 'bootstrap',
              icon: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  username: {
                      validators: {
                          notEmpty: {
                              message: 'The username is required'
                          },

                      }
                  },
                  email: {
                    validators: {
                      notEmpty: {
                        message: 'The email is required'
                      },
                    }
                  },
                  password: {
                    validators: {
                      notEmpty: {
                        message: 'The password is required'
                      },
                      stringLength: {
                       min: 6,
                       max: 30,
                       message: 'The name must be more than 6 and less than 30 characters long'
                     },
                     regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                      }

                    }
                  },
                  'inlineCheckbox[]': {
                    validators: {
                      notEmpty: {
                        message: 'The size is required'
                      }
                    }
                  },
                  inlineRadioOptions: {
                    validators: {
                      notEmpty: {
                        message: 'The availability option is required'
                      }
                    }
                  },
                  choose1: {
                    validators: {
                      notEmpty: {
                        message: 'The availability option is required'
                      }
                    }
                  },
                  text1: {
                    validators: {
                      notEmpty: {
                        message: 'The availability option is required'
                      }
                    }
                  }


              }
          });
      });
    </script>

                          <?php
                          $db = new mysqli('sofe2800.csaojkabloh0.us-east-1.rds.amazonaws.com', 'admin', 'newpassword1', 'lab');

                          if($db->connect_errno > 0){
                              echo "ERROR";
                              die('Unable to connect to database [' . $db->connect_error . ']');
                          }

                          $sql = $db->prepare("INSERT INTO sample(name, email, password, dropdown, checkbox, " .
                                              "radio, message) VALUES (?, ?, ?, ?, ?, ?, ?)");

                          if (isset($_POST['formSubmit']) and $_SERVER["REQUEST_METHOD"] == "POST" and !isset($bool)) {
                              // collect value of input field
                              echo ('database accessed');
                              $email = $_REQUEST['email'];
                              $insecure_pass = $_REQUEST['password']; // This password needs to be securely hashed
                              $dropdown = $_REQUEST['choose1']; // This is one of the dropdown selection options
                              $checkbox =$_REQUEST['inlineCheckbox'];  // This is a boolean value 0 or 1
                              $radio = $_REQUEST['inlineRadioOptions'];   // This is an integer value
                              $message = $_REQUEST['text1'];
                              $name = $_REQUEST['username'];
                              $bool = "something";

                              $password = password_hash($insecure_pass, PASSWORD_DEFAULT);

                              // Bind the parameters to the SQL query above, s is a string i is an integer
                              $sql->bind_param("ssssiis", $name, $email, $password, $dropdown, $checkbox, $radio, $message);

                              // Execute the query, inserting the data
                              $sql->execute();

                              // Close the connection
                              $sql->close();
                              $db->close();

                              header("location: index.php#head4");
                          }
                          ?>

</body>
</html>
