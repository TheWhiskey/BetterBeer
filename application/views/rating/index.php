<h2><?php echo $title; ?></h2>

<?php foreach ($ratings as $rating_item): ?>

        <h3>Beer: <?php echo $rating_item['beername']; ?></h3>
        <div class="main">
                User: <?php echo $rating_item['username']; ?><br>
				Rating: <?php echo $rating_item['rating']; ?><br>
				
        </div>
		

<?php endforeach; ?>