<?php foreach ($beer as $beer_item): ?>
		
		<div class="white_box">
		
        <a href="<?php echo site_url('beer/view/'.$beer_item['barcode']); ?>"><h3><?php echo $beer_item['name']; ?></h3></a>
		
				<ul>
                <li>Bryggeri: <?php echo $beer_item['brewery']; ?></li>
				<li>Øl type: <?php echo $beer_item['beer_type']; ?></li>
				<li>Stregkode: <?php echo $beer_item['barcode']; ?>
				</li>
        
		</div>

<?php endforeach; ?>