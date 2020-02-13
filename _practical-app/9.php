<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<?php print_r($_GET); ?>
<?php

$name = 'cookieName';
$value = 'cookie check';
$expiration = time() + (60 * 60 * 24 * 7);
setcookie($name, $value, $expiration); ?>

<?php
session_start();

$_SESSION['testSession'] = 'test session works';

?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		$id = 20;
		/*  Create a link saying Click Here, and set 
the link href to pass some parameters and use the GET super global to see it

Step 2 - Set a cookie that expires in one week

Step 3 - Start a session and set it to value, any value you want.
*/

		if (isset($_COOKIE['cookieName'])) {
			echo $_COOKIE['cookieName'];
		}
		if (isset($_GET['id'])) {
			echo $_GET['id'];
		}

		if (isset($_SESSION)) {
			echo $_SESSION['testSession'];
		}
		?>

		<a href="9.php?id=<?php echo $id ?>">click here</a>




	</article>
	<!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>