<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () { return redirect('admin/dashboard/analytical'); });
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'MasterController@index');
// Route::get('/user', 'MemberController@index');


/* Dashboard */
Route::get('admin/dashboard', function () { return redirect('dashboard/analytical'); });
Route::get('admin/dashboard/analytical', 'DashboardController@analytical')->name('dashboard.analytical');
Route::get('dashboard/demographic', 'DashboardController@demographic')->name('dashboard.demographic');
Route::get('dashboard/hospital', 'DashboardController@hospital')->name('dashboard.hospital');
Route::get('dashboard/university', 'DashboardController@university')->name('dashboard.university');
Route::get('dashboard/real-estate', 'DashboardController@realEstate')->name('dashboard.real-estate');
Route::get('dashboard/project', 'DashboardController@project')->name('dashboard.project');
Route::get('dashboard/bitcoin', 'DashboardController@bitcoin')->name('dashboard.bitcoin');
Route::get('dashboard/ecommerce', 'DashboardController@ecommerce')->name('dashboard.ecommerce');
Route::get('dashboard/iot', 'DashboardController@iot')->name('dashboard.iot');

/* App */
Route::get('app', function () { return redirect('app/inbox'); });
Route::get('app/inbox', 'AppController@inbox')->name('app.inbox');
Route::get('app/chat', 'AppController@chat')->name('app.chat');
Route::get('app/calendar', 'AppController@calendar')->name('app.calendar');
Route::get('app/contact-list', 'AppController@contactList')->name('app.contact-list');
Route::get('app/contact-card', 'AppController@contactCard')->name('app.contact-card');
Route::get('app/taskboard', 'AppController@taskboard')->name('app.taskboard');

/* Event */
Route::get('admin/event', function () { return redirect('event/dashboard'); });
Route::get('admin/event/new-event', 'EventController@newevent')->name('event.new-event');
Route::get('admin/event/list-event', 'EventController@list')->name('event.list');
Route::get('admin/event/category-event', 'EventController@category')->name('event.category');
Route::get('admin/event/detail', 'EventController@detail')->name('event.detailevent');
Route::get('admin/event/rewardlist', 'EventController@reward')->name('event.rewardlist');

Route::post('admin/event/new-data', 'EventController@store')->name('event.store');

Route::delete('admin/event/{event_id}/delete', 'EventController@delete')->name('event.delete');


/* Jobs */
Route::get('admin/jobs', function () { return redirect('jobs/dashboard'); });
Route::get('admin/jobs/dashboard', 'JobController@dashboard')->name('jobs.dashboard');
Route::get('admin/jobs/new-job', 'JobController@newjobs')->name('jobs.new-job');
Route::get('admin/jobs/list', 'JobController@list')->name('jobs.list');
Route::get('admin/jobs/category', 'JobController@category')->name('jobs.category');
Route::get('admin/jobs/detail', 'JobController@detail')->name('jobs.detailjob');
Route::get('admin/jobs/listmember', 'JobController@listmember')->name('jobs.listmember');

/* User */
Route::get('admin/users', function () { return redirect('users/dashboard'); });
Route::get('admin/users/dashboard', 'UsersController@dashboard')->name('users.dashboard');
Route::get('admin/users/new-user', 'UsersController@newuser')->name('users.new-user');
Route::get('admin/users/user-list', 'UsersController@userlist')->name('users.user-list');
Route::get('admin/users/member-list', 'UsersController@memberlist')->name('users.member-list');
Route::get('admin/users/client-list', 'UsersController@clientlist')->name('users.client-list');
Route::get('admin/users/partner-list', 'UsersController@partnerlist')->name('users.partner-list');
Route::get('admin/users/expert-list', 'UsersController@expertlist')->name('users.expert-list');
Route::get('admin/users/role', 'UsersController@role')->name('users.role');
Route::get('admin/users/detailmember', 'UsersController@detailmember')->name('users.detailmember');


/* Course */
Route::get('admin/courses', function () { return redirect('courses/dashboard'); });
Route::get('admin/courses/new-course', 'CourseController@newcourse')->name('courses.new-course');
Route::get('admin/courses/list-course', 'CourseController@list')->name('courses.list');
Route::get('admin/courses/category-course', 'CourseController@category')->name('courses.category');
Route::get('admin/courses/detail', 'CourseController@detail')->name('courses.detailcourse');

