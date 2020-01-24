<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers */

function calculate(){
	$num1 = 2;
	$num2 = 4;
	 $sum =  $num1 * $num2;
	return $sum;
}

$cal = calculate();
echo $cal;

echo '<br>';
//	Step 2: Make a function that passes parameters and call it using parameter values

function passing($par1, $par2){
echo $par1 . ', '.  $par2;
}
passing(10,20);

 

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>