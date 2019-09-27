
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
       <?php echo form_open('/index.php/upload/infoupload')?>
    
     <div class="form-group">
      <label>Enter the class Date</label>
      <input type="date" name="Class_Date" class="form-control" value="<?php echo set_value('Class_Date'); ?>" />
      <span class="text-danger"><?php echo form_error('Class_Date'); ?></span>
     </div>
     <label>Enter the Class Name</label>
      <input type="text" name="Class Name" class="form-control" value="<?php echo set_value('Class_Name');?>" />
      <span class="text-danger"><?php echo form_error('Class_name'); ?></span>
      <br/>
      <label>Enter the Name of Coach</label>
      <input type="text" name="Coach" class="form-control" value="<?php echo set_value('Coach');?>" />
      <span class="text-danger"><?php echo form_error('Coach'); ?></span>
      <br/>
      
     
     
     

     <div class="form-group">
      <input type="submit"  name="register" value="Upload Now" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>
 
 

</body>
</html>
 