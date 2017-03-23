<html>
	<?php include 'header.php'; ?>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				    <?php 
				    	if(isset($_GET['table'])){
				    		$page = $_GET['table'];
				    	}
				    	else{
				    		$page = "org";
				    	}

				    	if(strcmp($page, "org") == 0){
				    		$firstCol = "Organisation";
				    		$org = true;
				    		require 'php/selectOrganisations.php';
				    	}
				    	else if(strcmp($page, "people") == 0){
				    		$firstCol = "Name";
				    		$org = false;
				    		require 'php/selectContacts.php';
				    	}	
				    ?>
				    <table class="table">
	 					<thead>
							<tr>
								<th><?= $firstCol ?></th>
								<th>Details</th>
								<?php if($org){ ?>
								<th>People</th>
								<?php } ?>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach($result as $row){ 
									$btnValue = $page.','.$row[0];
							?>
							<form method="POST" action="php/processForm.php">
							<tr>
								<th><?= $row[1]; ?></th>
								<th><button type="submit" class="btn" name="viewDetails" value=<?= $btnValue ?>>View Details</button></th>
								<?php if($org){ ?>
								<th><button type="submit" class="btn" name="viewPeople" value=<?= $btnValue ?>>View People</button></th>
								<?php } ?>
								<th><button type="submit" class="btn btn-danger" name="delete" value=<?= $btnValue ?>>Delete <span class="glyphicon glyphicon-remove"></span></button></th>
							</tr>
							</form>
							<?php } ?>
						</tbody>
					</table>	
				</div>
			</div>
			<div class="row">
			    <div class="col-xs-12">
			        <button type="submit" class="btn btn-primary">Add New <span class="glyphicon glyphicon-plus"></span>
			    </div>
			</div>

		</div>

	</body>

</html>