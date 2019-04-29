<?php

session_start();

require_once( 'db-connection.php' );

if( isset( $_POST['submit'] ) ) {

	$username =$_POST['username'];
	$password =$_POST['password'];
	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result = mysqli_query($connection, $query);

	if(mysqli_num_rows($result) > 0){
		header( 'Location: Info/info.php' )
	}
}

header( 'Location: HomePage/home.php' )

?>