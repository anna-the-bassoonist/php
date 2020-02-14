<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->

	<article class="main-content col-xs-8">


		<?php

		/*  Step 1: Use the Make a class called Dog*/
		/* 	Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color*/
		/* 	Step 3: Make a method named ShowAll that echos all the properties*/
		/* 	Step 4: Instantiate the class / create object and call it pitbull*/
		/* Step 5: Call the method ShowAll*/


		class Dog
		{
			var $colour = 'brown-black';
			var $race = 'sheep-dog';
			var $age = 14;

			function showAll()
			{
				echo $this->colour . $this->race . $this->age;
			}
		};

		$colie = new Dog();
		$colie->showAll();








		?>





	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>