
					
					
					
<div id="prijava" >
	<div class="dialog">
		<div class="content">
			
				
			
		<?php 
					//session_start();
					if(!isset($_SESSION["autoriziran"])): ?>
				<form class="form-horizontal" action="prijavljen.php"  method="POST">
  
 <div class="form-group form-prijava">
    <label for="email" class="col-sm-12 control">Email</label>
    <div class="col-sm-12">
      <input type="email" class="form-control form-prijava-p" id="email" name="email" placeholder="ivan@example.hr">
    </div>
  </div>
 <div class="form-group form-prijava">
    <label for="lozinka" class="col-sm-12 control">Lozinka</label>
   <div class="col-sm-12">
      <input type="password" class="form-control form-prijava-p" id="lozinka" name="lozinka">
    </div>
  </div>



     
      <input class="btn btn-danger btn-prijava" type="submit" value="Prijava" />  
      
      
    <?php else: ?>
					Prijavljeni ste kao <?php echo $_SESSION["autoriziran"]->ime?>
					<?php  echo $_SESSION["autoriziran"]->prezime;?> <a href="odjava.php"><input class="btn btn-danger btn-odjava" type="submit" value="Odjavi se" />  </a>
					
					
					<?php endif; ?>   

  </div>
	</div>
		</div>


		

					


</form>

					