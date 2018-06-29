<style type="text/css">
	.appbox .field-wrap{
		margin:2.5em 0;
	}
.appbox input[type='text'],.appbox select,.appbox label,.appbox select option{
	/*font-size: 1.2em;*/
	}
</style>

<section class="row appcontent">
	<div class="appbox">
		<div class="container">
			<h1 class="apptitle center">Sign Up</h1>
			<div class="field-wrap">
				<label>Name:</label>
				<input type="text" name="name" placeholder="Enter Your Name">
			</div>

			<div class="field-wrap">
				<label>Address:</label>
				<input type="text" name="address1" placeholder="Address line 1">
				<input type="text" name="address1" placeholder="Address line 1">
			</div>

			<div class="field-wrap">
				<label>City:</label>
				<input type="text" name="city" placeholder="Enter Your City">
			</div>

			<div class="field-wrap">
				<label>Country:</label>
				<input type="text" name="country" placeholder="Enter Your Country">
			</div>

			<div class="field-wrap">
				<label >Currency:</label>
				<select>
					<option value="">Select an option</option>
					<option>Inr</option>
					<option>Dollar</option>
					<option>Euro</option>
					<option>Pound</option>
				</select>
			</div>

			<div class="field-wrap">
				<label>Username:</label>
				<input type="text" name="username" placeholder="Enter Your Username">
			</div>

			<div class="field-wrap">
				<label>Password:</label>
				<input type="text" name="password" placeholder="Enter Your Password">
			</div>

			<div class="field-wrap center">
				<input class="btn-submit " type="submit" name="submit" value="submit">
			</div>
			<div class=" row field-wrap links">
				<span class="center">Already have an account?<br><a href="./signup.php"><strong>Login</strong></a></span>
			</div>
		</div>
	</div>
</section>