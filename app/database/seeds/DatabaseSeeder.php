<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        User::create([
            'email'    => 'wergimity@gmail.com',
            'password' => Hash::make('labas123'),
            'first_name' => 'Rytis',
            'last_name' => 'Raslavičius'
        ]);
	}

}
