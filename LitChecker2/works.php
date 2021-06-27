<!DOCTYPE html>
<html style="">
<head>
	<title>Your Works</title>
</head>


<?php
	include 'config.php';
	include 'banner_login.php';

	$user = $_SESSION['user_name'];
    // echo $user;
?>
<body>
<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Your Works</li>
      </ol>
    </nav>

<div align="right">
    <a href="#add_upload" data-toggle="modal">
        <button type='button' class='btn btn-success btn-sm'><span class='fa fa-plus' aria-hidden='true'></span>  Add Record</button>
    </a>
    <br>
    <br>
</div>


	<!-- LIST OF WORK-->
<table id="example" class="display nowrap" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
                    $sql = "SELECT *  from literature WHERE owner = 'lorem'"; //error here
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // viewput data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $owner = $row['owner'];
                            $title = $row['title'];
                            $category = $row['category'];
                            $type = $row['type'];
                            $link = $row['link'];
                            $views = $row['views'];
                            $date = $row['date'];
                            $abstract = $row['abstract'];
                            $download = $row['download'];
                            $author_1 = $row['author_1'];
                            $author_2 = $row['author_2'];
                            $author_3 = $row['author_3'];
                            $author_4 = $row['author_4'];

                            
                    ?>
                <tr>
                    <td>
                        <?php echo $id; ?>
                    </td>
                    <td>
                        <?php echo $owner; ?>
                    </td>
                    <td>
                        <?php echo $title; ?>
                    </td>
                     <td>
                        <?php echo $category; ?>
                    </td>
                    <td>
                        <?php 
                        if ($type == 1){
                        ?> 
                        <span class="label label-success">Article</span>
                        <?php }
                        else if ($type == 2){
                        ?> 
                        <span class="label label-warning">Case Study</span>
                        <?php }
                        else if ($type == 3){
                        ?> 
                        <span class="label label-info">Thesis</span>
                        <?php }
                        else if ($type == 0){
                        ?> 
                        <span class="label label-danger">Not Set</span>
                        <?php }
                        else {
                        ?> 
                        <span class="label label-danger">NaN</span>
                        <?php }
                        ?>
                    </td>
                    <td>
                        <?php echo $date; ?>
                    </td>
                    <td>
                        
                          <a href="#view<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-success btn-sm'><span class='fa fa-eye' aria-hidden='true'></span> View</button>
                        </a>
                        <a href="#edit<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm'><span class='fa fa-edit' aria-hidden='true'> Edit</span></button>
                        </a>
                        <a href="#print<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-primary btn-sm'><span class='fa fa-print' aria-hidden='true'> Print</span></button>
                        </a>
                        <a href="#remove<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-danger btn-sm'><span class='fa fa-trash' aria-hidden='true'> Delete</span></button>
                        </a>
                    </td>
                    <!--Add File/Record Modal -->
                    <div id="add<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Stocks</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Item Name:</label>
                                            <div class="col-sm-3">
                                                <input type="hidden" name="add_stocks_id" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Item Name" required readonly value="<?php echo $item_name; ?>"> </div>
                                            <label class="control-label col-sm-2" for="item_code">Item Code:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="item_code" name="item_code" placeholder="Item Code" required readonly value="<?php echo $item_code; ?>" autocomplete="off"> </div>
                                            <label class="control-label col-sm-1" for="dr_no">DR #:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="dr_no" name="dr_no" placeholder="DR #" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Quantity:</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" autocomplete="off" required min="1"> </div>
                                            <label class="control-label col-sm-2" for="item_name">Remarks:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="add_inventory"><span class="glyphicon glyphicon-plus"></span> Add</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--view Stocks Modal -->
                    <div id="view<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <form method="post" class="form-horizontal" role="form">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">View Details</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Title:</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="file_id" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $title; ?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Author:</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $author_1.', '.$author_2.', '.$author_3.', '.$author_4; ?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Category:</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $category; ?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Abstract:</label>
                                            <div class="col-sm-8">
                                                <div class="form-outline w-75 mb-4">
                                                    <textarea class="form-control" id="" rows="5" readonly><?php echo $abstract; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Link:</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $link; ?>"> </div>
                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal"><span class="fa fa-close"></span> Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!--Edit Item Modal -->
                    <div id="edit<?php echo $id; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <input type="hidden" name="file_id" value="<?php echo $id; ?>">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Details</h4>
                                    </div>
                                    <br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="file_title">Title:</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="file_title" name="file_title"  required  value="<?php echo $title; ?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Author:</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="file_author" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="file_author" name="file_author"  required  readonly value="<?php echo $author_1.', '.$author_2.', '.$author_3.', '.$author_4; ?>"> </div>
                                        </div>  
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="file_category">Category:</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="file_category" name="file_category"  required   value="<?php echo $category;?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="file_type">Type:</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="file_type" name="file_type">
                                                    <option value="">~~SELECT~~</option>
                                                    <option value="1">Article</option>
                                                    <option value="2">Case Study</option>
                                                    <option value="3">Thesis</option>
                                                </select>
                                        </div>  
                                        <br><br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="file_abstract">Abstract:</label>
                                            <div class="col-sm-8">
                                                <div class="form-outline w-75 mb-4">
                                                    <textarea class="form-control" id="file_abstract" rows="5" name="file_abstract" ><?php echo $abstract; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="file_link">Link:</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="file_link" name="file_link"  required  value="<?php echo $link; ?>"> </div>
                                        </div>
                                        <br><br>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="update_file"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Print Modal -->
                    <div id="print<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Print</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="" value="<?php echo $id; ?>">
                                        <div class="alert alert-info">Do you want to print this file<strong>
                                                <?php echo '('. $title.')' ?>?</strong> </div>
                                        <div class="modal-footer">
                                            <a href="" target="popup" onclick="window.open('../html-link.htm','name','width=600,height=400')"><!-- //put link and import PIP for printing  -->
                                            <button type="submit" name="" class="btn btn-success"><span class="fa fa-check"></span> YES</button>
                                            </a>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Delete Modal -->
                    <div id="remove<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                                        <div class="alert alert-danger">Are you Sure you want Delete <strong>
                                                <?php echo $item_name; ?>?</strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="delete" class="btn btn-danger"><span class="fa fa-trash"></span> YES</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-close"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>
                <?php
                        }
                        if(isset($_POST['change_pass'])){
                            $sql = "SELECT password FROM tbl_user WHERE username='$session_username'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // viewput data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($row['password'] != $current_password){
                                        echo "<script>window.alert('Invalid Password');</script>";
                                        $passwordErr = '<div class="alert alert-warning"><strong>Password!</strong> Invalid.</div>';
                                    } elseif($new_password != $repeat_password) {
                                        echo "<script>window.alert('Password Not Match!');</script>";
                                        $passwordErr = '<div class="alert alert-warning"><strong>Password!</strong> Not Match.</div>';
                                    } else{
                                        $sql = "UPDATE tbl_user SET password='$new_password' WHERE username='$session_username'";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "<script>window.alert('Password Successfully Updated');</script>";
                                        } else {
                                            echo "Error updating record: " . $conn->error;
                                        }
                                    }    
                                }
                            } else {
                                $usernameErr = '<div class="alert alert-danger"><strong>Username</strong> Not Found.</div>';
                                $username = "";
                            }
                        }


                        //Update Items
                        if(isset($_POST['update_file'])){
                            $file_id = $_POST['file_id'];
                            $file_title = $_POST['file_title'];
                            $file_category = $_POST['file_category'];
                            $file_type = $_POST['file_type'];
                            $file_abstract = $_POST['file_abstract'];
                            $file_link = $_POST['file_link'];
                            $sql = "UPDATE literature SET 
                                title='$file_title',
                                category='$file_category',
                                type='$file_type',
                                abstract='$file_abstract',
                                link='$file_link'
                                WHERE id='$file_id' ";
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="works.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

                        if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM literature WHERE id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                $sql = "DELETE FROM tbl_inventory WHERE id='$delete_id' ";
                                // if ($conn->query($sql) === TRUE) {
                                //     $sql = "DELETE FROM tbl_inventory WHERE id='$delete_id' ";
                                //     echo '<script>window.location.href="inventory.php"</script>';
                                // } else {
                                //     echo "Error deleting record: " . $conn->error;
                                // }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }
                    }

