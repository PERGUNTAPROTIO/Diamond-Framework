<?php

	class Model {
		public function getConectionDataBase($host, $dbname, $user, $password) {
			$get = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
		}
	} 