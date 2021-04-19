<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Horror</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../styles/index.css">

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
                              <a class="nav-link" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="../php/signlog.php">Login</a>
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

        <section>
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
                        <img src="../images/horror/1.jpg">
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
                        <img src="../images/action/3.jpg">
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
                        <img src="../images/fiction/5.jpg">
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
                        <img src="../images/mystery/5.jpg">
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
                <li><a href="../index.php">All Books</a></li>
                <li><a href="../categories/action.php">Action</a></li>
                <li><a href="../categories/fiction.php">Fiction</a></li>
                <li><a href="../categories/horror.php">Horror</a></li>
                <li><a href="../categories/mystery.php">Mystery</a></li>
              </ul>
            </div>

            <div class="row mycards">   
            <div class="col-lg-5">
                <div class="card">
                  <div style="display: flex;">
                    <img src="../images/horror/1.jpg">
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

              <div class="col-lg-5">
                <div class="card">
                  <div style="display: flex;">
                    <img src="../images/horror/2.jpg">
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

              <div class="col-lg-5">
                <div class="card">
                  <div style="display: flex;">
                    <img src="../images/horror/3.jpg">
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

             <div class="col-lg-5">
              <div class="card">
                <div style="display: flex;">
                  <img src="../images/horror/4.jpg">
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

              <div class="col-lg-5">
                <div class="card">
                  <div style="display: flex;">
                    <img src="../images/horror/5.jpg">
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

              <div class="col-lg-5">
                <div class="card">
                  <div style="display: flex;">
                    <img src="../images/horror/6.jpg">
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
            </div>
          </div>
        </section>
        
        
        <script src="../js/common.js" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>