<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--ys pull-left">
			<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>				
			<li class="active">Update Password</li>
		</ol>
	</div>
</div>
<div id="update_password_form">
	<form action="<?php echo base_url()?>landing_page/update_password" method="POST">
		<div style="text-align: center;" class="form-group">
			<label for="email">Email: </label>
			<?php if (isset($email_hash, $email_code)) { ?>
			<input type="hidden" name="email_hash" value="<?php echo $email_hash ?>">
			<input type="hidden" name="email_code" value="<?php echo $email_code ?>">
			<?php } ?>
			<input type="email" class="form-control" name="userEmail" style="text-align: center;" value="<?php echo (isset($userEmail)) ? $userEmail : ''; ?>" readonly>
		</div>
		<div style="text-align: center;" class="form-group">
			<label form="password">New Password: </label>
			<input type="password" class="form-control" value="" name="password" style="text-align: center;" />
		</div>
		<div style="text-align: center;" class="form-group">
			<label form="password_conf">Confirm Password: </label>
			<input type="password" class="form-control" value="" name="password_conf" style="text-align: center;"/>
		</div>
		<div style="text-align: center;">
			<input class="button" type="submit" name="submit" value="Update my password"/>
		</div>
	</form>
	<?php
		echo validation_errors('<p class="error">');
	?>
</div>
