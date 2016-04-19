<h2><?php echo $title; ?></h2>

<?php foreach ($ratings as $rating_item): ?>

        <h3>Beer: <?php echo $rating_item['beer_id']; ?></h3>
        <div class="main">
                User: <?php echo $rating_item['user_id']; ?><br>
				Rating: <?php echo $rating_item['rating']; ?><br>
				
        </div>
		

<?php endforeach; ?>