<?php

use Illuminate\Database\Seeder;

class NationalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Nationality::create([
			'nameA' => 'مصر',
			'nameE' => 'Egypt'
		]);

		App\Nationality::create([
			'nameA' => 'الولايات المتحدة',
			'nameE' => 'United States'
		]);

		App\Nationality::create([
			'nameA' => 'المملكة المتحدة',
			'nameE' => 'United Kingdom'
		]);

		App\Nationality::create([
			'nameA' => 'المانيا',
			'nameE' => 'Germany'
		]);
    }
}