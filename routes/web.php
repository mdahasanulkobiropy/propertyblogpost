<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgentTextController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BlogPostSubscribeController;
use App\Http\Controllers\BlogPostTextController;
use App\Http\Controllers\BlogTagController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\ChooseItemController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactOfficeLocationController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\IndexAllTextController;
use App\Http\Controllers\IndexSearchController;
use App\Http\Controllers\MassageFromUserToAdminController;
use App\Http\Controllers\MassageTopicForUserController;
use App\Http\Controllers\PropertyBathroomController;
use App\Http\Controllers\PropertyBedroomController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyCountroomController;
use App\Http\Controllers\PropertyFrontendTextController;
use App\Http\Controllers\PropertyParkingspaceController;
use App\Http\Controllers\SingleAgentCommentController;
use App\Http\Controllers\SingleAgentCommentReplyController;
use App\Http\Controllers\SingleAgentMassageFromUserController;
use App\Http\Controllers\SinglePostCommentController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Models\MassageFromUserToAdmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [FrontendController::class, 'index'])->name('index.frontend');


//////////////////////////////////
    //property part frontend
/////////////////////////////////
Route::get('/properties', [FrontendController::class, 'properties'])->name('properties.frontend');
// Route::get('/property/submit', [FrontendController::class, 'submitproperty'])->name('submitproperty.frontend');
Route::get('/property/single/{id}', [FrontendController::class, 'singleproperty'])->name('singleproperty.frontend');
////////////////////////
//agent part frontend
/////////////////////////
Route::get('/agents', [FrontendController::class, 'agents'])->name('agents.frontend');
Route::get('/agent/single/{id}', [FrontendController::class, 'singleagent'])->name('singleagent.frontend');
/////////////////////////
//blog part frontend
//////////////////////////////
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog.frontend');
Route::get('/blog/single/{id}', [FrontendController::class, 'singleblog'])->name('singleblog.frontend');
Route::get('/blog/search/tag/{id}', [FrontendController::class, 'blogsearchtag'])->name('blogsearchtag.frontend');
Route::get('/blog/search/category/{id}', [FrontendController::class, 'blogsearchcategory'])->name('blogsearchcategory.frontend');
///////////////////////////
//contact part frontend
//////////////////////////
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact.frontend');


Route::middleware(['auth:sanctum','role:user', config('jetstream.auth_session'),'verified' ])->group(function (){
    ///////////////////////////////////////////
     //user dashboard Area//
    ///////////////////////////////////////////
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashbord');


    ///////////////////////////////////////////
        //slingle Agent comment Area//
    ///////////////////////////////////////////
    Route::get('/user/dashboard/sinlgeagentcomment', [SingleAgentCommentController::class, 'index'])->name('user.sinlgeagentcomment');
    Route::post('/user/dashboard/sinlgeagentcomment/add', [SingleAgentCommentController::class, 'add'])->name('user.sinlgeagentcomment.add');

    ////////////////////////////////////////////////////
        //slingle Agent massage from user Area//
    ////////////////////////////////////////////////////
    Route::post('/user/dashboard/sinlge/agent/massage/add', [SingleAgentMassageFromUserController::class, 'add'])->name('user.sinlgeagentmassage.add');

    ///////////////////////////////////////////////
        //slingle Agent comment Reply Area//
    //////////////////////////////////////////////
    Route::get('/user/dashboard/sinlgeagentcommentreply', [SingleAgentCommentReplyController::class, 'index'])->name('user.sinlgeagentcommentreply');
    Route::post('/user/dashboard/sinlgeagentcommentreply/add', [SingleAgentCommentReplyController::class, 'add'])->name('user.sinlgeagentcommentreply.add');

    ////////////////////////////////////////////////
            //Blog Post Subscribe//
    ///////////////////////////////////////////////
    Route::post('/user/dashboard/subscribe/add', [BlogPostSubscribeController::class, 'subscribe'])->name('user.blogpost.subscribe');

    ///////////////////////////////////////////////
         //single blog post comment Area//
    ///////////////////////////////////////////////
    Route::get('/singleblog/comment', [SinglePostCommentController::class, 'index'])->name('user.singleblogcomment');
    Route::post('/singleblog/comment/add', [SinglePostCommentController::class, 'add'])->name('singleblogcomment.add');
    ///////////////////////////////////////////////
         //Become a Agent Area//
    ///////////////////////////////////////////////

    Route::get('user/agent/apply', [AgentController::class, 'userbecomeagent'])->name('user.becomeagent');
    Route::post('user/agent/apply/add', [AgentController::class, 'userbecomeagentapply'])->name('user.becomeagentapply');

    ////////////////////////////////
    ///// user massage to Agent
    //////////////////////////

    Route::get('/user/massage/agent', [SingleAgentMassageFromUserController::class, 'mymassage'])->name('user.mymassage');


    ////////////////////////////////
    ///// user massage to Admin
    ////////////////////////////////

    Route::post('user/massage/admin', [MassageFromUserToAdminController::class, 'add'])->name('user.massage.admin');



});

