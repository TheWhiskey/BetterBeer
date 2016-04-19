<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('beer/create'); ?>

    <label for="name">name</label>
    <input type="input" name="name" /><br />

    <label for="brewery">brewery</label>
    <input type="input" name="brewery" /><br />

	<label for="beer_type">beer type</label>
    <input type="input" name="beer_type" /><br />

	<label for="barcode">barcode</label>
    <input type="input" name="barcode" /><br />	

    <input type="submit" name="submit" value="Create news item" />

</form>