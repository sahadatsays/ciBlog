<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ciBlog - <?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/main.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">ciBlog</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url();?>about">About</a></li>
        <li><a href="<?php echo base_url('posts');?>">Blog</a></li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Account</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">