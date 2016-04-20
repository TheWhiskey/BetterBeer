<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo $user_name; ?>

<?php echo form_open('rating/create'); ?>

    
	
	<label for="beer_id">Beer</label>
	<select name="beer_id">
	
		<?php var_dump($b);?>
		
		<?php foreach($beer as $b): ?>
		<?php echo '<option value="'.$b['id'].'">' . $b['name']; ?> </option>
		<?php endforeach; ?>
	</select>

	<label for="rating">Rating</label>
    <select name="rating">
		<option value="1">1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
	</select>

    <input type="submit" name="submit" value="Create news item" />

</form>