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

            				    <!--NAME-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    		<label class="control-label" for="name">Name</label>
            				    		<input type="text" name="name" class="form-control" required="required">
            				    	</div>
            				    </div>

            				    <!--ADDRESS-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="address1">Address Line 1</label>
            				    	    <input type="text" name="address1" class="form-control">	
            				    	</div>
            				    </div>
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="address2">Address Line 2</label>
            				    	    <input type="text" name="address2" class="form-control">	
            				    	</div>	
            				    </div>
            				    <div class="row">
            				    	<div class="col-sm-6">
            				    	    <label class="control-label" for="city">City</label>
            				    	    <input type="text" name="city" class="form-control">	
            				    	</div>
            				    	<div class="col-sm-4">
            				    		<label class="control-label" for="county">County/State</label>
            				    	    <input type="text" name="county" class="form-control">
            				    	</div>
            				    	<div class="col-sm-2">
            				    	    <label class="control-label" for="postcode">Postcode</label>
            				    	    <input type="text" name="postcode" class="form-control">	
            				    	</div>	
            				    </div>

            				    <!--EMAIL-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="email">Email Address</label>
            				    	    <input type="email" name="email" class="form-control">	
            				    	</div>
            				    </div>

            				    <!--PHONE-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    <label class="control-label" for="email">Phone No</label>
            				    	    <input type="text" name="email" class="form-control">	
            				    	</div>	
            				    </div>

            				    <!--SUBMIT-->
            				    <div class="row">
            				    	<div class="col-xs-12">
            				    	    </br><input type="submit" class="btn btn-primary">	
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