<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call(MainTypeTableSeeder::class);
		$this->call(UniversityTableSeeder::class);
		$this->call(CollegeTableSeeder::class);
		$this->call(DepartmentTableSeeder::class);
		$this->call(JobStatusTableSeeder::class);
		$this->call(ProgramTableSeeder::class);
		$this->call(CourseTableSeeder::class);
		$this->call(HallTableSeeder::class);
		$this->call(TrainingTableSeeder::class);
		$this->call(LectureTableSeeder::class);
		$this->call(NationalityTableSeeder::class);
		$this->call(TraineeTableSeeder::class);
		$this->call(TrainerTableSeeder::class);
		$this->call(BookingTableSeeder::class);
		$this->call(AttendanceTableSeeder::class);
		$this->call(EvaluationPointTableSeeder::class);
		$this->call(TraineeEvaluationTableSeeder::class);
		$this->call(TrainerEvaluationTableSeeder::class);
    }
}