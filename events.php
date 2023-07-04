<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="National Museum of Scotland" />
    <title>National Museum of Scotland</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/c4226c3067.js"
      crossorigin="anonymous"
    ></script>
     <?php
        require ('dbconx.php');   // connect to database  
         $sql = mysqli_query ($con, "SELECT * FROM events");  // create variable to store sql statement
    ?> 
  </head>
  <body data-spy="scroll" data-target="#main-nav" id="home">
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light" id="main-nav">
      <div class="container">
        <a class="navbar-brand" href="index.php"
          ><img style="width: 70%" src="media/logo.png" alt="Logo"
        /></a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="events.php">EXHIBITIONS & EVENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="member.html">MEMBERSHIP</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--HEADER with image and text-->
    <header>
      <!-- image -->
      <img src="media/space-ga70e36c46_1920.png" alt="background" />
      <!-- text over the image -->
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-black">
            <h1 class="display-3" style="text-shadow: 5px 5px 5px white">
              Welcome to National Museum Scotland
            </h1>
          </div>
        </div>
      </div>
    </header>
    <!-- Search -->
    <section class="search pt-5 pb-5" style="background-color: #0d49a9">
      <div class="container">
        <form action="search.php" method="get">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-sm">
                  <label class="text-white">Choose date</label>
                  <input type="date" class="form-control"  />
                </div>
                <div class="col-sm">
                  <label class="text-white">Choose type</label>
                  <select
                    class="form-control search-slt"
                    name="searchType"
                  >
                    <option>All</option>
                    <option>Exibition</option>
                    <option>Event</option>
                  </select>
                </div>
                <div class="col-sm">
                  <label class="text-white">Choose audience</label>
                  <select
                    class="form-control search-slt"
                    name="searchAudience"
                  >
                    <option>All</option>
                    <option>Over 12</option>
                    <option>Over 18</option>
                  </select>
                </div>
                <div class="col-sm">
                  <label class="text-white">Choose admission</label>
                  <select
                    class="form-control search-slt"
                    name="searchAdmission"
                  >
                    <option>All</option>
                    <option>Free</option>
                    <option>Ticketed</option>
                  </select>
                </div>
                <div class="col-sm" style = "padding-top: 32px">
                  <button type="submit" class="btn btn-danger wrn-btn">
                    Search
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!--Cards-->
    <section>
      <div class="container-md">
        <div class="row justify-content-center m-auto">
          <?php
          while ($row = mysqli_fetch_array($sql)){
          echo "<div class='card m-5' style='width: 30rem'>";
          echo "<img src=".'"'.$row['image'].'"'." class='card-img-top' />";
          echo "<div class='card-body'>";
          echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
          echo "<h6 class='card-subtitle mb-2 text-muted'>National Museum of Scotland</h6>";
          echo "<p class='card-text'></p>";
          echo "<p><a class='btn btn-info'  href='view.php?id=" . $row['id'] . "'>View</a></p>";
          echo  "</div>";
          echo "</div>";
          }
          ?>
        </div>
      </div>
    </section>

    <!--FOOTER-->
   <footer class="bg-dark text-white">
      <div class="container pt-3">
        <div class="row justify-content-center">
          <div class="col-sm px-5">
            <form>
              <div class="col-sm">
                <label for="">Subscribe to our newsletter</label>
                <input type="text" />
              </div>
              <div class="col-sm" style="padding-top: 10px">
                <button class="btn btn-danger wrn-btn">
                  Subscribe
                </button>
              </div>
            </form>
          </div>
          <div class="col-sm px-5">
            <p>About us</p>
            <p>Our services</p>
            <p>Jobs and volunteering</p>
            <p>Contuct us</p>
          </div>
          <div class="col-sm px-5">
            <p>Follow us</p>
            <i class="fa fa-brands fa-instagram fa-lg"></i>
            <i class="fa fa-brands fa-twitter fa-lg"></i>
            <i class="fa fa-brands fa-youtube fa-lg"></i>
          </div>
        </div>
      </div>
    </footer>
    <!--SCRIPTS-->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
