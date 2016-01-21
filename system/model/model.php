<?php

	require_once "../../modules/model.class.php";

	$dbapp = new Model;
	$dbapp -> getDataBaseConnection("localhost", "test" , "root", "");