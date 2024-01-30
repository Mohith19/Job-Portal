<!DOCTYPE html>
<html lang="en">
<?php
    include "config.php"
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous"/>
    <style>
      .navbar {
        overflow: hidden;
        background-color: #e9e9e9;
        top: 0;
        width: 100%;
        background-color: #e9e9e9;
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
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid">
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
        <form action="" class="search-bar">
        <input type="search" name="search" pattern=".*\S.*" required>
        <button class="search-btn" type="submit">
           <span> Search </span>
        </button>
      </form>
        <!-- <input type="text" name="search" placeholder="Search"> -->
      </ul>
    </div>
  </div>
</nav>

<div class="sidebar">
  <a class="active" href="index.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
</div>