//Add Item        
                    if(isset($_POST['up_file'])){
                        $up_title = $_POST['up_title'];
                        $up_date = $_POST['up_date'];
                        $up_category = $_POST['up_category'];
                        $up_link = $_POST['up_link'];
                        $up_author1 = $_POST['up_author1'];
                        $up_author2 = $_POST['up_author2'];
                        $up_author3 = $_POST['up_author3'];
                        $up_author4 = $_POST['up_author4'];
                        $up_abstract = $_POST['up_abstract'];
                        $up_owner = $_POST['up_owner'];

                        $sql = "INSERT INTO literature (
                                owner, title, category, type, link,view, abstract, date, download ,author_1, author_2, author_3, author_4) 
                                VALUES (
                                '$up_owner', '$up_title', '$up_category','$up_type', '$up_link',0, '$up_abstract', '$up_date',0, '$up_author1', '$up_author2', '$up_author3', '$up_author4' )
                                ";
//Add record on Backup Table
                        // if ($conn->query($sql) === TRUE) {
                        //     $add_inventory_query = "INSERT INTO literature (
                        //         owner, title, category, type, link,view, abstract, date, download ,author_1, author_2, author_3, author_4) 
                        //         VALUES (
                        //         '$up_owner', '$up_title', '$up_category','$up_type', '$up_link',0, '$up_abstract', '$up_date',0, '$up_author1', '$up_author2', '$up_author3', '$up_author4' )
                        //         ";

                        //     if ($conn->query($add_inventory_query) === TRUE) {
                        //         echo '<script>window.location.href="works.php"</script>';
                        //     } else {
                        //         echo "Error: " . $sql . "<br>" . $conn->error;
                        //     }
                        // } else {
                        //     echo "Error: " . $sql . "<br>" . $conn->error;
                        // }
                    }

                    if(isset($_POST['add_inventory'])){
                        $add_stocks_id = clean($_POST['add_stocks_id']);
                        $remarks = clean($_POST["remarks"]);
                        $quantity = clean($_POST['quantity']);
                        $sql = "INSERT INTO tbl_issuance(date,item_name,item_code,qty, in_view,            remarks)VALUES ('$date_time','$item_name','$item_code','$quantity','in','$remarks')";
                        if ($conn->query($sql) === TRUE) {
                            $add_inv = "UPDATE tbl_inventory SET qty=(qty + '$quantity') WHERE id='$add_stocks_id' ";
                            if ($conn->query($add_inv) === TRUE) {
                                echo '<script>window.location.href="inventory.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

                    if(isset($_POST['minus_inventory'])) {
                        $minus_stocks_id = clean($_POST['minus_stocks_id']);
                        $remarks = clean($_POST["remarks"]);
                        $quantity = clean($_POST['quantity']);
                        $sql = "INSERT INTO tbl_issuance(date,item_name,item_code,qty, sender_receiver,in_view,            remarks)VALUES ('$date_time','$item_name','$item_code','$quantity','$received_by','view','$remarks')";
                        if ($conn->query($sql) === TRUE) {
                            $add_inv = "UPDATE tbl_inventory SET qty=(qty - '$quantity') WHERE id='$minus_stocks_id' ";
                            if ($conn->query($add_inv) === TRUE) {
                                echo '<script>window.location.href="inventory.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
?>
            </tbody>
        </table>



 <div id="add_upload" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" class="form-horizontal" role="form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add new</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_title">Title: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_title" name="up_title" placeholder="Book/Thesis/Article Title" required autocomplete="off" value=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_date">Date Published: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="date" class="form-control" id="up_date" name="up_date" required autocomplete="off" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_category">Category: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_category" name="up_category" placeholder="Ex. Information Technology" required autocomplete="off" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_type">Type: </label>
                        <div class="col-sm-4">
                            <select class="form-control" id="up_type" name="up_type" required>
                                <option value="">~~SELECT~~</option>
                                <option value="1">Article</option>
                                <option value="2">Case Study</option>
                                <option value="3">Thesis</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_link">Download Link: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="url" class="form-control" id="up_link" name="up_link" placeholder="https://" required autocomplete="off" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_author1 up_author2">Author/s: </label>
                        <div class="col-sm-4">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_author1" name="up_author1" placeholder="Author 1" required autocomplete="off" value=""> </div>
                            <div class="col-sm-4">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_author2" name="up_author2" placeholder="Author 2"  autocomplete="off" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_author3 up_author4"></label>
                        <div class="col-sm-4">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_author3" name="up_author3" placeholder="Author 3"  autocomplete="off" value=""> </div>
                            <div class="col-sm-4">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_author4" name="up_author4" placeholder="Author 4"  autocomplete="off" value=""> </div>
                    </div>
                    <div class="col-sm-8">
                            <h6 align="center" style="color: crimson;">*<b>1 author is required.</b></h6>
                        </div>
                        <br>
                        <br>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="ip_abstract">Abstract: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <textarea type="text" rows="5" class="form-control" id="ip_abstract" name="ip_abstract" placeholder="Abstract" required autocomplete="off" value=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_owner">Owner: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="text" rows="5" class="form-control" id="up_owner" name="up_owner" placeholder="Abstract" readonly="" autocomplete="off" value="<?php echo $_SESSION['user_name']; ?>"></input>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="up_file"><span class="glyphicon glyphicon-plus"></span> Add</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>

