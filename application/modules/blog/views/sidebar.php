<div class="widget-items mb-40">
	<?php
	$city = "Siliguri";
	$keyw = array(
		"Commercial Kitchen Equipment $city", "Bakery Equipment Manufacturer $city", "SS 304 Fabrication $city",
		"Display Counter Manufacturer $city", "Restaurant Kitchen Setup $city", "Industrial Bakery Ovens $city",
		"Kitchen Ventilation Hoods $city", "LPG Pipeline Installation $city", "Commercial Refrigerator $city",
		"Heavy-Duty Gas Ranges $city", "Spiral Dough Kneaders $city", "Pastry Display Showcase $city",
		"Commercial Food Equipment India", "Hotel Kitchen Equipment $city", "Custom SS Worktables $city"
	);
	?>
	<h6>Relevant Keywords in <?= $city ?></h6>
	<ul class="inline">
		<?php
		shuffle($keyw);
		foreach ($keyw as $k) { ?>
			<li class="badge badge-secondary"><?= $k ?></li>
		<?php } ?>
	</ul>
</div>