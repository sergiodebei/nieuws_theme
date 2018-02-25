<?php
/**
 * The sidebar containing the main widget areas
 * @package Fresh Theme
 */
?>

<aside>

	<?php wp_get_archives( array ( 'type' => 'yearly' ) ); ?>
	<?php wp_get_archives( array ( 'type' => 'monthly' ) ); ?>

</aside>