/* File Manager */
Route::get('file-manager', function () { return redirect('file-manager/dashboard'); });
Route::get('file-manager/dashboard', 'FileManagerController@dashboard')->name('file-manager.dashboard');
Route::get('file-manager/documents', 'FileManagerController@documents')->name('file-manager.documents');
Route::get('file-manager/media', 'FileManagerController@media')->name('file-manager.media');
Route::get('file-manager/image', 'FileManagerController@image')->name('file-manager.image');

/** Report */
Route::get('report/transaction', 'ReportController@transaction')->name('report.transaction');

/** Setting */
Route::get('setting/banner-login-phone', 'SettingController@bannerloginphone')->name('setting.bannerloginphone');
Route::get('setting/banner-home-phone', 'SettingController@bannerhomephone')->name('setting.bannerhomephone');
Route::get('setting/banner-home-web', 'SettingController@bannerhomeweb')->name('setting.bannerhomeweb');

/* Blog */
Route::get('blog', function () { return redirect('blog/dashboard'); });
Route::get('blog/dashboard', 'BlogController@dashboard')->name('blog.dashboard');
Route::get('blog/new-post', 'BlogController@newPost')->name('blog.new-post');
Route::get('blog/list', 'BlogController@list')->name('blog.list');
Route::get('blog/detail', 'BlogController@detail')->name('blog.detail');
Route::get('blog/category', 'BlogController@category')->name('blog.category');

/* UI Elements */
Route::get('ui-elements', function () { return redirect('ui-elements/typography'); });
Route::get('ui-elements/typography', 'UiElementsController@typography')->name('ui-elements.typography');
Route::get('ui-elements/tabs', 'UiElementsController@tabs')->name('ui-elements.tabs');
Route::get('ui-elements/buttons', 'UiElementsController@buttons')->name('ui-elements.buttons');
Route::get('ui-elements/bootstrap', 'UiElementsController@bootstrap')->name('ui-elements.bootstrap');
Route::get('ui-elements/icons', 'UiElementsController@icons')->name('ui-elements.icons');
Route::get('ui-elements/notifications', 'UiElementsController@notifications')->name('ui-elements.notifications');
Route::get('ui-elements/colors', 'UiElementsController@colors')->name('ui-elements.colors');
Route::get('ui-elements/dialogs', 'UiElementsController@dialogs')->name('ui-elements.dialogs');
Route::get('ui-elements/list-group', 'UiElementsController@listGroup')->name('ui-elements.list-group');
Route::get('ui-elements/media-object', 'UiElementsController@mediaObject')->name('ui-elements.media-object');
Route::get('ui-elements/modals', 'UiElementsController@modals')->name('ui-elements.modals');
Route::get('ui-elements/nestable', 'UiElementsController@nestable')->name('ui-elements.nestable');
Route::get('ui-elements/progress-bars', 'UiElementsController@progressBars')->name('ui-elements.progress-bars');
Route::get('ui-elements/range-sliders', 'UiElementsController@rangeSliders')->name('ui-elements.range-sliders');
Route::get('ui-elements/treeview', 'UiElementsController@treeview')->name('ui-elements.treeview');

/* Widgets */
Route::get('widgets', function () { return redirect('widgets/statistics'); });
Route::get('widgets/statistics', 'WidgetsController@statistics')->name('widgets.statistics');
Route::get('widgets/data', 'WidgetsController@data')->name('widgets.data');
Route::get('widgets/chart', 'WidgetsController@chart')->name('widgets.chart');
Route::get('widgets/weather', 'WidgetsController@weather')->name('widgets.weather');
Route::get('widgets/social', 'WidgetsController@social')->name('widgets.social');
Route::get('widgets/blog', 'WidgetsController@blog')->name('widgets.blog');
Route::get('widgets/ecommerce', 'WidgetsController@ecommerce')->name('widgets.ecommerce');

/* Authentication */
Route::get('authentication', function () { return redirect('authentication/login'); });
Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('authentication.lockscreen');
Route::get('authentication/forgot-password', 'AuthenticationController@forgotPassword')->name('authentication.forgot-password');
Route::get('authentication/page404', 'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/page403', 'AuthenticationController@page403')->name('authentication.page403');
Route::get('authentication/page500', 'AuthenticationController@page500')->name('authentication.page500');
Route::get('authentication/page503', 'AuthenticationController@page503')->name('authentication.page503');

