<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

    <title>Welcome to Orphanage Management System</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img class="img-rounded roundkar" height="25px" src="orphanage logo.jpg" alt="">&nbsp;&nbsp;
        <a class="navbar-brand" href="#">Atharva's Orphanage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Topics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Technology</a>
                        <a class="dropdown-item" href="#">Web Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Support</a>
                        <a class="dropdown-item" href="#">Write for us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stories.php">Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="motto.php">Motto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="donate.php">Donate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
            </ul>
            <div class="mx-2">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#LoginModal">Login</button>
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#SignupModal">SignUp</button>
            </div>
        </div>
    </nav>


<!-- Login Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" />
          </div>
          <input type="submit" class="btn btn-primary w-100" value="Login" name="">
        </form>

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-success">Login</button> -->
      </div>
    </div>
  </div>
</div>


<!--SignUp Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" role="dialog" aria-labelledby="SignupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SignupModalLabel">Create account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="cexampleInputPassword1">Confirm Password</label>
              <input type="password" class="form-control" id="cexampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Create account</button>
          </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>



    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="c-f-1.jpg" height="550px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="text-good">Welcome to Atharva's Orphanage</h1>
              <p class="text-white">The world's light doesn't comes from sun it comes from a Orphan's smile</p>
              <a href="stories.php"><button class="btn btn-secondary">Explore</button></a>
              <a href="motto.php"><button class="btn btn-info">Pledge</button></a>
              <a href="donate.php"><button class="btn btn-success">Donate</button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="home_02f-2.jpeg" height="550px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-black">Victory has a thousand fathers, but defeat is an orphan.</h3>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
              <a href="stories.php"><button class="btn btn-secondary">Explore</button></a>
              <a href="motto.php"><button class="btn btn-info">Pledge</button></a>
              <a href="donate.php"><button class="btn btn-success">Donate</button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="c-front-3.avif" height="550px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Happiness is not so much in having as sharing. We make a living by what we get, but we make a life by what we give.</h3>
              <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
              <a href="stories.php"><button class="btn btn-secondary">Explore</button></a>
              <a href="motto.php"><button class="btn btn-info">Pledge</button></a>
              <a href="donate.php"><button class="btn btn-success">Donate</button></a>
            </div>
          </div>
        </div>
        <div class="container my-4">
          <div class="container ">
            <h1 style="font-family:'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;" class="ourmoral" aria-hidden="true"></i><u>Our Moral Values M-4's</u></h1>
          </div>
            <div class="row mb-2">
                <div class="col-md-6">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">M-1's</strong>
                      <h3 class="mb-0">Volunteering</h3>
                      <div class="mb-1 text-muted">December 12</div>
                      <p class="card-text mb-auto">Our volunteers are able to make a profound difference in orphan's lives by providing them with affection and love that may not otherwise receive or experience.</p>
                      <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="300" src="volunteers2.jpeg">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success">M-2's</strong>
                      <h3 class="mb-0">Capacity building</h3>
                      <div class="mb-1 text-muted">December 13</div>
                      <p class="mb-auto">Capacity building has been defined as the improvement of each individual`s ability to produce, perform or deploy</p>
                      <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="capacitybuilding.jpeg">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-6">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">M-3's</strong>
                      <h3 class="mb-0">Education</h3>
                      <div class="mb-1 text-muted">December 13</div>
                      <p class="card-text mb-auto">Educational facility that provides education and support to orphans who may lack family support and assistance to pay for schooling. Private orphan schools rely on support from nongovernmental organizations (NGOs) as well as donations from members of the public</p>
                      <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="250" height="360" src="Education2.jpeg">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success">M-4's</strong>
                      <h3 class="mb-0">Strength</h3>
                      <div class="mb-1 text-muted">December 12</div>
                      <p class="mb-auto">Trying to Make each individual self dependent and do not rely on anyone and also make them capable to tackle this competative world</p>
                      <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="self-dependent.webp">
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container embed-responsive embed-responsive-16by9">
        <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> -->
        <iframe width="560" class="embed-responsive-item" height="315" src="https://www.youtube.com/embed/NJxaJHCIpOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>




      <div class="container">
        <br><br>
        <div class="dropdown-divider"></div>
        <div>
          &nbsp;&nbsp;&nbsp;
          <h2 style="font-weight:300 ; text-align: center;"><i><u>Special Thanks...</u></i></h2>
        </div>
        <div class="dropdown-divider">
        </div>
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="owner1.webp" alt="Generic placeholder image" width="180" height="180">
            <h2><strong>Sir Ratan Tata</strong> </h2>
            <p>Ratan Naval Tata is an Indian industrialist, and a former chairman of Tata Sons. He was the chairman of Tata Group, from 1990 to 2012, and again, as interim chairman, from October 2016 through February 2017, and continues to head its charitable trusts.Helping the orphanage financially. </p>
            <p><a class="btn btn-outline-primary" href="https://en.wikipedia.org/wiki/Ratan_Tata" role="button" target="_parent">Read more »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="owner2.webp" alt="Generic placeholder image" width="180" height="180">
            <h2><strong>Sir Shiv Nadar</strong></h2>
            <p>Shiv Nadar (born 14 July 1945) is an Indian billionaire industrialist and philanthropist. He is the founder and chairman emeritus of HCL Technologies Limited and the Shiv Nadar Foundation.Nadar was awarded Padma Bhushan for his efforts in the IT industry.Helping the Orphanage's Development</p>
            <p><a class="btn btn-outline-primary" href="https://en.wikipedia.org/wiki/Shiv_Nadar" role="button">Read more »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="owner3.webp" alt="Generic placeholder image" width="180" height="180">
            <h2><strong>Sir Azim Premji</strong></h2>
            <p>Azim Hashim Premji is an Indian businessman, investor, engineer, and philanthropist, who was the chairman of Wipro Limited. Premji remains a non-executive member of the board and founder chairman. He is informally known as the Czar of the Indian IT Industry.Helping the Orphanage in the Development as well as Financial Terms</p>
            <p><a class="btn btn-outline-primary" href="https://en.wikipedia.org/wiki/Azim_Premji" role="button">Read more »</a></p>
          </div><!-- /.col-lg-4 -->
        </div>
      </div>


      <footer class="container">
        <p class="float-right"><a href="index.php">Back to top</a></p>
        <p>© 2021-2022 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>