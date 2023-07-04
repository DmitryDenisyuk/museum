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
  
    <!--Main-->
    <section>
      <div class="container-md pt-5">
        <div class="row justify-content-center m-auto">
          <?php
          $recordID = $_GET['id'];
          include('dbconx.php');
          if(isset($recordID) || !empty($recordID)){
          $sql = "SELECT * FROM events WHERE id = '$recordID'";
          $result = $con->query($sql);
          if ($result->num_rows > 0) {
    	    while($row = $result->fetch_assoc()) {
          echo "<div class='card m-5' style='width: 100rem'>";
          echo "<img src=".'"'.$row['image'].'"'." class='card-img-top' />";
          echo "<div class='card-body'>";
          echo   "<div class='row justify-content-center'>";
          echo "<div class='col-sm '>";
          echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
          echo  "<p>" . $row['desc'] . "</p>";
          echo "</div>";
          echo   "<div class='col-sm px-5'>";
          echo  "<div class='row'>";
          echo    "<div class='col-2 text-center'>";
          echo      "<i class='fas fa-calendar fa-lg'></i>";
          echo    "</div>";
          echo    "<div class='col-9'>";
          echo      "<p>" . $row['date'] . "</p>";
          echo    "</div>";
          echo  "</div>";
          echo   "<div class='row'>";
          echo    "<div class='col-2 text-center'>";
          echo      "<i class='fas fa-user fa-lg'></i>";
          echo    "</div>";
          echo    "<div class='col-9'>";
          echo     "<p>" . $row['audience'] . "</p>";
          echo    "</div>";
          echo  "</div>";
          echo   "<div class='row'>";
          echo    "<div class='col-2 text-center'>";
          echo      "<i class='fas fa-money-bill fa-lg'></i>";
          echo    "</div>";
          echo    "<div class='col-9'>";
          echo     "<p>" . $row['admission'] . "</p>";
          echo    "</div>";
          echo   "<div class='col-9'>";
          echo    "<a href='' class='btn btn-info'>BOOK TICKET</a>";
          echo    "</div>";
          echo  "</div>";
          echo "</div>";
          echo "</div>";
          echo  "</div>";
          echo "</div>";
          }
          }
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
