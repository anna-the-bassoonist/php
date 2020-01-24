<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		//   Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
		$number = 20;
		if ($number < 10) {
			echo 'cos';
		} elseif ($number < 12) {
			echo 'jest';
		} else {
			echo 'i love PHP ';
		};

		// Step 2: Make a forloop  that displays 10 numbers

		for($mak = 1; $mak <= 10; $mak++){
			echo $mak . ' ,';
		}

		// Step 3 : Make a switch Statement that test againts one condition with 5 cases

		$number = 11;
		switch ($number) {
			case 6:
				echo ' 6';
				break;
			case 7:
				echo '7';
				break;
			case 8:
				echo '8';
				break;
			case 9:
				echo '9';
				break;
			case  10:
				echo '10';
				break;
			default:
				echo ' nic nie pasuje';
		}



		?>






	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>