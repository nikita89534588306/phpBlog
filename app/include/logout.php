<?php
	session_start();

	unset($_SESSION['id']);
	unset($_SESSION['user_name']);
	unset($_SESSION['admin']);

	header('Location:' .  'http://localhost');
	