<html>
	<?php include 'header.php'; ?>

	<div class="container">
	    <div class="row">
	        <div class="col-xs-12">
	            
	            <!--FORM-->
	            <form method="POST" action="php/processEditForm.php">
            		
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
                                    $info = $result[0];
                                ?>

                                        <!--NAME-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    		<label class="control-label" for="name">Name</label>
            				    		<input type="text" name="name" class="form-control" required="required" value="<?= $info[1] ?>">
            				    	</div>
            				    </div>

            				    <!--ADDRESS-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="address1">Address Line 1</label>
            				    	    <input type="text" name="address1" class="form-control" value="<?= $info[2] ?>">	
            				    	</div>
            				    </div>
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="address2">Address Line 2</label>
            				    	    <input type="text" name="address2" class="form-control" value="<?= $info[3] ?>">	
            				    	</div>	
            				    </div>
            				    <div class="row">
            				    	<div class="col-sm-6">
            				    	    <label class="control-label" for="city">City</label>
            				    	    <input type="text" name="city" class="form-control" value="<?= $info[4] ?>">	
            				    	</div>
            				    	<div class="col-sm-4">
            				    		<label class="control-label" for="county">County/State</label>
            				    	    <input type="text" name="county" class="form-control" value="<?= $info[5] ?>">
            				    	</div>
            				    	<div class="col-sm-2">
            				    	    <label class="control-label" for="postcode">Postcode</label>
            				    	    <input type="text" name="postcode" class="form-control" value="<?= $info[6] ?>">	
            				    	</div>	
            				    </div>

            				    <!--EMAIL-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="email">Email Address</label>
            				    	    <input type="email" name="email" class="form-control" value="<?= $info[7] ?>">	
            				    	</div>
            				    </div>

            				    <!--PHONE-->
            				    <?php if(strcmp($_SESSION['type'], "org") == 0){ ?>
                                <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="phone">Phone No</label>
            				    	    <input type="text" name="phone" class="form-control" value="<?= $info[8] ?>">	
            				    	</div>	
            				    </div>
                                <?php }else{ ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label" for="mobile">Mobile No</label>
                                        <input type="text" name="mobile" class="form-control" value="<?= $info[8] ?>">    
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label" for="home">Home No</label>
                                        <input type="text" name="home" class="form-control" value="<?= $info[9] ?>">    
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label" for="work">Work No</label>
                                        <input type="text" name="work" class="form-control" value="<?= $info[10] ?>">    
                                    </div>  
                                </div>

                                <!--ORGANISATION-->
                                <?php require 'php/selectOrganisations.php'; ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label class="control-label" for="organisation">Organisation</label>
                                        <select name="organisation" class="form-control">
                                            <?php 
                                                foreach($resultAll as $row){
                                                    if($info[11] === $row[0]){ 
                                            ?>
                                            <option value="<?= $row[0] ?>" selected><?= $row[0].': '.$row[1] ?></option>
                                            <php }else{ ?>
                                            <option value="<?= $row[0] ?>"><?= $row[0].': '.$row[1] ?></option>
                                            <?php }} ?>    
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>

            				    <!--SUBMIT-->
            				    <?php 
                                    $action = "edit";
                                    if($result == null){
                                        $action = "add";
                                    }
                                ?>
                                <div class="row">
            				    	<div class="col-xs-12">
            				    	    </br><button type="submit" class="btn btn-primary" name="save" value="<?= $action.','.$_SESSION['type'].','.$info[0] ?>">Submit</button>
            				    	</div>	
            				    </div>

            				</div>
            			</div>
            		</div>
	            </form>
	        </div>
	    </div>
	</div>

	</body>

</html>