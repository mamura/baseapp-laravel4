<?php
class UserSeeder extends DatabaseSeeder {

	public function run() {
		$users = [
			[
				"username"	=> "admin",
				"password"	=> Hash::make("abc,123"),
				"email"		=> "admin@fortaleza.ce.gov.br"
			]
		];

		foreach($users as $user) {
			User::create($user);
		}
	}
}