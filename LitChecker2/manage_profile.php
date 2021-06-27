<?php 
include 'config.php';
$user = $_SESSION['user_name'];
$userid = $_SESSION['user_id'];
// echo $userid;
$sql = "SELECT * FROM user WHERE id = 1";    //error here
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
            $firstname = $row['first_name'];
            $lastname = $row['last_name'];
            $email = $row['email'];
            $contact = $row['contact'];
            $program = $row['program'];

            }
        } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profiles</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php include'banner_login.php'; ?>

<div class="container" >
	    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item ">Manage Profile</li>
          </ol>
        </nav>
	<h2>Profile</h2>
	<div class="panel panel-info">
    	<div class="panel-heading"><b>Basic User Information</b></div>
	    <div class="panel-body">
		    <form class="form-horizontal" action="">
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">First Name:</label>
				  <div class="col-sm-6">
				    <input type="text" class="form-control" id="" value="<?php echo $firstname ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Last Name:</label>
				  <div class="col-sm-6">          
				    <input type="text" class="form-control" id="" value="<?php echo $lastname ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Email Address:</label>
				  <div class="col-sm-6">
				    <input type="email" class="form-control" id="" value="<?php echo $email ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Contact Info:</label>
				  <div class="col-sm-6">          
				    <input type="text" class="form-control" id="" value="<?php echo $contact ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Program</label>
				  <div class="col-sm-6">          
				    <input type="text" class="form-control" id="" value="<?php echo $program ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
				    <button type="submit" class="btn btn-primary"><span class="fa fa-edit"></span> Edit Personal Information</button>
				  </div>
				</div>
			</form>
	    </div>
    </div>
     
</div>

</body>
</html>



