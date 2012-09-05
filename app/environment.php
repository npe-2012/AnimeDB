<?php

//----------------------------------------------
//   AnimeDB
//   Version 1.0
//   Copyright 2012 Alex Boorman
//   License: GNU General Public License
//----------------------------------------------

// WARNING: DON'T CHANGE ANYTHING UNLESS YOU KNOW WHAT YOU'RE DOING!
// Note: Globals Are Set In config.php ----------------------------

// Initilization  - Loading Globals and Starting App
	
	include 'config.php';
	include 'navigation.php';
	session_start();

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




?>