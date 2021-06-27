<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LitChecker</title>
	<link rel="stylesheet" type="text/css" href="css/result.css">
</head>
<body>
	
	<?php

		include 'header.php';


        error_reporting(0);
        // SEARCH PROCESS
	    if($_POST['btnsubmit']){
            session_start();
            $_SESSION['searching'] = $_POST['search'];
            header('Location: Result.php');    
		}
    ?>

	 <!-- SEARCH OPTIONS --> 
<div class="results container" style="margin-left:10%">
    <div >
      <form class="form-inline" name="search-area" method="POST">
        <input class="form-control" type="search" placeholder="Type something..." aria-label="Search" required name="search" style="width: 300px"; name="search">
        <!-- <br> -->
        <button class="btn btn-success" type="submit" name="btnsubmit" value="Search" style="width:100px;">Search</button>
    </form>
    </div>
    <br>
    <div class="option navi_search">
      	<a href="result.php" >
      		<span class=" sm"></span> All
      	</a> |
        <a href="result_type.php?type=thesis" >
        	<span class=""></span> Thesis
      	</a> |
        <a href="result_type.php?type=case" >
        	<span class=""></span> Case Study
      	</a> |
      	<a href="result_type.php?type=article" >
        	<span class=""></span> Articles
      	</a>
    </div>
    <br>
<div class="result-bar">

	<!-- SQL QUERY --> 

	<?php
        
        include 'config.php';
        
        if(isset($_GET['type']))
        $type = $_GET['type'];
       
       //search
       $search_this = $_SESSION['searching'];

       $sqlselect = mysqli_query($conn,"select id,title,category,date,type,link,view,download,author_1,author_2,author_3,author_4  from literature where title like '%$search_this%' and type like '%$type%' "); 
       $sqlselectresult= mysqli_num_rows($sqlselect);
       ?>

    


	<!-- SEARCH RESULT --> 
	
	<div class="results">
	<?php
        while ($results=mysqli_fetch_object($sqlselect)){
              	  echo "<div class='res2'>
					<ul><li><b>";
              	  echo"<a href='Display.php?let=$results->id'>$results->title ";
               	  echo "</a></li></b>";   

				  echo "<li><i>";
                  echo "$results->author_1".", "."$results->author_2" .", "."$results->author_3" .", "."$results->author_4";
                  echo "</li></i>";

				  echo "<li><i>";
                  echo "$results->date </li></i>
				  </ul>
				  </div> ";
      
        }
		//IF NO RESULTS FOUND
		if($sqlselectresult == 0){
			echo'no results found';
		} 

    ?>
	</div>
</div>

</body>
</html>


