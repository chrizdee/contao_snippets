<?php

$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$media = $_GET['media'];
$description = $_GET['description'];
$title = $_GET['title'];

?>
<div class="like_toolbar">
	<a class="twitter popup" href="https://twitter.com/intent/tweet?text=<?= $title ?>&url=<?= $url ?>&via=Hideaway4you"><i class="fa fa-twitter"></i></a>
	<a class="facebook popup" href="http://www.facebook.com/sharer/sharer.php?u=<?= $url ?>"><i class="fa fa-facebook"></i></a>
	<a class="googleplus popup" href="https://plus.google.com/share?url=<?= $url ?>"><i class="fa fa-google-plus"></i></a>
	<a class="pinterest popup" href="http://pinterest.com/pin/create/button/?url=<?= $url ?>&description=<?= $description ?>&media=<?= $media ?>"><i class="fa fa-pinterest"></i></a>
</div>