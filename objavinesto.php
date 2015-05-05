<!doctype html>
<html>
<head>
	<?php 	include_once 'head.php';  ?>
<body>
	<?php 	
	include_once 'gore.php'; 
	include_once 'nav.php'; 
	 ?>


<div class="row">
	<div class="col-md-1"></div>
            <div class="col-md-8">
	
		<h3><span class="glyphicon glyphicon-send"></span> OBJAVA NOVOSTI</h3>
		  <hr class="left">

	</div>
	<div class="col-lg-2 col-md-2 prijava">
		<span class="hidden-sm hidden-xs">
	
	<?php include_once 'prijava.php';?>
</span>
	</div>
	<div class="col-lg-1 col-md-1"></div>
</div>
</div>




<br />

<form class="form-horizontal" action="" method="POST">
	<div class="row">
  <div class="form-group">
  	<div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="ime">NASLOV</label>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="text" class="form-control" id="naslov" name="naslov">
    </div>
  </div>
</div> 

	<div class="row">
  <div class="form-group">




<div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
  <label class="control-label" for="selectbasic">VRSTA</label>
  </div>
   <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">

    <select id="odaberi" name="odaberi" class="input-xlarge">
      <option>NOVOST</option>
      <option>DOGAĐANJE</option>
    </select>
  </div>



  	 
  </div>
</div> 


  <div class="row">
  	<div class="form-group">
  <div class="col-lg-1 col-md-1 col-sm-1"><span class="hidden-xs"></span> </div>
  	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="objava">OBJAVA</label>
    </div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <textarea type="text" class="form-control objava" id="objava" name="objava"></textarea>
  </div>
  </div>
  </div>
  
  
  	<div class="form-group">
  <div class="col-lg-1 col-md-1 col-sm-1"><span class="hidden-xs"></span> </div>
  	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
  <label for="slike">SLIKE</label>
      </div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
  <div class="controls">
    <input id="slike" name="slike" class="postavislike" type="file">
  </div>
</div></div>

  
<br />
<div class="col-lg-8 col-md-8 col-sm-9 col-xs-7"></div>
  <div class="form-group">
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
	
	
      <button type="submit" class="btn btn-danger">Objavi</button>
    </div>
 
</form>
</div>











<br /><br />

<?php 	
	include_once 'contact.php';  
	 include_once 'podnozje.php';
	include_once 'script.php';  
?>


</body>
</html>