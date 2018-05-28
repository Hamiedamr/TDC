<?php

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {

        /*
        |--------------------------------------------------------------------------
        | Web Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register web routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | contains the "web" middleware group. Now create something great!
        |
        */
// Esraa: i modify home to test it
        Route::get('/', function () {
            return view('home');
        })->name('home');
        Route::get('/trainingm', function () {
            return view('training.trainingMenu');
        })->name('home'); //training menu
       
        Route::get('/traineeu', function () {
            return view('trainee.edit');
        }); //trainee academic degree update

        Route::get('/traineru', function () {
            return view('trainer.trainerAcademicDegreeUpdate');
        }); //trainer academic degree update
        Route::get('/la', function () {
            return view('trainingLecture.trainingLectureAdd');
        }); //add lecture
        Route::get('/ll', function () {
            return view('trainingLecture.trainingLectureList');
        }); //lecture list
        Route::get('/le', function () {
            return view('trainingLecture.trainingLectureEdit');
        }); //lecture edit
        Route::get('/al', function () {
            return view('attendance.attendanceLecture');
        });  // attendance lecture
        Route::get('/mpa', function () {
            return view('mainProgram.mainProgramAdd');
        });//main program add
        Route::get('/mpe', function () {
            return view('mainProgram.mainProgramEdit');
        });//main program  edit
        Route::get('/mpl', function () {
            return view('mainProgram.mainProgramList');
        });//main program  list
        Route::get('/tea', function () {
            return view('trainee.evaluationAdd');
        });  //trainee evaluation add
        Route::get('/tes', function () {
            return view('trainee.evaluationScreen');
        });  //trainee evaluation add
        Route::get('/login', function () {
            return view('account.login');
        })->name('login');  //login
        Route::get('/signup', function () {
            return view('account.signup');
        });  //signup
        Route::get('/an', function () {
            return view('news.addNews');
        })->name('signup');  //add news
        Route::get('/en', function () {
            return view('news.editNews');
        });   //edit news
        Route::get('/ln', function () {
            return view('news.listNews');
        }); //list news
        Route::get('/ap', function () {
            return view('privilage.addPrivilage');
        }); //add privilage
        Route::get('/ep', function () {
            return view('privilage.editPrivilage');
        });  //edit privilage
        Route::get('/lp', function () {
            return view('privilage.listPrivilage');
        });   //list privilage
        Route::get('/teep', function () {
            return view('trainee.profile');
        });//trainee profile
        Route::get('/trp', function () {
            return view('trainer.profile');
        });//trainer profile
        Route::get('/sheet1', function () {
            return view('reports.traineesSheet');
        });//trainees sheet report
        Route::get('/sheet2', function () {
            return view('reports.inoutSheet');
        });//inout sheet report
        Route::get('/sheet3', function () {
            return view('reports.traineeSticker');
        });//trainee sticker report
        Route::get('/sheet4', function () {
            return view('reports.traineeSearch');
        });//trainees search report
// Esraa: i put paths to test pages

        //Route::get('/home','HomeController@index')->name('home');


        Route::resource('university', 'UniversityController');
        Route::get('university/{university}/college', 'UniversityController@college')->name('university.college');
        Route::put('trainer/college_ajax', 'UniversityController@college_ajax')->name('university.college_ajax');

        Route::resource('college', 'CollegeController');
        Route::get('college/{college}/department', 'CollegeController@department')->name('college.department');
        Route::put('trainer/department_ajax', 'CollegeController@department_ajax')->name('college.department_ajax');

        Route::resource('department', 'DepartmentController');

        Route::resource('maintype', 'MainTypeController');

        Route::resource('jobstatus', 'JobStatusController');

        Route::resource('hall', 'HallController');

        Route::resource('program', 'ProgramController', ['except' => ['show']]);
        Route::get('program/{program}/course', 'ProgramController@course')->name('program.course');

        Route::resource('course', 'CourseController');

        Route::resource('training', 'TrainingController');

        Route::resource('lecture', 'LectureController');

        Route::resource('booking', 'BookingController');

        Route::resource('nationality', 'NationalityController');
        Route::post('trainee/updates/{id}', 'TraineeController@updates');
        Route::get('trainee/{id}/academic', 'TraineeController@academic');
        Route::patch('trainee/updates/{id}', 'TraineeController@updates');
        Route::resource('trainee', 'TraineeController');

        Route::resource('trainee/degree', 'TraineeDegreeController', ['names' => 'trainee.degree', 'except' => ['create', 'store', 'destroy']]);
        Route::get('trainer/{id}/profile','TrainerController@profile');
        Route::resource('trainer', 'TrainerController');
        Route::resource('trainer/degree', 'TrainerDegreeController', ['names' => 'trainer.degree', 'except' => ['create', 'store', 'destroy']]);
        
        Route::resource('attendance', 'AttendanceController', ['except' => ['show', 'edit']]);
        Route::get('attendance/{trainee}/{lecture}', 'AttendanceController@show')->name('attendance.show');
        Route::get('attendance/{trainee}/{lecture}/edit', 'AttendanceController@edit')->name('attendance.edit');

        Route::resource('point', 'EvaluationPointController');
        Route::resource('point/trainee', 'TraineeEvaluationController', ['names' => 'point.trainee']);
        Route::resource('point/trainer', 'TrainerEvaluationController', ['names' => 'point.trainer']);
    });

