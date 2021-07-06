<form action="valid-contact-form.php" method="post" id="contact-form">
	<fieldset>
		<div class="form-group">
			<label for="name">Nom*</label>
			<input type="text" name="name" class="form-control" id="name">
		</div>
		<div class="form-group">
			<label for="email">Email*</label>
			<input type="email" name="email" class="form-control" id="email">
		</div>
		<div class="form-group">
			<label for="message">Message*</label>		
			<textarea type="text" name="message" class="form-control" id="message" cols="20" rows="10"></textarea>
		</div>
		<p>Les champs avec (*) sont obligatoires</p>
		<input type="submit" class="btn btn-light" value="Envoyer">
		<small id="valid-message"></small>
		<div>
			<br>
			<a href="tel:+33<?php echo $band['tel']; ?>">0<?php echo $band['tel']; ?></a>
			<a href="mailto:contact@example.com">contact@example.com</a>
		</div>
	</fieldset>
</form>