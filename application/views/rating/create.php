<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('rating/create'); ?>

    <label for="user_id">User</label>
    <input type="input" name="user_id" /><br />

    <label for="beer_id">Beer</label>
    <input type="input" name="beer_id" /><br />

	<label for="rating">Rating</label>
    <input type="input" name="rating" /><br />

    <input type="submit" name="submit" value="Create news item" />

</form>