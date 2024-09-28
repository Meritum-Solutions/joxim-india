<?php require('../resources/config.php'); ?>
<?php 
define("TITLE", "Household Electronics Product Company | Best Ceiling Fans – Joxim India");
define("MDESC", "High speed ceiling fans! Joxim has a wide range of household electronics products such as ceiling fans, water geysers, stabilizers etc ");
?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<?php include_once(TEMPLATE_FRONT . DS . "carousel.php"); ?>

		<div class="main-cover">
			
			<?php include_once("components/hm-wel-cover.php"); ?>

			<?php include_once("components/owl-carousel.php"); ?>

			<?php include_once("components/why-joxim.php"); ?>

			<?php include_once("components/hm-feature-cover.php"); ?>

			<?php include_once("components/testimonial.php"); ?>

		</div> <!--  .main-cover -->		

	</div> <!--  .main-wrapper -->

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>

