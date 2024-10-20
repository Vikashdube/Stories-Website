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
  <!-- <h1>Hello, world!</h1> -->
  <?php include './partials/connect.php';      ?>
  <!----------------------- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="index.php">StoriesBook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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




  <!------------------------ Jumbotrons -->

  <div class="">
    <div class="jumbotron">
      <h1 class="display-4">Harry porter</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container. Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, repudiandae dolorum minima nisi velit adipisci quod unde quasi quidem, consectetur ratione, explicabo asperiores dolore earum. Repellendus quae ad obcaecati maiores? Quidem delectus iste asperiores, nulla laborum modi inventore deserunt odio porro fuga repellat praesentium obcaecati voluptate reiciendis provident consequuntur non nesciunt consequatur quam illum perspiciatis dolore excepturi perferendis aut? Officia velit, consequuntur vitae ullam in eius enim minus, esse, consectetur fugiat nostrum voluptate. Fugiat magnam harum incidunt cumque nihil repellat, eius dolore, sint rerum similique sit ducimus non minima magni alias assumenda ut provident! Sed nostrum, nesciunt repellat tenetur voluptatum vel molestias odit natus eius harum excepturi in. Exercitationem deleniti fuga voluptatibus ab cum nesciunt ex eveniet culpa voluptate. Odio ipsam explicabo totam, maxime sapiente assumenda! Unde vitae quam dolorum, magnam quas quisquam reiciendis cum veniam dolore quaerat, vel culpa beatae quod incidunt, neque dignissimos numquam voluptatum amet! Nulla, dolor!</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Continue Reading</a>
      </p>
    </div>

  </div>

  




  <?php include './partials/footer.php';   ?>
</body>


</html>