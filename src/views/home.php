<?php

require __DIR__ . '/top.php';
?>



<h1>Sweet Home Alabama</h1>
<button type="submit" class="btn btn-success">button</button>
<ul>
<?php foreach($list as $value) : ?>

    <li><?= $value ?></li>
    
<?php endforeach ?>
</ul>

<?php
require __DIR__ . '/bottom.php';