<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		 <img src="mod/gs_theme/graphics/cabecera_red.png" alt="Red Ganemos Sevilla"> 
	</a>
</h1>
