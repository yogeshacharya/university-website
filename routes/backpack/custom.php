<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::get('api/parent_menu/{value}', 'App\Http\Controllers\Api\ParentMenuApiController@index');

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
    Route::crud('human-resource/{human_resource_id}/hr-social-media', 'HrSocialMediaCrudController');
    Route::crud('event', 'EventCrudController');
    Route::crud('mst-class', 'MstClassCrudController');
    Route::crud('header', 'HeaderCrudController');
    Route::crud('footer-address', 'FooterAddressCrudController');
    Route::crud('blog', 'BlogCrudController');
    Route::crud('page', 'PageCrudController');
    Route::crud('saying', 'SayingCrudController');
    Route::crud('mst-social-media', 'MstSocialMediaCrudController');
}); // this should be the absolute last line of this file




Route::group([
    'prefix'     => '',
    'middleware' => ['web'],
    'namespace'  => 'App\Http\Controllers\Frontend',
], function () { 
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/courses', 'CourseController@index');
    Route::get('/courses/{id}', 'CourseController@getCourseDetail');
    Route::get('/about_us', 'AboutUsController@index');
    Route::get('/about_us/introduction', 'AboutUsController@introduction');
    Route::get('/about_us/our_team', 'AboutUsController@ourTeam');
    Route::get('/about_us/department_type', 'AboutUsController@departmentType');
    Route::get('/about_us/class', 'AboutUsController@class');
    Route::get('/about_us/fee_type', 'AboutUsController@feeType');
    Route::get('/about_us/scholarships', 'AboutUsController@scholarship');
    Route::get('/about_us/agent_details', 'AboutUsController@agentDetail');
    Route::get('/gallery', 'GalleryController@index');
    Route::get('/contact_us', 'ContactUsController@index');
    Route::get('/news_notices', 'NewsController@index');
    Route::get('/news_notices/events', 'NewsController@events');
    Route::get('/news_notices/blogs', 'NewsController@blog');

    Route::get('/pages/{slug}', 'HomeController@getData');
    Route::get('/event-detail/{id}', 'NewsController@eventDetail');
    Route::get('/team-detail/{id}', 'AboutUsController@teamDetail');

});