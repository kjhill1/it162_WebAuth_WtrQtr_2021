<?php include 'portal-config.php'?>

<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<!-- my fontawesom code- included going forward -->
<script src="https://use.fontawesome.com/e70c6170ae.js"></script>


<link rel="stylesheet" href="css/fa/css/all.min.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />

</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1>
    <a href="index.php" id="h1font"><i id="logopad" class="logo fas <?=$logo?>"<?=$logo_color?>></i>Web Design Portal for Kelly Hill it162</a></h1> 
    

  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLink($nav)?>
    <!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="./big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="./fp/index.php">Final Project</a></li>
      <li><a href="contact.php">Contact Me</a></li>
      -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>