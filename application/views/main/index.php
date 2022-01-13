<p>Главная страница</p>

<?php foreach ($persons as $val): ?>
	<h3><?php echo $val["city"]; ?></h3>
	<p><?php echo $val["phone"]; ?></p>
	<hr>
<?php endforeach; ?>
<?php
use application\models\Main;




