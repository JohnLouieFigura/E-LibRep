<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LitChecker</title>
	
  <?php include 'header.php'; ?>

	<?php
        error_reporting(0);
		session_start();
	
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
         else
        $let='';

        $sqlselect = mysqli_query($conn,"select DISTINCT id,title,date,category,type,link,author_1,author_2,author_3,author_4 from literature where author_1 like '$let%' "); // FOR AUTHOR_1
        $sqlselect2 = mysqli_query($conn,"select DISTINCT id,title,date,category,type,link,author_1,author_2,author_3,author_4 from literature where author_2 like '$let%' ");  // FOR AUTHOR_2
        $sqlselect3 = mysqli_query($conn,"select DISTINCT id,title,date,category,type,link,author_1,author_2,author_3,author_4 from literature where author_3 like '$let%' ");  // FOR AUTHOR_3
        $sqlselect4 = mysqli_query($conn,"select DISTINCT id,title,date,category,type,link,author_1,author_2,author_3,author_4 from literature where author_4 like '$let%' ");  // FOR AUTHOR_4

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
        <a href="Result.php" >
            <span class=""> All</span>
        </a>
    </div>
    <br>
  <div class="result-bar">
  
	<?php
        //author 1
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
        //author 2
        while ($results=mysqli_fetch_object($sqlselect2)){
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
        //author 3
        while ($results=mysqli_fetch_object($sqlselect3)){
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
        //author 4
        while ($results=mysqli_fetch_object($sqlselect4)){
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
    ?>
  </div>
    
</div>
</body>
</html>