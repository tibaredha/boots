<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (isset ($this->title)){echo $this->title; }else {echo 'tiba redha' ;}?></title>
    <link rel="icon" type="image/png" href="<?PHP echo URL; ?>public/images/<?php echo ico; ?>"/>
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/tiba.css" rel="stylesheet">
   <!--  -->
  </head>
  <body>
 <div class="container-fluid">

 <!--  -->
 
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?PHP echo URL; ?>">DSP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?PHP echo URL; ?>">Home</a></li>
            <li><a href="<?PHP echo URL; ?>">About</a></li>
            <li><a href="<?PHP echo URL; ?>">Contact</a></li>
            <li class="dropdown">
              <a href="<?PHP echo URL; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service <span class="caret"></span></a>
              <ul class="dropdown-menu">
                
				<li class="dropdown-header">SAS</li>
				<li><a href="<?PHP echo URL; ?>">***</a></li>
                
                <li role="separator" class="divider"></li>
                
				
				<li class="dropdown-header">PRE</li>
                <li><a href="<?PHP echo URL; ?>">***</a></li>
               
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 
 
 <?php

?>