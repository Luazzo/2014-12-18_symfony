<?php
// model.php
function open_database_connection()
{
	$link = mysqli_connect('127.0.0.1', 'root', 'password');
	mysqli_select_db($link,'blog_db');

	return $link;
}

function close_database_connection($link)
{
	mysqli_close($link);
}

function get_all_posts()
{
	$link = open_database_connection();

	$result = mysqli_query($link,'SELECT id, title FROM post');
	$posts = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$posts[] = $row;
	}
	close_database_connection($link);

	return $posts;
}

function get_post_by_id($id)
{
	$link = open_database_connection();

	$id = intval($id);
	$query = 'SELECT date, title, body FROM post WHERE id = '.$id;
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_assoc($result);

	close_database_connection($link);

	return $row;
}