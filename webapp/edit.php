<html>
	<?php include 'header.php'; ?>

	<div class="container">
	    <div class="row">
	        <div class="col-xs-12">
	            
	            <!--FORM-->
	            <form method="POST" action="">
            		
            		<!--PANEL-->
            		<div class="panel panel-default">
            			
            		    <!--PANEL HEADER-->
            			<div class="panel-heading">New Entry</div>
            			
            			<!--PANEL BODY-->
            			<div class="panel-body">
            				<div class="form-group">

            				    <?php 
                                    session_start();
                                    $result = $_SESSION['result'];
                                    foreach($result as $row){
                                ?>

                                        <!--NAME-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    		<label class="control-label" for="name">Name</label>
            				    		<input type="text" name="name" class="form-control" required="required" value="<?= $row[1] ?>">
            				    	</div>
            				    </div>

            				    <!--ADDRESS-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="address1">Address Line 1</label>
            				    	    <input type="text" name="address1" class="form-control" value="<?= $row[2] ?>">	
            				    	</div>
            				    </div>
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="address2">Address Line 2</label>
            				    	    <input type="text" name="address2" class="form-control" value="<?= $row[3] ?>">	
            				    	</div>	
            				    </div>
            				    <div class="row">
            				    	<div class="col-sm-6">
            				    	    <label class="control-label" for="city">City</label>
            				    	    <input type="text" name="city" class="form-control" value="<?= $row[4] ?>">	
            				    	</div>
            				    	<div class="col-sm-4">
            				    		<label class="control-label" for="county">County/State</label>
            				    	    <input type="text" name="county" class="form-control" value="<?= $row[5] ?>">
            				    	</div>
            				    	<div class="col-sm-2">
            				    	    <label class="control-label" for="postcode">Postcode</label>
            				    	    <input type="text" name="postcode" class="form-control" value="<?= $row[6] ?>">	
            				    	</div>	
            				    </div>

            				    <!--EMAIL-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="email">Email Address</label>
            				    	    <input type="email" name="email" class="form-control" value="<?= $row[7] ?>">	
            				    	</div>
            				    </div>

            				    <!--PHONE-->
            				    <?php if(sizeof($row) < 10){ ?>
                                <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="email">Phone No</label>
            				    	    <input type="text" name="email" class="form-control" value="<?= $row[8] ?>">	
            				    	</div>	
            				    </div>
                                <?php }else{ ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label" for="email">Mobile No</label>
                                        <input type="text" name="email" class="form-control" value="<?= $row[8] ?>">    
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label" for="email">Home No</label>
                                        <input type="text" name="email" class="form-control" value="<?= $row[9] ?>">    
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label" for="email">Work No</label>
                                        <input type="text" name="email" class="form-control" value="<?= $row[10] ?>">    
                                    </div>  
                                </div>

                                <!--ORGANISATION-->
                                <?php require 'php/selectOrganisations.php'; ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label" for="organisation"></label>
                                        <select name="organisation" class="form-control">
                                            <?php foreach($result as $orgRow){ ?>
                                            <option value="<?= orgRow[0].': '.orgRow[1] ?>"></option>
                                            <?php } ?>    
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>

            				    <!--SUBMIT-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    </br><input type="submit" class="btn btn-primary">	
            				    	</div>	
            				    </div>

                                <?php } ?>

            				</div>
            			</div>
            		</div>
	            </form>
	        </div>
	    </div>
	</div>

	</body>

</html>