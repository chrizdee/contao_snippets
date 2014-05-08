<?php
$logo_size = getimagesize($entry['data']['producer_logo']['raw']);
if ($logo_size[0] > 150) $logo = $this->getImage($entry['data']['producer_logo']['raw'], 150, false);
else $logo = $entry['data']['producer_logo']['raw'];
?>
<img src="<?php echo $logo; ?>" alt="<?php echo $entry['data']['producer_name']['value']; ?>" title="<?php echo $entry['data']['producer_name']['value']; ?>">