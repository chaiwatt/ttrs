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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'member'], function(){       
    Route::get('','MemberController@Index')->name('member.index'); 
    Route::group(['prefix' => 'company'], function(){       
        Route::get('','MemberCompanyController@Index')->name('member.company.index'); 
    });
});
Route::group(['prefix' => 'dashboard'], function(){       
    Route::get('','DashBoardController@Index')->name('dashboard.index'); 
    Route::group(['prefix' => 'assessment'], function(){       
        Route::get('','DashBoardAssessmentController@Index')->name('dashboard.assessment.index'); 
        Route::get('view','DashBoardAssessmentController@View')->name('dashboard.assessment.view'); 
    });
});

Route::group(['prefix' => 'page'], function(){       
    Route::get('','PageController@Index')->name('page.index'); 
    Route::get('view','PageController@View')->name('page.view'); 
});

Route::group(['prefix' => 'faq'], function(){       
    Route::get('','FaqController@Index')->name('faq.index'); 
});