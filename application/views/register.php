<!DOCTYPE html>
<html>
<head>
 <title>Complete User Registration and Login System in Codeigniter</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>

 <div class="container">
  <br />
  <h3 style="align:center">Complete User Registration and Login System in Codeigniter</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">Register</div>
   <div class="panel-body">
       <?php echo form_open('/index.php/register/validation')?>
    
     <div class="form-group">
      <label>Enter Your Name</label>
      <input type="text" name="Name" class="form-control" value="<?php echo set_value('Name'); ?>" />
      <span class="text-danger"><?php echo form_error('Name'); ?></span>
     </div>
     <label>Date of Birth</label>
      <input type="date" name="DOB" class="form-control" value="<?php echo set_value('DOB');?>" />
      <span class="text-danger"><?php echo form_error('DOB'); ?></span>
      <br/>
      
     
     <label>Gender</label>
     
			
		  <input class="form-check-input" type="radio" name="gender" value="option1">
		  <span class="form-check-label"> Male </span>
		
		
		  <input class="form-check-input" type="radio" name="gender" value="option2">
          <span class="form-check-label"> Female</span>
          <br/>
          <br/>
		
     <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="text" name="Email" class="form-control" value="<?php echo set_value('Email'); ?>" />
      <span class="text-danger"><?php echo form_error('Email'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="Password" class="form-control" value="<?php echo set_value('Password'); ?>" />
      <span class="text-danger"><?php echo form_error('Password'); ?></span>
     </div>
     <div class="form-group">
     <label>Health Status:</label>
                  <input type="text" name="health_status" class="form-control" value="<?php echo set_value('health_status'); ?>" />
                    <span class="text-danger"><?php echo form_error('health_status'); ?></span>

                  </div>
                  <div class="form-group">
      <label>Phone Number</label>
      <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>" />
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
     </div>
     <div class="form-group">
      <label>Emergency Contact</label>
      <input type="text" name="emercontact" class="form-control" value="<?php echo set_value('emercontact'); ?>" />
      <span class="text-danger"><?php echo form_error('emercontact'); ?></span>
     </div>
     <div class="form-group">
                  <label>Martial Art Experience:</label>
                  <input type="text" name="martial_art_experience" class="form-control" value="<?php echo set_value('martial_art_experience'); ?>" />

				  
                
                    <span class="text-danger"><?php echo form_error('martial_art_experience'); ?></span>

                  </div>
                  <br/>
                  <br/>
     

     <div class="form-group">
      <input type="submit"  name="register" value="Register" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>
 
 

</body>
</html>
 