<?php
include( '../config/variables.php' );
include( '../templates/header.php' );
?>
    <div id='wrapper'>
		<?php include( '../templates/nav.php' ); ?>
		<div id='page-wrapper'>
			add category form
			<input type="hidden" name="function_call" value="add_category">
		</div>
	</div>
    <!-- /#wrapper -->
<?php include( '../templates/footer.php' ); ?>
