<?php 	include_once 'head.php';  ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
  
      <ul class="nav navbar-nav">
        <li><a href="index.php"><button type="button" class="btn btn-danger">Naslovnica </button></a></li>
         <li><a href="povijest.php"><button type="button" class="btn btn-danger">Povijest</button></a></li>
         <li><a href="upisnica.php"><button type="button" class="btn btn-danger">Upisnica</button></a></li>
           <li><a href="#contact" data-toggle="modal"><button type="button" class="btn btn-danger">Kontakt</button></a></li>

        
        
        
        
        
         <?php 
				session_start();
				if(isset($_SESSION["autoriziran"])):
					?>
					<li>
						<a href="objavinesto.php"><button type="button" class="btn btn-danger">Objavi nešto</button></a>
					</li>
				
					
					<?php
				endif;
				 ?>
      </ul>
       
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 
</nav>

