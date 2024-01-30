<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <style>
        .scott{
            background: url('scott-graham-OQMZwNd3ThU-unsplash.jpg');
            background-size: cover;
            height: 40vh;
        }
         .navbar {
        overflow: hidden;
        background-color: #333;
        top: 0;
        width: 100%;
      }
      .headingcss{
        color: white;
        font-size: 50px;

        }
        .paragraph{
          color: white;
          font-size: 20px;
        }
        .topbox{
          text-align: center;
          padding-top: 120px;
          height: 40px;
        }
        .bottombox{
          background-image: linear-gradient(to right top,#051937,#004d7a,#008793,#00bf72,#a8eb12);
          height: auto;

        }
        .jobcard{
          background-image: linear-gradient(#add8e6,white);
          border-width: 2px;
          border-radius: 25px;
          border-color: green;
          border-style:solid;
          margin-right: 0px;
        }
        .highlet{
          color: black;
          font-weight: bold;

        }
        h3{
          text-align: center;
        }
        .navbar-image {
          width: 40px;
          height: 40px;
          padding: 5px;
        }
        .nav input[type=text] {
        float: right;
        padding: 6px;
        border: none;
        margin-top: 8px;
        margin-right: 16px;
        font-size: 17px;
      }
      .nav a {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }
      .nav a:hover {
        background-color: #ddd;
        color: black;
      }
      .nav a.active {
        background-color: #2196F3;
        color: white;
      }
      @media screen and (max-width: 600px) {
  .nav a, .nav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  } 
  .nav input[type=text] {
    border: 1px solid #ccc;
  }
}   
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Career</title>
</head>
<body>
<div class="d-flex flex-row justify-content-end">
  <a href="login.php"><button class="btn btn-primary mt-3  ml-5 ">Log Out</button></a>
</div>
<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#">
        <img
          src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/navbar-logo-img.png"
          class="navbar-image"
          alt=""
        />
      </a>
        <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Post Job</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="career.php">Career</a>
        </li>
        <!-- <input type="text" onfocus="window.location.href=www.google.com" name="search"  placeholder="Search"> -->
      <form action="" class="search-bar">
        <input type="search" name="search" pattern=".*\S.*" required>
        <button class="search-btn" type="submit">
           <span> Search </span>
        </button>
      </form>
      </ul>
    </div>
  </div>
</nav>
<div class="scott">
  <div class="topbox">
    <h1 class="headingcss"> Job Portal</h1>
    <p class="paragraph">Best jobs for your skill sets</p>
  </div>
</div>
 <div class="container-fluid bottombox ">
  <div class="row">
    <div class="col-3 mt-5 ml-5">
      <div class="card jobcard hover" style="width: 20rem;">
        <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/php_functions.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 >PHP Developer</h3>
          <h3 >IBM</h3>
          <p><span class="highlet">skills Required:</span>HTML5,CSS3,javaScript and PHP </p>
          <p><span class="highlet">Job Location: </span>Delhi</p>
          <p><span class="highlet">CTC: </span>25 LPA</p>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </div>
      </div>
    </div>
    <div class="col-3 mt-5">
      <div class="card jobcard" style="width: 20rem;">
        <img src="https://wallpaperaccess.com/full/3770579.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 >ANDROID Developer</h3>
          <h3 >GOOGLE</h3>
          <p><span class="highlet">skills Required:</span>PYTHON,C and javaScript</p>
          <p><span class="highlet">Job Location: </span>Mumbai</p>
          <p><span class="highlet">CTC: </span>17 LPA</p>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </div>
      </div>
    </div>
    <div class="col-3 mt-5">
      <div class="card jobcard" style="width: 20rem;">
        <img src="https://wallpapercave.com/wp/wp9641838.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 >FRONTEND Developer</h3>
          <h3 >TESLA</h3>      
          <p><span class="highlet">skills Required:</span>HTML5,CSS3,javaScript and PHP </p>
          <p><span class="highlet">Job Location: </span>MARS</p>
          <p><span class="highlet">CTC: </span>500 LPA</p>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </div>
      </div>
    </div>
    <div class="col-3 mt-5">
      <div class="card jobcard " style="width: 20rem;">
        <img src="https://as1.ftcdn.net/v2/jpg/03/20/17/64/1000_F_320176416_7aHzYy8vgFHro0JbSx0xUd4Pj2IkGv4D.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 >BACKEND Developer</h3>
          <h3 >APPLE</h3>
          <p><span class="highlet">skills Required:</span>Swift,Scala,Java and JavaScript</p>
          <p><span class="highlet">Job Location: </span>USA</p>
          <p><span class="highlet">CTC: </span>100 LPA</p>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </div>
      </div>
    </div>
  </div>
 
<div class="row">
  <?php  $sql="SELECT `cname`,`position`,`Jdesc`,`skills`,`CTC` FROM `jobs`";
        $result = mysqli_query($conn,$sql);
       
        if($result->num_rows > 0){
          while($rows=$result->fetch_assoc()){
      echo'
      <div class="col-3 mt-5">
      <div class="card jobcard " style="width: 20rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h3 style="text-align: center;">'.$rows['position'].'</h3>
        <h4 style="text-align: center;">'.$rows['cname'].'</h4>
        <p style="color:black; text-allign:justify;">'.$rows['Jdesc'].'</p>
        <p style="color:black;"> <b>Skills Required:</b>'.$rows['skills'].'</p>
        <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
        </div> 
        </div>
      </div>';
      }}
      
      ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">APPLY FOR JOBS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passed</label>
            <input type="text" class="form-control" name="year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Apply </button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
     

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>