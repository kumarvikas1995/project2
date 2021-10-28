<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mygallary</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="gall.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container">


            <a class="navbar-brand" href="#">HOME</a>
            <a class="navbar-brand" href="#">ABOUT</a>
     <a class="navbar-brand" href="#">GALLARY</a>

            <form method="post" action="">
     <input type="text" name="search" placeholder="searching here..." class="bg-light h-50 d-inline-block">
     <button type="input" class="btn btn-primary"><i class="fas fa-search"> </i>search </button>
</form>
<br>

</div>
 </nav>
 <marquee direction="left" scrollamount="7px" class="fs-5 fw-3 text-danger">www.gallary.com</marquee>
 <div class="container-fluid">
 <div class="card-deck">
        <div class="card bg-light">
            <div class="card-body text-center">
                <p> <img src="cute.jpg"> </p>
            </div>
        </div>
        <div class="card bg-secondary">
          <div class="card-body text-center">
              <p class="card-text">something write here</p>
          </div>
      </div>
      <div class="card bg-danger">
          <div class="card-body text-center">
              <p class="card-text">something write here</p>
          </div>
      </div>
      <div class="card bg-success">
          <div class="card-body text-center">
              <p class="card-text">something write here</p>
          </div>
      </div>
</div>
    </div>
</div>
</body>
</html>