<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::post('api/parent_menu/{value}', 'App\Http\Controllers\Api\ParentMenuApiController@index');

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('menu', 'MenuCrudController');
    Route::crud('fee-type', 'FeeTypeCrudController');
    Route::crud('mst-department-type', 'MstDepartmentTypeCrudController');
    Route::crud('about-us', 'AboutUsCrudController');
    Route::crud('gallery', 'GalleryCrudController');
    Route::crud('course', 'CourseCrudController');
    Route::crud('contact-us', 'ContactUsCrudController');
    Route::crud('news-notice', 'NewsNoticeCrudController');
    Route::crud('scholarship', 'ScholarshipCrudController');
    Route::crud('agent-detail', 'AgentDetailCrudController');
    Route::crud('faq', 'FaqCrudController');
    Route::crud('slider', 'SliderCrudController');
    Route::crud('human-resource', 'HumanResourceCrudController');
    Route::crud('event', 'EventCrudController');
    Route::crud('mst-class', 'MstClassCrudController');
}); // this should be the absolute last line of this file



