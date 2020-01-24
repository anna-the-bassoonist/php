<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

	echo pow(5,3);
	echo "<br>";

	$string = 'cos cos';
	echo str_split($string)[1]; // string to array
	echo "<br>";

	$myArray = [3,5,4,66];
	echo end(array_keys($myArray));
	echo "<br>";

	echo end(array_values($myArray));
    echo "<br>";

	$otherArray = [4,5,6,$number];
	$found = in_array($number, $otherArray);

	if($found){
		echo 'we founded it';
	} else {
		echo 'we didnt find it';
	}
	// echo array_key_last(array $myArray);
	
/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>