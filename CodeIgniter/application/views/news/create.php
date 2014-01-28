<h2>Create a new person</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="firstname">First Name</label>
	<input type="input" name="firstname" /><br />

	<label for="lastname">Last name</label>
	<input type="input" name="lastname" /><br />
	
	<label for="notesID">Email</label>
	<input type="input" name="notesID" /><br />
	<input type="submit" name="submit" value="Create new contact" />

</form>
