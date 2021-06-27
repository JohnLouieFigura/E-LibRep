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
           
            $_SESSION['searching'] = $_POST['search'];
            header('Location: Result.php');    
		}
    ?>


	<!-- SQL QUERY --> 

	<?php
       
       include 'config.php';

        if(isset($_GET['let']))
        $let = $_GET['let'];

        $sqlselect = mysqli_query($conn,"select title,category,date,type,link,view,abstract,download,author_1,author_2,author_3,author_4  from literature where id like '$let' "); 
        $sqlselectresult= mysqli_num_rows($sqlselect);

    ?>


	<!-- SEARCH RESULT --> 
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
    	<a href="search_category.php" >
            <span class=""> Browse Catalog</span>
        </a> |
        <a href="Result.php" >
            <span class=""> All</span>
        </a>
        
    </div>
    <br>
  <div class="result-bar">
	<?php
        while ($results=mysqli_fetch_object($sqlselect)){
              	  echo "<div class='res2'><ul>";

                  echo"<li><b>$results->title</li>"; 
                  echo "<li>Authors:</b><i> ";
                  echo "$results->author_1".", "."$results->author_2" .", "."$results->author_3" .", "."$results->author_4";
                  echo "</li></i>";

                  echo"<li><b>Date Published:</b> $results->date</li>"; 
                  echo"<li><b>Category:</b> $results->category</li>"; 
				  echo"<li><b>Type:</b> $results->type</li>"; 
				  echo"<li><b>Abstract:</b><p> $results->abstract</p></li>"; 
                  
              	  echo"<li><b>Download the full document here: </b><a href='$results->link'>$results->link </a></li> ";

				 echo" </ul>
				  </div> ";
      
        }

    ?>
	</div>
</div>

</body>
</html>