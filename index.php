<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
  <title>Stories Website</title>
</head>

<body>
    <?php  include './partials/connect.php';      ?>
  <!----------------------- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="index.php">StoriesBook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contect.php">Contact us</a>
        </li>
      </ul>
    </div>
  </nav>


  <!----------------------- carrosel -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 " src="images/photo2.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 " src="images/photo3.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/photo1.jpg" alt="Third slide">
      </div>
    </div>

  </div>

  <!------------------------ card  -->

  <div class="container">
    <h1 class="text-center featureTitle mt-4">Featured Storage</h1>

    <div class="row mt-4 mb-5">
   
      <?php 
        
        $sql = "Select * from `topics`";
        $result = mysqli_query($conn,$sql);
        
        if($result){
          while($row = mysqli_fetch_assoc($result)){
           
            $id = $row['topic_id'];
            $topic_image =$row['topic_image'];
            $topic_name = $row['topic_name'];
            $topic_desc = $row['topic_desc'];
             
            echo '<div class="col-md-4 col-sm-6 mb-4">
        <div class="card" style="width: 18rem; ">
          <img class="card-img-top" src='.$topic_image.' alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">'.$topic_name.' </h5>
            <p class="card-text">'.substr($topic_desc,0,80).'.....</p>
            <a href="stories.php" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
      </div>';
          }
        }

      ?>

      



      <div class="col-md-4 col-sm-6 mb-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top "  src="images/photo4.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
      </div>
    

      <div class="col-md-4 col-sm-6 mb-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/photo4.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/photo4.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
      </div>



  </div>

  </div>
















  <?php include './partials/footer.php';   ?>
</body>

</html>