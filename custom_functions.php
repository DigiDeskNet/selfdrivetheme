<?php 

/*  Bizz Custom Actions

    *** Explore all available theme actions in lib_theme/theme_hooks.php
	*** Explore all available framework actions in lib_frame/frame_hooks.php
	
	*** Working ACTION example:
	    add_action( 'bizz_head_grid', 'bizz_head_grid_test' );
	    function bizz_head_grid_test() {
			echo 'test';
		}
	*** Working FILTER example:
		add_filter('widget_title', 'my_widget_title');
		function my_widget_title($title) {
			return '<h6>' . $title . '</h6>';
		}
	
START REMOVING or ADDING NEW ACTIONS BELOW THIS LINE */

add filter('bizz_car_minage', 'custom_car_ninage')
function custom_car_minage() {
	$minage = array(
		array('name' => 'Minor<18', 'value' => '0'),
		array('name' => 'Major>18', 'value' => '1'),
		array('name' => 'Major>24', 'value' => '2'),
		array('name' => 'Major>30', 'value' => '3'),
		array('name' => 'Major>35', 'value' => '4'),
		);
		return $minage;
	}
}

add_filter('bizz_car_seats', 'custom_car_seats');
function custom_car_seats() {
	$seats = array(
		array('name' => '2', 'value' => '2'),
		array('name' => '3', 'value' => '3'),
		array('name' => '4', 'value' => '4'),
		array('name' => '5', 'value' => '5'),
		array('name' => '6', 'value' => '6'),
		array('name' => '7', 'value' => '7'),
		array('name' => '8', 'value' => '8'),
		array('name' => '9', 'value' => '9'),
		array('name' => '10', 'value' => '10'),
		array('name' => '11', 'value' => '11'),
		array('name' => '12', 'value' => '12'),
		array('name' => '13', 'value' => '13'),
		array('name' => '14', 'value' => '14'),
		array('name' => '15', 'value' => '15'),
		array('name' => '16', 'value' => '16'),
		array('name' => '17', 'value' => '17'),
	);
 
	return $seats;
}

add_filter('bizz_car_doors', 'custom_car_doors');
function custom_car_doors() {
	$doors = array(
		array('name' => '0', 'value' => '0'),
		array('name' => '1', 'value' => '1'),
		array('name' => '2', 'value' => '2'),
		array('name' => '3', 'value' => '3'),
		array('name' => '4', 'value' => '4'),
		array('name' => '5', 'value' => '5'),
		array('name' => '6', 'value' => '6'),
	);
 
	return $doors;
}

function modify_contact_methods($profile_fields) {
	
	$twitterHandle = get_the_author_meta('twitter');
	
	$profile_fields['user_login'] = 'Phone Number';
	
	$profile_fields['nickname'] = 'Licence Number';

	$profile_fields['gender'] = 'Gender';
	$profile_fields['dob'] = 'D.O.B.';
	$profile_fields['description'] = 'Street Number';
	$profile_fields['yim'] = 'Postcode';
	$profile_fields['town'] = 'Town';
	$profile_fields['county'] = 'County';
	$profile_fields['fax'] = 'Fax';
	$profile_fields['nationality'] = 'Nationality';
	$profile_fields['licence_nat'] = 'Licence Nationality';
	$profile_fields['lenght_held'] = 'Length Held';
	$profile_fields['expiry'] = 'Expires';
	$profile_fields['full_licence'] = 'Full Driving Licence?';
	$profile_fields['accident_claim'] = 'Accident Claim?';
	$profile_fields['disqual'] = 'Disqualification?';
	$profile_fields['motor_ins'] = 'Motor Insurance?';
	$profile_fields['med_con'] = 'Medical Condition?';
	$profile_fields['vat'] = 'VAT Receipt?';
	$profile_fields['notes'] = 'Notes';
	$profile_fields['aim'] = 'Secret';
	

	return $profile_fields;

}
add_filter('user_contactmethods', 'modify_contact_methods')
function  user_contactmethods($profile_fields)
{
	$age_range = array(
		array('age' => '<21', 'value' => '<21'),
		array('age' => '<40', 'value' => '<40'),
		array('age' => '>60', 'value' => '>60'),
	);
	return $age_range;
}