Route::middleware(['auth:sanctum','role:agent', config('jetstream.auth_session'),'verified' ])->group(function (){
    ///////////////////////////////////////////
        //agent dashboard Area//
    ///////////////////////////////////////////
    Route::get('/agent/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');

    ////////////////////////////////////////////
            ///////massage show //////////
    ////////////////////////////////////////////
    Route::get('/agent/dashboard/massage', [AgentController::class, 'massageforagentfromuser'])->name('agent.massage');

    ///////////////////////////////////////////
    ////// agent contact with user ///////
    ///////////////////////////////////////////

    Route::get('agent/contact/user/{id}', [AgentController::class, 'agentcontactwithuser'])->name('agent.agentcontactwithuser');

    ///////////////////////////////////////////
        ////// agent  property  method ///////
    ///////////////////////////////////////////

    Route::get('/agent/property', [PropertyController::class, 'propertyfromagent'])->name('agent.property');
    Route::post('/agent/property/add', [PropertyController::class, 'propertyfromagentadd'])->name('agent.property.add');
    Route::get('/agent/property/edit/{id}', [PropertyController::class, 'propertyfromagentedit'])->name('agent.property.edit');
    Route::post('/agent/property/update/{id}', [PropertyController::class, 'propertyfromagentupdate'])->name('agent.property.update');
    Route::post('/agent/property/delete/{id}', [PropertyController::class, 'propertyfromagentdelete'])->name('agent.property.delete');
    Route::get('/agent/property/details/{id}', [PropertyController::class, 'propertyfromagentdetails'])->name('agent.property.details');



});

