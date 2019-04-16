<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<title>
		<?php if (is_front_page()) {
			bloginfo('name');
		} else {
			wp_title('', true);
		}?>
	</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>