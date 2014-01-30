<?php

$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

?>
<div class="like_toolbar">
	<div class="facebook button">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=121709794589379";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-like" data-href="<?php echo $url; ?>" data-width="80" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
	</div>
	<div class="plusone button">
		<div class="g-plusone" data-size="medium"></div>
		<script type="text/javascript">
		  window.___gcfg = {lang: 'de'};

		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/platform.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
	</div>
	<div class="twitter button">
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="novowebdesign">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
</div>