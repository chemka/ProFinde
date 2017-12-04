<?php


$connaction = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);

if( $connaction == fals )
{
	echo "eror";
	echo mysqli_connect_error();
}
?>