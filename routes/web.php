<?php

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
Route::get('/', function () {
    //  return view('welcome');
    return view('index/main');
  });
  Route::get('/index.html', function () {
    //  return view('welcome');
    return view('index/main');
  });
  Route::get('/about.html', function () {
    //  return view('welcome');
    return view('index/about');
  });
  
  Route::get('/gallery.html', function () {
    //  return view('welcome');
    return view('index/gallery');
  });
  
  Route::get('/contact.html', function () {
    //  return view('welcome');
    return view('index/contact');
  });
  
  Route::get('/single.html', function () {
    //  return view('welcome');
    return view('index/single');
  });
  
  Route::get('/single2.html', function () {
    //  return view('welcome');
    return view('index/single2');
  });

  Route::get('/test.html', function () {
    //  return view('welcome');
    return view('index/test');
  });
  Route::get('/register.html', function () {
    //  return view('welcome');
    return view('index/register');
  });
  Route::get('/login.html', function () {
    //  return view('welcome');
    return view('Manager.Add_cours');
  });  




Route::get('/Add_cours.html', function () {
    return view('Manager.Add_cours');
});

Route::get('/open_cours.html', function () {
    return view('Manager.open_cours');
});
Route::get('/Role.html', function () {
    return view('Manager.Role');
});
Route::get('/show_Employees.html', function () {
  return view('Manager.show_Employees');
});
Route::get('/Employees.html', function () {
  return view('Manager.Employees');
});
Route::get('/Evaluation of a training course.html', function () {
    return view('student.Evaluation of a training course');
});
Route::get('/send_mssg.html', function () {
    return view('student.send_mssg');
});
Route::get('/show_marke.html', function () {
    return view('student.show_marke');
});
Route::get('/course_Requirements_form.html', function () {
    return view('coach.course_Requirements_form');
});
Route::get('/Evaluation of student.html', function () {
  return view('coach.Evaluation of student');
});

Route::get('/Student_ presence.html', function () {
  return view('coach.Student_ presence');
});
Route::get('/recive_mssg_student.html', function () {
  return view('coach.recive_mssg_student');
});
Route::get('/insert_Q.html', function () {
  return view('coach.insert_Q');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
