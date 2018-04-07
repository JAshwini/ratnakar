<?php
include( 'modelfunctions.php' );

function login( $credentials ) {
	if( is_user_exists( id, password ) ) {
		logged_in_user(id);
	}
}

function logged_in_user(id) {
	$session['logged_in_user'] = fetch_user(id);
}

function add_category() {
	/*
	name
	DESC
	slug
	*/
}