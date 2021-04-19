<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ./php/signlog.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ./php/signlog.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./styles/index.css">

        <style>
          .card{
            height: 160px;
            width: 350px;
            border: 0;
            box-shadow: 0 0 8px inset rgba(153, 153, 153, 0.8); 
            margin: 15px;
            background-color: #fff;
          }
          .btn:hover{
            color: #fff;
          }
          .card img{
            height: 160px;
            width: 120px;
            position: absolute;
            overflow: hidden !important;
            
          }
          .card-body{
            margin-left: 120px;
            padding-right: 5px !important;
          }
          .card-title{
            overflow: hidden !important;
            text-transform: uppercase;
          }
          .btn{
            text-transform: uppercase;
            font-size: 10px;
            color: #fff;
            font-weight: bolder;
          }
          .card-text{
            color: #787878;
          }
          .categeory{
            display: flex; 
            margin-top: 40px;
            padding: 25px;
          }

          
          @media only screen and (max-width: 600px){
              .navbar-nav .nav-item{
                  text-align: center !important;
              }
              .search-box{
                  margin-left: 25% !important;
                  margin-top: 20px;
              }
              .carousel{
                  margin-top: 16% !important;
              }
              .myitems{
                display: block !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
              }
              .myitems img{
                  width: 320px;
                  height: 300px;
                  padding-left: 40px !important;
              }
              .para h1{
                font-size: 25px !important;
                padding-left: 0px !important;
                margin-top: -35px !important;
              }
              .para p{
                font-size: 14px !important;
                margin-left: 0px;
                text-align: justify !important;
                margin-top: -20px !important;
                margin-bottom: 34px !important;
              }
              .carousel-control-prev{
                display: none !important;
              }
              .carousel-control-next{
                display: none !important;
              }
              .categeory{
                display: block !important;
              }
              .mycards{
                margin-left: -14% !important;
                margin-top: 55% !important;
              }
              .card{
                width: 338px !important;
              }
              .cat ul{
                margin-top: -25px !important;
              }
              .cat{
                margin-left: 90px !important;
              }
              .cat li{
                margin-top: -10px !important;
              }
          }
        </style>

    </head>
    <body style="background-color: #F0F0F0;">
        <header>
            <div class="mynav">
                <div class="navbar navbar-expand-md navbar-light bg-white">
                    <a class="navbar-brand">MyBookStore</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mybar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mybar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="./php/signlog.php">Login</a>
                            </li>
                        </ul>
                        <div class="search-box">
                            <input type="search" placeholder="Search Books"/>
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </header>

       <span style="margin-top: 5%; position: absolute;">
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="error success" >
            <h3>
              <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
              ?>
            </h3>
          </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
          <div style="display: flex; overflow-y:hidden;">
            <h2 style="overflow-y:hidden;">Welcome <strong style="color: purple; text-transform: uppercase;"><?php echo $_SESSION['username']; ?></strong></h2>
            <h4 style="margin-left: 40px;"> <a href="index.php?logout='1'" style="color: red; text-decoration: none;">logout</a> </h4>
          </div>
        <?php endif ?>
      </span>

        <section style="margin-top: 8%;">
            <div id="slide" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#slide" data-slide-to="0" class="active"></li>
                  <li data-target="#slide" data-slide-to="1"></li>
                  <li data-target="#slide" data-slide-to="2"></li>
                  <li data-target="#slide" data-slide-to="3"></li>
                </ul>
              
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="myitems" style="background-color: orange;">
                        <img src="./images/horror/1.jpg">
                        <div class="para">
                            <h1>Welcome to MyBookStore</h1>
                            <p>We all dream of seeing our books on the shelves of bookstores and 
                                libraries. We picture the thrill of seeing stacks of our books in front 
                                windows and imagine the day when we go to the mailbox and find checks with 
                                lots of zeros made out to us.</p>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="myitems" style="background-color: pink;">
                        <img src="./images/action/3.jpg">
                        <div class="para">
                            <h1>Welcome to MyBookStore</h1>
                            <p>We all dream of seeing our books on the shelves of bookstores and 
                                libraries. We picture the thrill of seeing stacks of our books in front 
                                windows and imagine the day when we go to the mailbox and find checks with 
                                lots of zeros made out to us.</p>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="myitems" style="background-color: orchid;">
                        <img src="./images/fiction/5.jpg">
                        <div class="para">
                            <h1>Welcome to MyBookStore</h1>
                            <p>We all dream of seeing our books on the shelves of bookstores and 
                                libraries. We picture the thrill of seeing stacks of our books in front 
                                windows and imagine the day when we go to the mailbox and find checks with 
                                lots of zeros made out to us.</p>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="myitems" style="background-color: darkgoldenrod;">
                        <img src="./images/mystery/5.jpg">
                        <div class="para">
                            <h1>Welcome to MyBookStore</h1>
                            <p>We all dream of seeing our books on the shelves of bookstores and 
                                libraries. We picture the thrill of seeing stacks of our books in front 
                                windows and imagine the day when we go to the mailbox and find checks with 
                                lots of zeros made out to us.</p>
                        </div>
                    </div>
                  </div>
                </div>
              
                <a class="carousel-control-prev" href="#slide" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slide" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </section>

        <section>
          <div class="categeory">
            <div class="cat">
              <ul>
                <li><a href="./index.php">All Books</a></li>
                <li><a href="./categories/action.php">Action</a></li>
                <li><a href="./categories/fiction.php">Fiction</a></li>
                <li><a href="./categories/horror.php">Horror</a></li>
                <li><a href="./categories/mystery.php">Mystery</a></li>
              </ul>
            </div>

            <div class="row mycards">
             <div class="col-lg-4 col-sm-1">
              <div class="card">
                <div style="display: flex;">
                  <img src="./images/action/1.jpg">
                  <div class="card-body">
                    <h5 class="card-title">The Martian</h5>
                    <p class="card-text">Andy Weir</p>
                    <div>
                      <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                      <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                    </div>
                  </div>
                </div>
              </div>
             </div>

             <div class="col-lg-4">
              <div class="card">
                <div style="display: flex;">
                  <img src="./images/action/2.jpg">
                  <div class="card-body">
                    <h5 class="card-title">Hunger Games</h5>
                    <p class="card-text">Suzanne Collins</p>
                    <div>
                      <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                      <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                    </div>
                  </div>
                </div>
              </div>
             </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/action/3.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Divergent</h5>
                      <p class="card-text">Veronica Roth</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/action/4.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Icebreaker</h5>
                      <p class="card-text">Andy Weir</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/action/5.jpg">
                    <div class="card-body">
                      <h5 class="card-title">The Cold Storm</h5>
                      <p class="card-text">John</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/action/6.jpg">
                    <div class="card-body">
                      <h5 class="card-title">I Survived</h5>
                      <p class="card-text">Andy Weir</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             <div class="col-lg-4">
              <div class="card">
                <div style="display: flex;">
                  <img src="./images/fiction/1.jpg">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <p class="card-text">J.K.Rowling</p>
                    <div>
                      <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                      <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                    </div>
                  </div>
                </div>
              </div>
             </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/fiction/2.jpg">
                    <div class="card-body">
                      <h5 class="card-title">The Book Theif</h5>
                      <p class="card-text">Andy Weir</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/fiction/3.jpg">
                    <div class="card-body">
                      <h5 class="card-title">The Queen Bee</h5>
                      <p class="card-text">Weir</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/fiction/4.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Games Of Thrones</h5>
                      <p class="card-text">George Martin</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/fiction/5.jpg">
                    <div class="card-body">
                      <h5 class="card-title">An Orphan's War</h5>
                      <p class="card-text">Molly Green</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/fiction/6.jpg">
                    <div class="card-body">
                      <h5 class="card-title">The Girl Friend</h5>
                      <p class="card-text">Michelle Frances</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/horror/1.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Naomi's Room</h5>
                      <p class="card-text">Andy Weir</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/horror/2.jpg">
                    <div class="card-body">
                      <h5 class="card-title">bedfellow</h5>
                      <p class="card-text">Andy</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/horror/3.jpg">
                    <div class="card-body">
                      <h5 class="card-title">stephen King</h5>
                      <p class="card-text">Pet Sematary</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             <div class="col-lg-4">
              <div class="card">
                <div style="display: flex;">
                  <img src="./images/horror/4.jpg">
                  <div class="card-body">
                    <h5 class="card-title">stephen King</h5>
                    <p class="card-text">Andy Weir</p>
                    <div>
                      <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                      <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                    </div>
                  </div>
                </div>
              </div>
             </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/horror/5.jpg">
                    <div class="card-body">
                      <h5 class="card-title">The Reddening</h5>
                      <p class="card-text">Nevill</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/horror/6.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Dracula</h5>
                      <p class="card-text">Bram Stoker</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/mystery/1.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Murder Mystery</h5>
                      <p class="card-text">Lovis</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/mystery/2.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Vanished</h5>
                      <p class="card-text">Dan Petrosini</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/mystery/3.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Deadly Stillwater</h5>
                      <p class="card-text">Roger</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/mystery/4.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Perfect Murders</h5>
                      <p class="card-text">Peter Swanson</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/mystery/5.jpg">
                    <div class="card-body">
                      <h5 class="card-title">Good Daughter</h5>
                      <p class="card-text">Karin Slaughter</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div style="display: flex;">
                    <img src="./images/mystery/6.jpg">
                    <div class="card-body">
                      <h5 class="card-title">The Girl in the ice</h5>
                      <p class="card-text">Robert bryndza</p>
                      <div>
                        <a href="#" class="btn btn-warning rounded-pill">Know More</a>
                        <a href="#" class="btn btn-warning rounded-pill" id="sub">Subscribe</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        
        <script src="./js/common.js" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>