/* Pages */
Route::get('pages', function () { return redirect('pages/blank-page'); });
Route::get('pages/blank-page', 'PagesController@blankPage')->name('pages.blank-page');
Route::get('pages/profile1', 'PagesController@profile1')->name('pages.profile1');
Route::get('pages/profile2', 'PagesController@profile2')->name('pages.profile2');
Route::get('pages/image-gallery1', 'PagesController@imageGallery1')->name('pages.image-gallery1');
Route::get('pages/image-gallery2', 'PagesController@imageGallery2')->name('pages.image-gallery2');
Route::get('pages/timeline', 'PagesController@timeline')->name('pages.timeline');
Route::get('pages/horizontal-timeline', 'PagesController@horizontalTimeline')->name('pages.horizontal-timeline');
Route::get('pages/pricing', 'PagesController@pricing')->name('pages.pricing');
Route::get('pages/invoices1', 'PagesController@invoices1')->name('pages.invoices1');
Route::get('pages/invoices2', 'PagesController@invoices2')->name('pages.invoices2');
Route::get('pages/search-results', 'PagesController@searchResults')->name('pages.search-results');
Route::get('pages/helper-classes', 'PagesController@helperClasses')->name('pages.helper-classes');
Route::get('pages/teams-board', 'PagesController@teamsBoard')->name('pages.teams-board');
Route::get('pages/project-list', 'PagesController@projectList')->name('pages.project-list');
Route::get('pages/maintenance', 'PagesController@maintenance')->name('pages.maintenance');
Route::get('pages/testimonials', 'PagesController@testimonials')->name('pages.testimonials');
Route::get('pages/faq', 'PagesController@faq')->name('pages.faq');

/* Forms */
Route::get('forms', function () { return redirect('forms/advance-elements'); });
Route::get('forms/validation', 'FormsController@validation')->name('forms.validation');
Route::get('forms/advance-elements', 'FormsController@advanceElements')->name('forms.advance-elements');
Route::get('forms/basic-elements', 'FormsController@basicElements')->name('forms.basic-elements');
Route::get('forms/wizard', 'FormsController@wizard')->name('forms.wizard');
Route::get('forms/dragdrop', 'FormsController@dragdrop')->name('forms.dragdrop');
Route::get('forms/cropping', 'FormsController@cropping')->name('forms.cropping');
Route::get('forms/summernote', 'FormsController@summernote')->name('forms.summernote');
Route::get('forms/editors', 'FormsController@editors')->name('forms.editors');
Route::get('forms/markdown', 'FormsController@markdown')->name('forms.markdown');

/* Forms */
Route::get('table', function () { return redirect('table/basic'); });
Route::get('table/basic', 'TableController@basic')->name('table.basic');
Route::get('table/normal', 'TableController@normal')->name('table.normal');
Route::get('table/jquery-datatable', 'TableController@jqueryDatatable')->name('table.jquery-datatable');
Route::get('table/editable', 'TableController@editable')->name('table.editable');
Route::get('table/color', 'TableController@color')->name('table.color');
Route::get('table/filter', 'TableController@filter')->name('table.filter');
Route::get('table/dragger', 'TableController@dragger')->name('table.dragger');

/* Charts */
Route::get('charts', function () { return redirect('charts/morris'); });
Route::get('charts/morris', 'ChartsController@morris')->name('charts.morris');
Route::get('charts/flot', 'ChartsController@flot')->name('charts.flot');
Route::get('charts/chartjs', 'ChartsController@chartjs')->name('charts.chartjs');
Route::get('charts/jquery-knob', 'ChartsController@jqueryKnob')->name('charts.jquery-knob');
Route::get('charts/sparkline', 'ChartsController@sparkline')->name('charts.sparkline');
Route::get('charts/peity', 'ChartsController@peity')->name('charts.peity');
Route::get('charts/c3', 'ChartsController@c3')->name('charts.c3');
Route::get('charts/gauges', 'ChartsController@gauges')->name('charts.gauges');
Route::get('charts/echart', 'ChartsController@echart')->name('charts.echart');

/* Maps */
Route::get('map', function () { return redirect('map/google'); });
Route::get('map/google', 'MapController@google')->name('map.google');
Route::get('map/yandex', 'MapController@yandex')->name('map.yandex');
Route::get('map/jvector', 'MapController@jvector')->name('map.jvector');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
