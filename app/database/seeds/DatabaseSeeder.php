<?php

class DatabaseSeeder extends Seeder {

    private $tables = ['users', 'photos', 'likes'];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        //$this->cleanDatabase();

		Eloquent::unguard();

		$this->call('UsersTableSeeder');
	}

    private function cleanDatabase()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach($this->tables as $tableName){
            DB::table($tableName)->truncate();
        }
        //DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
