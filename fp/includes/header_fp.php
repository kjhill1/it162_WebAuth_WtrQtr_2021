<?php include 'includes/fp_config.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8"/>

<link rel="stylesheet" href="css/index_fp.css" />
<link rel="stylesheet" href="css/nav.css" />
<script src="https://use.fontawesome.com/6300c9ab27.js"></script>
</head>

<body>
 
<div class="topnav">
  
  <!-- <a href="#home" class="active">Logo</a> -->
  <!-- Navigation links (hidden by default) -->
  <div id="myLinks">
    <a href="index_fp.php">Home</a>
    <a href="search.php">Search Listings</a>
    <a href="about.php">About</a>
    <a href="resources.php">Resources</a>
    <a href="contact.php">Contact Me</a>
    <a href="backtoport.php">Designer's Portal Page</a>
    
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<!-- <div class="wrapper"> -->
<header>
<nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
        <!-- <li><a href="index_fp.php" class="selected" >Home</a></li>
        <li><a href="search.php">Search Listings</a></li>
        <li><a href="resources.php">Learning Resources</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Me</a></li> -->
      </ul>
    </nav>  
    
  <h1>
    <img class="desktop" src="imgs/headerimg.png" alt="Keller Williams Eastside, United Home Group">
    <img class="tablet" src="imgs/headimgtab.php" alt="Keller Williams Eastside, United Home Group">
    <img class="phone" src="imgs/phoneimg.png" alt="Keller Williams Eastside, United Home Group">
  </h1>

</header>
