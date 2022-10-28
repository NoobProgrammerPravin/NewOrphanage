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
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

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
                <li class="nav-item">
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
                    <a class="nav-link active" href="contact.php">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>





    <div class="container my-4">
      <h2>Contact Us</h2>
      <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Select your query</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Web</option>
              <option>Technology</option>
              <option>Smartphones</option>
              <option>Watches</option>
            </select>
          </div> -->
          <div class="form-group row">
              <div class="col-sm-2">Are you a ?</div>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="gridCheck2" name="radioi/p">
                  <label class="form-check-label" for="gridCheck2">
                    Member
                  </label>
                  <br>
                  <input class="form-check-input" type="radio" id="gridCheck3" name="radioi/p">
                  <label class="form-check-label" for="gridCheck3">
                    Visitor
                  </label>
                </div>
              </div>
            </div>
          
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Tell us about yourself</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea2">Elaborate your concern</label>
            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
          </div>
          <button class="btn btn-outline-primary">Submit</button>
        </form>
  </div>



      <footer class="container">
        <p class="float-right"><a href="contact.php">Back to top</a></p>
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