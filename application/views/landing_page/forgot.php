<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--ys pull-left">
			<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>				
			<li class="active">Forgot Password</li>
		</ol>
	</div>
</div>
<div id="forgot_password_form">
<form action="forgot_password" method="POST">
<div style="text-align: center;">
	<div>
		<input type="email" class="textbox" value="<?php echo set_value('email'); ?>" name="userEmail" placeholder="Email"/>
	</div>
	<br>
	<div>
		<input type="submit" class="button" name="submit" value="Reset My Password" />
	</div>
</div>
</form>
	<?php
		echo validation_errors('<p class="error">');
		if (isset($error))
		{
			echo '<p class="error">'. $error .'</p>';
		}
	?>
</div>

	
	