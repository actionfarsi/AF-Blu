<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
<?php
 function category_banner() {
$cat = get_the_category();
$logo = get_post_meta(get_the_ID(), 'Logo', true);
$info = get_template_directory_uri();
if ($logo) {
	$gif = $info . '/loghi/' . $logo . '.gif';
}
else {
	$gif = $info . '/loghi/' . $cat[count($cat)-1]->cat_ID . '.gif';
}

echo '<img class="logo" src="' . $gif . '"/>';
}
?>