Route::middleware(['auth:sanctum','role:admin', config('jetstream.auth_session'),'verified' ])->group(function (){

    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    //////////////////////////////////////////////
    //featured or property type area//
    ///////////////////////////////////////////////
    Route::get('/admin/dashboard/featured', [FeaturedController::class, 'index'])->name('admin.featured');
    Route::post('/admin/dashboard/featured/add', [FeaturedController::class, 'add'])->name('admin.featured.add');
    Route::get('/admin/dashboard/featured/edit/{id}', [FeaturedController::class, 'edit'])->name('admin.featured.edit');
    Route::get('/admin/dashboard/featured/delete/{id}', [FeaturedController::class, 'delete'])->name('admin.featured.delete');
    Route::post('/admin/dashboard/featured/update/{id}', [FeaturedController::class, 'update'])->name('admin.featured.update');

    /////////////////////////////////////////
        //property status area//
    ////////////////////////////////////////

    Route::get('/admin/dashboard/status', [StatusController::class, 'index'])->name('admin.status');
    Route::post('/admin/dashboard/status/add', [StatusController::class, 'add'])->name('admin.status.add');
    Route::get('/admin/dashboard/status/edit/{id}', [StatusController::class, 'edit'])->name('admin.status.edit');
    Route::get('/admin/dashboard/status/delete/{id}', [StatusController::class, 'delete'])->name('admin.status.delete');
    Route::post('/admin/dashboard/status/update/{id}', [StatusController::class, 'update'])->name('admin.status.update');

    //property Amenity area//
    Route::get('/admin/dashboard/amenity', [AmenityController::class, 'index'])->name('admin.amenity');
    Route::post('/admin/dashboard/amenity/add', [AmenityController::class, 'add'])->name('admin.amenity.add');
    Route::get('/admin/dashboard/amenity/edit/{id}', [AmenityController::class, 'edit'])->name('admin.amenity.edit');
    Route::get('/admin/dashboard/amenity/delete/{id}', [AmenityController::class, 'delete'])->name('admin.amenity.delete');
    Route::post('/admin/dashboard/amenity/update/{id}', [AmenityController::class, 'update'])->name('admin.amenity.update');

    //property Explore  area//
    Route::get('/admin/dashboard/explore', [ExploreController::class, 'index'])->name('admin.explore');
    Route::post('/admin/dashboard/explore/add', [ExploreController::class, 'add'])->name('admin.explore.add');
    Route::get('/admin/dashboard/explore/edit/{id}', [ExploreController::class, 'edit'])->name('admin.explore.edit');
    Route::get('/admin/dashboard/explore/delete/{id}', [ExploreController::class, 'delete'])->name('admin.explore.delete');
    Route::post('/admin/dashboard/explore/update/{id}', [ExploreController::class, 'update'])->name('admin.explore.update');
    ////////////////////////////////////////////////////
    /////////////////// agent  area/////////////
    ///////////////////////////////////////////////////
    Route::get('/admin/dashboard/agent', [AgentController::class, 'index'])->name('admin.agent');
    Route::post('/admin/dashboard/agent/add', [AgentController::class, 'add'])->name('admin.agent.add');
    Route::get('/admin/dashboard/agent/edit/{id}', [AgentController::class, 'edit'])->name('admin.agent.edit');
    Route::get('/admin/dashboard/agent/delete/{id}', [AgentController::class, 'delete'])->name('admin.agent.delete');
    Route::post('/admin/dashboard/agent/update/{id}', [AgentController::class, 'update'])->name('admin.agent.update');
    Route::get('/admin/dashboard/agent/details/{id}', [AgentController::class, 'details'])->name('admin.agent.details');
    //////////////////////////
    //property bedroom  area//
    ///////////////////////////
    Route::get('/admin/dashboard/bedroom', [PropertyBedroomController::class, 'index'])->name('admin.bedroom');
    Route::post('/admin/dashboard/bedroom/add', [PropertyBedroomController::class, 'add'])->name('admin.bedroom.add');
    Route::get('/admin/dashboard/bedroom/edit/{id}', [PropertyBedroomController::class, 'edit'])->name('admin.bedroom.edit');
    Route::get('/admin/dashboard/bedroom/delete/{id}', [PropertyBedroomController::class, 'delete'])->name('admin.bedroom.delete');
    Route::post('/admin/dashboard/bedroom/update/{id}', [PropertyBedroomController::class, 'update'])->name('admin.bedroom.update');
    //property bedroom  area//
    Route::get('/admin/dashboard/bathroom', [PropertyBathroomController::class, 'index'])->name('admin.bathroom');
    Route::post('/admin/dashboard/bathroom/add', [PropertyBathroomController::class, 'add'])->name('admin.bathroom.add');
    Route::get('/admin/dashboard/bathroom/edit/{id}', [PropertyBathroomController::class, 'edit'])->name('admin.bathroom.edit');
    Route::get('/admin/dashboard/bathroom/delete/{id}', [PropertyBathroomController::class, 'delete'])->name('admin.bathroom.delete');
    Route::post('/admin/dashboard/bathroom/update/{id}', [PropertyBathroomController::class, 'update'])->name('admin.bathroom.update');
    //property  countroom  area//
    Route::get('/admin/dashboard/countroom', [PropertyCountroomController::class, 'index'])->name('admin.countroom');
    Route::post('/admin/dashboard/countroom/add', [PropertyCountroomController::class, 'add'])->name('admin.countroom.add');
    Route::get('/admin/dashboard/countroom/edit/{id}', [PropertyCountroomController::class, 'edit'])->name('admin.countroom.edit');
    Route::get('/admin/dashboard/countroom/delete/{id}', [PropertyCountroomController::class, 'delete'])->name('admin.countroom.delete');
    Route::post('/admin/dashboard/countroom/update/{id}', [PropertyCountroomController::class, 'update'])->name('admin.countroom.update');

    //property  parkingspace  area//
    Route::get('/admin/dashboard/parkingspace', [PropertyParkingspaceController::class, 'index'])->name('admin.parkingspace');
    Route::post('/admin/dashboard/parkingspace/add', [PropertyParkingspaceController::class, 'add'])->name('admin.parkingspace.add');
    Route::get('/admin/dashboard/parkingspace/edit/{id}', [PropertyParkingspaceController::class, 'edit'])->name('admin.parkingspace.edit');
    Route::get('/admin/dashboard/parkingspace/delete/{id}', [PropertyParkingspaceController::class, 'delete'])->name('admin.parkingspace.delete');
    Route::post('/admin/dashboard/parkingspace/update/{id}', [PropertyParkingspaceController::class, 'update'])->name('admin.parkingspace.update');

    //only Poterty with all area//
    Route::get('/admin/dashboard/poterty', [PropertyController::class, 'index'])->name('admin.poterty');
    Route::post('/admin/dashboard/poterty/add', [PropertyController::class, 'add'])->name('admin.poterty.add');
    Route::get('/admin/dashboard/poterty/edit/{id}', [PropertyController::class, 'edit'])->name('admin.poterty.edit');
    Route::get('/admin/dashboard/poterty/delete/{id}', [PropertyController::class, 'delete'])->name('admin.poterty.delete');
    Route::post('/admin/dashboard/poterty/update/{id}', [PropertyController::class, 'update'])->name('admin.poterty.update');
    Route::get('/admin/dashboard/poterty/details/{id}', [PropertyController::class, 'details'])->name('admin.poterty.details');
    Route::get('/admin/dashboard/poterty/approve', [PropertyController::class, 'approve'])->name('admin.property.approve');
    Route::get('/admin/dashboard/poterty/approvesure/{id}', [PropertyController::class, 'approvesure'])->name('admin.property.approvesure');
    Route::get('/admin/dashboard/poterty/approvedetails/{id}', [PropertyController::class, 'approvedetails'])->name('admin.property.approvedetails');

    //Frontend Index choose area//
    Route::get('/admin/dashboard/choose', [ChooseController::class, 'index'])->name('admin.choose');
    Route::get('/admin/dashboard/choose/edit/{id}', [ChooseController::class, 'edit'])->name('admin.choose.edit');
    Route::post('/admin/dashboard/choose/update/{id}', [ChooseController::class, 'update'])->name('admin.choose.update');

    //Frontend blog post text area//
    Route::get('/admin/dashboard/blog/post/text', [BlogPostTextController::class, 'index'])->name('admin.blogpost.text');
    Route::get('/admin/dashboard/blog/post/text/edit/{id}', [BlogPostTextController::class, 'edit'])->name('admin.blogpost.text.edit');
    Route::post('/admin/dashboard/blog/post/text/update/{id}', [BlogPostTextController::class, 'update'])->name('admin.blogpost.text.update');

    //Frontend Property Text area//
    Route::get('/admin/dashboard/property/text', [PropertyFrontendTextController::class, 'index'])->name('admin.property.text');
    Route::get('/admin/dashboard/property/text/edit/{id}', [PropertyFrontendTextController::class, 'edit'])->name('admin.property.text.edit');
    Route::post('/admin/dashboard/property/text/update/{id}', [PropertyFrontendTextController::class, 'update'])->name('admin.property.text.update');

     //Frontend Index chooseitem Area//
     Route::get('/admin/dashboard/chooseitem', [ChooseItemController::class, 'index'])->name('admin.chooseitem');
     Route::post('/admin/dashboard/chooseitem/add', [ChooseItemController::class, 'add'])->name('admin.chooseitem.add');
     Route::get('/admin/dashboard/chooseitem/edit/{id}', [ChooseItemController::class, 'edit'])->name('admin.chooseitem.edit');
     Route::get('/admin/dashboard/chooseitem/delete/{id}', [ChooseItemController::class, 'delete'])->name('admin.chooseitem.delete');
     Route::post('/admin/dashboard/chooseitem/update/{id}', [ChooseItemController::class, 'update'])->name('admin.chooseitem.update');

     //Frontend index all text Area//
     Route::get('/admin/dashboard/indexalltext', [IndexAllTextController::class, 'index'])->name('admin.indexalltext');
     Route::post('/admin/dashboard/indexalltext/add', [IndexAllTextController::class, 'add'])->name('admin.indexalltext.add');
     Route::get('/admin/dashboard/indexalltext/edit/{id}', [IndexAllTextController::class, 'edit'])->name('admin.indexalltext.edit');
     Route::get('/admin/dashboard/indexalltext/delete/{id}', [IndexAllTextController::class, 'delete'])->name('admin.indexalltext.delete');
     Route::post('/admin/dashboard/indexalltext/update/{id}', [IndexAllTextController::class, 'update'])->name('admin.indexalltext.update');

     //Frontend  index search Area//
     Route::get('/admin/dashboard/indexsearch', [IndexSearchController::class, 'index'])->name('admin.indexsearch');
     Route::get('/admin/dashboard/indexsearch/edit/{id}', [IndexSearchController::class, 'edit'])->name('admin.indexsearch.edit');
     Route::post('/admin/dashboard/indexsearch/update/{id}', [IndexSearchController::class, 'update'])->name('admin.indexsearch.update');

     //agenttext Area//
     Route::get('/admin/dashboard/agenttext', [AgentTextController::class, 'index'])->name('admin.agenttext');
     Route::get('/admin/dashboard/agenttext/edit/{id}', [AgentTextController::class, 'edit'])->name('admin.agenttext.edit');
     Route::post('/admin/dashboard/agenttext/update/{id}', [AgentTextController::class, 'update'])->name('admin.agenttext.update');

      ///////////////////////////////
         //blogcategory Area//
      ///////////////////////////
      Route::get('/admin/dashboard/blogcategory', [BlogCategoryController::class, 'index'])->name('admin.blogcategory');
      Route::post('/admin/dashboard/blogcategory/add', [BlogCategoryController::class, 'add'])->name('admin.blogcategory.add');
      Route::get('/admin/dashboard/blogcategory/edit/{id}', [BlogCategoryController::class, 'edit'])->name('admin.blogcategory.edit');
      Route::get('/admin/dashboard/blogcategory/delete/{id}', [BlogCategoryController::class, 'delete'])->name('admin.blogcategory.delete');
      Route::post('/admin/dashboard/blogcategory/update/{id}', [BlogCategoryController::class, 'update'])->name('admin.blogcategory.update');

      ///////////////////////////////
      //blogtag Area//
      ///////////////////////////////
      Route::get('/admin/dashboard/blogtag', [BlogTagController::class, 'index'])->name('admin.blogtag');
      Route::post('/admin/dashboard/blogtag/add', [BlogTagController::class, 'add'])->name('admin.blogtag.add');
      Route::get('/admin/dashboard/blogtag/edit/{id}', [BlogTagController::class, 'edit'])->name('admin.blogtag.edit');
      Route::get('/admin/dashboard/blogtag/delete/{id}', [BlogTagController::class, 'delete'])->name('admin.blogtag.delete');
      Route::post('/admin/dashboard/blogtag/update/{id}', [BlogTagController::class, 'update'])->name('admin.blogtag.update');
    ////////////////////////////
      //blogpost Area//
    ////////////////////////////
      Route::get('/admin/dashboard/blogpost', [BlogPostController::class, 'index'])->name('admin.blogpost');
      Route::post('/admin/dashboard/blogpost/add', [BlogPostController::class, 'add'])->name('admin.blogpost.add');
      Route::get('/admin/dashboard/blogpost/edit/{id}', [BlogPostController::class, 'edit'])->name('admin.blogpost.edit');
      Route::get('/admin/dashboard/blogpost/delete/{id}', [BlogPostController::class, 'delete'])->name('admin.blogpost.delete');
      Route::post('/admin/dashboard/blogpost/update/{id}', [BlogPostController::class, 'update'])->name('admin.blogpost.update');
      Route::get('/admin/dashboard/blogpost/details/{id}', [BlogPostController::class, 'details'])->name('admin.blogpost.details');

    /////////////////////////////////////
        //slingle Agent comment Area//
    ////////////////////////////////////
      Route::get('/admin/dashboard/sinlgeagentcomment', [SingleAgentCommentController::class, 'index'])->name('admin.sinlgeadmin.agent.add
      comment');
      Route::post('/admin/dashboard/sinlgeagentcomment/add', [SingleAgentCommentController::class, 'add'])->name('admin.sinlgeagentcomment.add');
      Route::get('/admin/dashboard/sinlgeagentcomment/edit/{id}', [SingleAgentCommentController::class, 'edit'])->name('admin.sinlgeagentcomment.edit');
      Route::get('/admin/dashboard/sinlgeagentcomment/delete/{id}', [SingleAgentCommentController::class, 'delete'])->name('admin.sinlgeagentcomment.delete');
      Route::post('/admin/dashboard/sinlgeagentcomment/update/{id}', [SingleAgentCommentController::class, 'update'])->name('admin.sinlgeagentcomment.update');

      ///////////////////////////////////////
      ///////confirm agent status///////////
      ///////////////////////////////////////

      Route::get('admin/confirm/agent/request', [AgentController::class, 'confirmagentstatus'])->name('admin.confirmagentstatus');
      Route::get('admin/confirm/agent/status/approve/details/{id}', [AgentController::class, 'confirmagentstatusdetails'])->name('admin.confirmagentstatusdetails');
      Route::get('admin/confirm/agent/request/approve/{id}', [AgentController::class, 'confirmagentstatusapprove'])->name('admin.confirmagentstatusapprove');

    //////////////////////////////////////////////
      ///allmassage
    ////////////////////////
    Route::get('/admin/massage/', [AgentController::class, 'allmassage'])->name('admin.allmassage');


    //////////////////////////////////////
    ////contact page
    ///////////////////////////////////

    Route::get('/admin/contact/', [ContactController::class, 'index'])->name('admin.contact');
    Route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit');
    Route::post('/admin/contact/update/{id}', [ContactController::class, 'update'])->name('admin.contact.update');

    //////////////////////////////////////
        ////contact office location page
    ///////////////////////////////////

    Route::get('/admin/contact/location', [ContactOfficeLocationController::class, 'index'])->name('admin.contact.location');
    Route::post('/admin/contact/location/add', [ContactOfficeLocationController::class, 'add'])->name('admin.contact.location.add');
    Route::get('/admin/contact/location/edit/{id}', [ContactOfficeLocationController::class, 'edit'])->name('admin.contact.location.edit');
    Route::post('/admin/contact/location/update/{id}', [ContactOfficeLocationController::class, 'update'])->name('admin.contact.location.update');
    Route::get('/admin/contact/location/delete/{id}', [ContactOfficeLocationController::class, 'delete'])->name('admin.contact.location.delete');

    ///////////////////////////////////////////////////
        ////contact office masssage Topic For User
    ///////////////////////////////////////////////////

    Route::get('/admin/contact/topic', [MassageTopicForUserController::class, 'index'])->name('admin.contact.topic');
    Route::post('/admin/contact/topic/add', [MassageTopicForUserController::class, 'add'])->name('admin.contact.topic.add');
    Route::get('/admin/contact/topic/edit/{id}', [MassageTopicForUserController::class, 'edit'])->name('admin.contact.topic.edit');
    Route::post('/admin/contact/topic/update/{id}', [MassageTopicForUserController::class, 'update'])->name('admin.contact.topic.update');
    Route::get('/admin/contact/topic/delete/{id}', [MassageTopicForUserController::class, 'delete'])->name('admin.contact.topic.delete');

    ///////////////////////////////////////////////////
        ////all  masssage to admin From User
    ///////////////////////////////////////////////////

    Route::get('/admin/massage/from/user', [MassageFromUserToAdminController::class, 'index'])->name('admin.message.user');


});
