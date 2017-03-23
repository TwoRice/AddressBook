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

				    	echo $page;

				    	if(strcmp($page, "org") == 0){
				    		$firstCol = "Organisation";
				    		$org = true;
				    	}
				    	else if(strcmp($page, "people") == 0){
				    		$firstCol = "Name";
				    		$org = false;
				    	}

				    	echo $firstCol;
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
							<tr>
								<th>Sample 1</th>
								<th><button type="submit" class="btn">View Details</button></th>
								<?php if($org){ ?>
								<th><button type="submit" class="btn">View People</button></th>
								<?php } ?>
								<th><button type="submit" class="btn btn-danger">Delete <span class="glyphicon glyphicon-remove"></span></button></th>
							</tr>
							<tr>
								<th>Sample 2</th>
								<th><button type="submit" class="btn">View Details</button></th>
								<th><button type="submit" class="btn">View People</button></th>
								<th><button type="submit" class="btn btn-danger">Delete <span class="glyphicon glyphicon-remove"></span></button></th>
							</tr>
							<tr>
								<th>Sample 3</th>
								<th><button type="submit" class="btn">View Details</button></th>
								<th><button type="submit" class="btn">View People</button></th>
								<th><button type="submit" class="btn btn-danger">Delete <span class="glyphicon glyphicon-remove"></span></button></th>
							</tr>
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