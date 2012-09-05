<?php

//----------------------------------------------
//   AnimeDB
//   Version 1.0
//   Copyright 2012 Alex Boorman
//   Source: www.github.com/animedb
//   License: GNU General Public License
//----------------------------------------------

// WARNING: DON'T CHANGE ANYTHING UNLESS YOU KNOW WHAT YOU'RE DOING!
// Note: Globals Are Set In config.php ----------------------------

// Initilization  - Loading Globals and Starting App
	
	include 'config.php';
	include 'globals.php';
	include 'navigation.php';
	session_start();


// 1. Connection

// db_connect - connects to the database

function db_connect() 
      {
      global $db_host, $db_database, $db_username, $db_password;
      mysql_connect($db_host, $db_username, $db_password) or die(mysql_error());
      mysql_select_db($db_database) or die(mysql_error());
      }

// db_close - closes the database connection

function db_disconnect()
     {
     mysql_close();
     }



// 2. Active Series LCRUD

// active_series_list - creates a table list of all active series

function active_series_list()
		{
		
		// connect to the db
		db_connect();
		
		// get tables
		$result = mysql_query("SELECT * FROM series WHERE active='1' ");
		
		// output html
		echo "<table class='table table-striped'>";
		echo "<tr><th>ID</th><th>Name</th><th>Status</th><th>Genre</th><th>Total Episodes</th><th>Rating</th></tr>";
		while($row = mysql_fetch_array($result)) {
			echo "<tr><td>".$row['id']."</td><td><a href='#'>".$row['name']."</a></td><td>".$row['status']."</td><td>".$row['genre']."</td><td>".$row['totaleps']."</td><td>".$row['rating']."</td></tr>"; 
		}
		echo "</table>";
		
		
		}



?>