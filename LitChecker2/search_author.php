<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LitChecker</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	
</head>
<style>
li
{
	list-style-type: none;
}
a
{
	text-decoration:none;
	color: #107896;
}
</style>

    <?php include 'header.php';?> 

<body>

 	<!-- MENU BAR --> 
<div  class="container" >
	  <!--MAIN SECTION -->
	  <section class = "body" style="color: black;">
    <br>

	⠀⠀⠀⠀⠀⠀
    <!--LETTER LIST --> 
    <a href="search_author.php?let=A"> A </a> | 
    <a href="search_author.php?let=B"> B </a> | 
    <a href="search_author.php?let=C"> C </a> | 
    <a href="search_author.php?let=D"> D </a> | 
	<a href="search_author.php?let=E"> E </a> | 
	<a href="search_author.php?let=F"> F </a> | 
	<a href="search_author.php?let=G"> G </a> | 
	<a href="search_author.php?let=H"> H </a> | 
	<a href="search_author.php?let=I"> I </a> | 
	<a href="search_author.php?let=J"> J </a> | 
	<a href="search_author.php?let=K"> K </a> | 
	<a href="search_author.php?let=L"> L </a> | 
	<a href="search_author.php?let=M"> M </a> | 
	<a href="search_author.php?let=N"> N </a> | 
	<a href="search_author.php?let=O"> O </a> | 
	<a href="search_author.php?let=P"> P </a> | 
	<a href="search_author.php?let=Q"> Q </a> | 
	<a href="search_author.php?let=R"> R </a> | 
	<a href="search_author.php?let=S"> S </a> | 
	<a href="search_author.php?let=T"> T </a> | 
	<a href="search_author.php?let=U"> U </a> | 
	<a href="search_author.php?let=V"> V </a> | 
	<a href="search_author.php?let=W"> W </a> | 
	<a href="search_author.php?let=X"> X </a> | 
	<a href="search_author.php?let=Y"> Y </a> | 
    <a href="search_author.php?let=Z"> Z </a>  
    <br><br>
    
    <!--DISPLAYING AUTHOR LIST -->

        <!--SQL CONNECTION -->
        <?php
        include 'config.php';

        if(isset($_GET['let']))
            $let = $_GET['let'];
        else
            $let='A';

        $sqlselect = mysqli_query($conn,"select  DISTINCT author_1 from literature where author_1 like '$let%' "); // FOR AUTHOR_1
        $sqlselect2 = mysqli_query($conn,"select DISTINCT author_2 from literature where author_2 like '$let%' "); // FOR AUTHOR_2
        $sqlselect3 = mysqli_query($conn,"select DISTINCT author_3 from literature where author_3 like '$let%' "); // FOR AUTHOR_3
		$sqlselect4 = mysqli_query($conn,"select DISTINCT author_4 from literature where author_4 like '$let%' "); // FOR AUTHOR_4
        ?>

        <ul>

        <?php

            //AUTHOR_1 LIST
            while ($results=mysqli_fetch_object($sqlselect)){
                echo "<li>";
                echo"<a href='result_author.php?let=$results->author_1'>";
                echo '⠀⠀⠀⠀⠀⠀'.$results->author_1." ";    
                echo "</a>";   
                echo "</li>";
            }
            //AUTHOR_2 LIST
            while ($results=mysqli_fetch_object($sqlselect2)){
                echo "<li>";
                echo"<a href='result_author.php?let=$results->author_2'>";
                echo '⠀⠀⠀⠀⠀⠀'.$results->author_2." ";    
                echo "</a>";   
                echo "</li>";
            }
            //AUTHOR_3 LIST
            while ($results=mysqli_fetch_object($sqlselect3)){
                echo "<li>";
                echo"<a href='result_author.php?let=$results->author_3'>";
                echo '⠀⠀⠀⠀⠀⠀'.$results->author_3." ";    
                echo "</a>";   
                echo "</li>";
            }
			//AUTHOR_4 LIST
			  while ($results=mysqli_fetch_object($sqlselect4)){
                echo "<li>";
                echo"<a href='result_author.php?let=$results->author_4'>";
                echo '⠀⠀⠀⠀⠀⠀'.$results->author_4." ";    
                echo "</a>";   
                echo "</li>";
            }
            
        ?>
            
        </ul>
    </section>
</div>
</body>
</html>