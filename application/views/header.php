<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="it">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Supplier Management</title>

 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo site_url('css/customd.css');?>">
  <link rel="stylesheet" href="<?php echo site_url('css/font-awesome.min.css');?>">
  
  <script src="<?php echo site_url('js/jquery.min.js');?>"></script>
  <script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>

<body>

<nav class="navbar navbar-inverse" style="border-radius:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">System Name</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url();?>">Suppliers</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('suppliers/evento_tratta_total');?>">Evento Tratta <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('suppliers/evento_tratta_total');?>">Evento Tratta Total</a></li>
          <li><a href="<?php echo site_url('suppliers/evento_tratta');?>">Evento Tratta</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('suppliers/assegna_posti');?>">Assegna Posti <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('suppliers/assegna_posti');?>">Assegna Posti</a></li>
          <li><a href="<?php echo site_url('suppliers/assegna_posti_more');?>">Assegna Posti More</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
	  </li>
	  
	  
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

