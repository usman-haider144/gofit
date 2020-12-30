<?php

require_once( '../../../wp-load.php' );

global $wpdb;

$new = $wpdb->get_results("SELECT * FROM  `rewards` WHERE status=0 limit 5");

function uploadMedia($image_url){

	require_once('../../../wp-admin/includes/image.php');

	require_once('../../../wp-admin/includes/file.php');

	require_once('../../../wp-admin/includes/media.php');

	$media = media_sideload_image($image_url,0);

	$attachments = get_posts(array(

		'post_type' => 'attachment',

		'post_status' => null,

		'post_parent' => 0,

		'orderby' => 'post_date',

		'order' => 'DESC'

	));

	return $attachments[0]->ID;

}









foreach ($new as $pro_data){

    

    

$parent = get_term_by( 'name',	$pro_data->rewardTypeText, 'reward-categories');

$cats=$parent->term_id;

























$tags = get_term_by( 'name',	$pro_data->currencyCode , 'reward-currency');

$tags_t=$tags->term_id;





$post_content	=	$pro_data->descr;







	//$timeStamp = date('Y-m-d H:i:s', strtotime($pro_data->date)); // format needed for WordPress

		$new_post = array(

		'post_title' => $pro_data->brandName,

		//'post_content' => $post_content,

		'post_status' => 'publish',

		//'post_date' => $timeStamp,

		//'post_author' => 55,

		'post_type' => 'rewards',

		//'listing_type' => $cats

		);

	$post_id = wp_insert_post($new_post);

wp_set_object_terms( $post_id, $cats, 'reward-categories' );







$myArray = explode(',',$pro_data->countries);




$parent_area = get_term_by( 'slug',	$myArray[0] , 'reward-country');

$area=$parent_area->term_id;






$parent_area1 = get_term_by( 'slug',	$myArray[1] , 'reward-country');

$area1=$parent_area1->term_id;

$parent_area2 = get_term_by( 'slug',	$myArray[2] , 'reward-country');

$area2=$parent_area2->term_id;


$parent_area3 = get_term_by( 'slug',	$myArray[3] , 'reward-country');

$area3=$parent_area3->term_id;


$parent_area4 = get_term_by( 'slug',	$myArray[4] , 'reward-country');

$area4=$parent_area4->term_id;

$parent_area5 = get_term_by( 'slug',	$myArray[5] , 'reward-country');

$area5=$parent_area5->term_id;

$parent_area6 = get_term_by( 'slug',	$myArray[6] , 'reward-country');

$area6=$parent_area6->term_id;



$parent_area7 = get_term_by( 'slug',	$myArray[7] , 'reward-country');

$area7=$parent_area7->term_id;

$parent_area8 = get_term_by( 'slug',	$myArray[8] , 'reward-country');

$area8=$parent_area8->term_id;

$parent_area9 = get_term_by( 'slug',	$myArray[9] , 'reward-country');

$area9=$parent_area9->term_id;



$parent_area10 = get_term_by( 'slug',	$myArray[10] , 'reward-country');

$area10=$parent_area10->term_id;



$parent_area11 = get_term_by( 'slug',	$myArray[11] , 'reward-country');

$area11=$parent_area11->term_id;

$parent_area12 = get_term_by( 'slug',	$myArray[12] , 'reward-country');

$area12=$parent_area12->term_id;


$parent_area13 = get_term_by( 'slug',	$myArray[13] , 'reward-country');

$area13=$parent_area13->term_id;


$parent_area14 = get_term_by( 'slug',	$myArray[14] , 'reward-country');

$area14=$parent_area14->term_id;

$parent_area15 = get_term_by( 'slug',	$myArray[15] , 'reward-country');

$area15=$parent_area15->term_id;

$parent_area16 = get_term_by( 'slug',	$myArray[16] , 'reward-country');

$area16=$parent_area16->term_id;



$parent_area17 = get_term_by( 'slug',	$myArray[17] , 'reward-country');

$area17=$parent_area17->term_id;

$parent_area18 = get_term_by( 'slug',	$myArray[18] , 'reward-country');

$area18=$parent_area18->term_id;

$parent_area19 = get_term_by( 'slug',	$myArray[19] , 'reward-country');

$area19=$parent_area19->term_id;



$parent_area20 = get_term_by( 'slug',	$myArray[20] , 'reward-country');

$area20=$parent_area20->term_id;





wp_set_object_terms( $post_id, array($area,$area1,$area2,$area3,$area4,$area5,$area6,$area7,$area8,$area9,$area10,$area11,$area12,$area13,$area14,$area15,$area16,$area17,$area18,$area19,$area20), 'reward-country' );





wp_set_object_terms( $post_id, $tags_t, 'reward-currency' );





/*update_post_meta($post_id,'homey_night_price',$pro_data->price);

$loca	=	$pro_data->location . ' Germany';



update_post_meta($post_id,'homey_listing_address',$loca);

update_post_meta($post_id,'homey_show_map',1);

*/



update_post_meta($post_id,'amount_rewards_cpt',$pro_data->amount);

update_post_meta($post_id,'description_rewards_cpt',$pro_data->description);

update_post_meta($post_id,'disclaimer_rewards_cpt',$pro_data->disclaimer);





$res2= set_post_thumbnail( $post_id,uploadMedia($pro_data->brandImage));



print_r($post_id);





if($post_id>0){

$update_status=$wpdb->query( "UPDATE rewards SET status=1 WHERE status=0 and id='".$pro_data->id."' limit 10");





?>

<script type="text/javascript">

setTimeout(function() {

   window.location.reload();

}, 5000); 

</script>

<?php }

}?>

