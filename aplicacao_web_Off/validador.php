<?php

session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
	header('location: ../login?login=erro2');
} 