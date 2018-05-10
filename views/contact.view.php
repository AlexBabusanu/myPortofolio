<?php require("shared/header.php"); ?>

<div class="container">
	<h1>Contact</h1>
	<div class="contact">
		<form>
			<div class="inputs">
				<div class="half">
					<label>Name</label>
					<input type="text" name="name" placeholder="name">
				</div>
				<div class="half">
					<label>Email</label>
					<input type="text" name="name" placeholder="email">
				</div>
			</div>
			<div class="message">
			<label>Your message</label>
			<textarea placeholder="Your message"></textarea>
			</div>
			<button class="buttonBlack" type="submit">Send</button>
		</form>
	</div>
</div>


<?php require("shared/footer.php"); ?>