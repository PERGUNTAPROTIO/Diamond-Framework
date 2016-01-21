<?php

	class Model {
		public function getDataBaseConnection($host, $dbname, $user, $password) {
			$get = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
		}
	}