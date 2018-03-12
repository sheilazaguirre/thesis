<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--ys pull-left">
			<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>				
			<li class="active">Reset Password</li>
		</ol>
	</div>
</div>
<div id="forgot_password_form">
<form action="<?php echo base_url()?>landing_page/forgot_password" method="POST">
<div style="text-align: center;">
	<div>
		<input type="email" class="textbox" value="<?php echo set_value('email'); ?>" name="userEmail" autocomplete="off" placeholder="Email"/>
	</div>
	<br>
	<div>
		<input type="submit" class="button" name="submit" value="Reset My Password" />
	</div>
	<div>
		<div class="g-recaptcha" data-sitekey="6LfRmzcUAAAAAGUARi6CAjGlAVfuO0AzGwIS1z3k" align="center"></div>
	</div>
</div>
</form>
	<?php
		echo validation_errors('<p class="error">');
		if (isset($error))
		{
			echo '<p class="error" style="text-align: center; color: #80091f;">'. $error .'</p>';
		}
	?>
</div>

	
	