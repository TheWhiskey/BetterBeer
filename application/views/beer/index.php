<h2><?php echo $title; ?></h2>

<?php foreach ($beer as $beer_item): ?>

        <h3><?php echo $beer_item['name']; ?></h3>
        <div class="main">
                Bryggeri: <?php echo $beer_item['brewery']; ?><br>
				Øl type: <?php echo $beer_item['beer_type']; ?><br>
				Stregkode: <?php echo $beer_item['barcode']; ?><br>
        </div>
        <p><a href="<?php echo site_url('beer/view/'.$beer_item['barcode']); ?>">View beer</a></p>

<?php endforeach; ?>