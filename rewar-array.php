<?php 
 //Template Name: template-array
 
 ?>

<?php 
	
	$terms_cun = get_terms( array( 
		'taxonomy' => 'reward-country',
		'hide_empty' => false,
	) );
	foreach( $terms_cun as $cun ) {
		echo '{ name: "'.$cun->name.'", abbreviation: "'.strtoupper($cun->slug).'", selected: 0 },<br>';
	}

	print_r(terms_cun);


	// global $wpdb;
	// $new = $wpdb->get_results("SELECT countries FROM  `rewards`");
	// $myArray = [];
	// foreach ($new as $n) {
	// 	$myArray[] = $n;
	// }
	// print_r($myArray);
 ?>