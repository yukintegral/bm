<?php
use Illuminate\Http\Response;

//default
Route::get("/", function () {
    return view("welcome");
});
//Demo (Delete after site publish.)
Route::get("/tables_check_view_html",function(){
    return view("tables_check_view_html");
});

//=======================================================================
//index
Route::get("user/", "UsersController@index");
//create
Route::get("user/create", "UsersController@create");
//show
Route::get("user/{id}", "UsersController@show");
//store
Route::post("user/store", "UsersController@store");
//edit
Route::get("user/{id}/edit", "UsersController@edit");
//update
Route::put("user/{id}", "UsersController@update");
//destroy
Route::delete("user/{id}", "UsersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("introduction/", "IntroductionsController@index");
//create
Route::get("introduction/create", "IntroductionsController@create");
//show
Route::get("introduction/{id}", "IntroductionsController@show");
//store
Route::post("introduction/store", "IntroductionsController@store");
//edit
Route::get("introduction/{id}/edit", "IntroductionsController@edit");
//update
Route::put("introduction/{id}", "IntroductionsController@update");
//destroy
Route::delete("introduction/{id}", "IntroductionsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("plant_red/", "Plant_redsController@index");
//create
Route::get("plant_red/create", "Plant_redsController@create");
//show
Route::get("plant_red/{id}", "Plant_redsController@show");
//store
Route::post("plant_red/store", "Plant_redsController@store");
//edit
Route::get("plant_red/{id}/edit", "Plant_redsController@edit");
//update
Route::put("plant_red/{id}", "Plant_redsController@update");
//destroy
Route::delete("plant_red/{id}", "Plant_redsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("plant_blue/", "Plant_bluesController@index");
//create
Route::get("plant_blue/create", "Plant_bluesController@create");
//show
Route::get("plant_blue/{id}", "Plant_bluesController@show");
//store
Route::post("plant_blue/store", "Plant_bluesController@store");
//edit
Route::get("plant_blue/{id}/edit", "Plant_bluesController@edit");
//update
Route::put("plant_blue/{id}", "Plant_bluesController@update");
//destroy
Route::delete("plant_blue/{id}", "Plant_bluesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("plant_yellow/", "Plant_yellowsController@index");
//create
Route::get("plant_yellow/create", "Plant_yellowsController@create");
//show
Route::get("plant_yellow/{id}", "Plant_yellowsController@show");
//store
Route::post("plant_yellow/store", "Plant_yellowsController@store");
//edit
Route::get("plant_yellow/{id}/edit", "Plant_yellowsController@edit");
//update
Route::put("plant_yellow/{id}", "Plant_yellowsController@update");
//destroy
Route::delete("plant_yellow/{id}", "Plant_yellowsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("plant_white/", "Plant_whitesController@index");
//create
Route::get("plant_white/create", "Plant_whitesController@create");
//show
Route::get("plant_white/{id}", "Plant_whitesController@show");
//store
Route::post("plant_white/store", "Plant_whitesController@store");
//edit
Route::get("plant_white/{id}/edit", "Plant_whitesController@edit");
//update
Route::put("plant_white/{id}", "Plant_whitesController@update");
//destroy
Route::delete("plant_white/{id}", "Plant_whitesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("plant_pink/", "Plant_pinksController@index");
//create
Route::get("plant_pink/create", "Plant_pinksController@create");
//show
Route::get("plant_pink/{id}", "Plant_pinksController@show");
//store
Route::post("plant_pink/store", "Plant_pinksController@store");
//edit
Route::get("plant_pink/{id}/edit", "Plant_pinksController@edit");
//update
Route::put("plant_pink/{id}", "Plant_pinksController@update");
//destroy
Route::delete("plant_pink/{id}", "Plant_pinksController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("user_like/", "UserLikesController@index");
//create
Route::get("user_like/create", "UserLikesController@create");
//show
Route::get("user_like/{id}", "UserLikesController@show");
//store
Route::post("user_like/store", "UserLikesController@store");
//edit
Route::get("user_like/{id}/edit", "UserLikesController@edit");
//update
Route::put("user_like/{id}", "UserLikesController@update");
//destroy
Route::delete("user_like/{id}", "UserLikesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("post/", "PostsController@index");
//create
Route::get("post/create", "PostsController@create");
//show
Route::get("post/{id}", "PostsController@show");
//store
Route::post("post/store", "PostsController@store");
//edit
Route::get("post/{id}/edit", "PostsController@edit");
//update
Route::put("post/{id}", "PostsController@update");
//destroy
Route::delete("post/{id}", "PostsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("post_message/", "PostMessagesController@index");
//create
Route::get("post_message/create", "PostMessagesController@create");
//show
Route::get("post_message/{id}", "PostMessagesController@show");
//store
Route::post("post_message/store", "PostMessagesController@store");
//edit
Route::get("post_message/{id}/edit", "PostMessagesController@edit");
//update
Route::put("post_message/{id}", "PostMessagesController@update");
//destroy
Route::delete("post_message/{id}", "PostMessagesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("post_file/", "PostFilesController@index");
//create
Route::get("post_file/create", "PostFilesController@create");
//show
Route::get("post_file/{id}", "PostFilesController@show");
//store
Route::post("post_file/store", "PostFilesController@store");
//edit
Route::get("post_file/{id}/edit", "PostFilesController@edit");
//update
Route::put("post_file/{id}", "PostFilesController@update");
//destroy
Route::delete("post_file/{id}", "PostFilesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("categorie/", "CategoriesController@index");
//create
Route::get("categorie/create", "CategoriesController@create");
//show
Route::get("categorie/{id}", "CategoriesController@show");
//store
Route::post("categorie/store", "CategoriesController@store");
//edit
Route::get("categorie/{id}/edit", "CategoriesController@edit");
//update
Route::put("categorie/{id}", "CategoriesController@update");
//destroy
Route::delete("categorie/{id}", "CategoriesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("post_like/", "PostLikesController@index");
//create
Route::get("post_like/create", "PostLikesController@create");
//show
Route::get("post_like/{id}", "PostLikesController@show");
//store
Route::post("post_like/store", "PostLikesController@store");
//edit
Route::get("post_like/{id}/edit", "PostLikesController@edit");
//update
Route::put("post_like/{id}", "PostLikesController@update");
//destroy
Route::delete("post_like/{id}", "PostLikesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("post_statuse/", "PostStatusesController@index");
//create
Route::get("post_statuse/create", "PostStatusesController@create");
//show
Route::get("post_statuse/{id}", "PostStatusesController@show");
//store
Route::post("post_statuse/store", "PostStatusesController@store");
//edit
Route::get("post_statuse/{id}/edit", "PostStatusesController@edit");
//update
Route::put("post_statuse/{id}", "PostStatusesController@update");
//destroy
Route::delete("post_statuse/{id}", "PostStatusesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("transaction/", "TransactionsController@index");
//create
Route::get("transaction/create", "TransactionsController@create");
//show
Route::get("transaction/{id}", "TransactionsController@show");
//store
Route::post("transaction/store", "TransactionsController@store");
//edit
Route::get("transaction/{id}/edit", "TransactionsController@edit");
//update
Route::put("transaction/{id}", "TransactionsController@update");
//destroy
Route::delete("transaction/{id}", "TransactionsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("transaction_message/", "TransactionMessagesController@index");
//create
Route::get("transaction_message/create", "TransactionMessagesController@create");
//show
Route::get("transaction_message/{id}", "TransactionMessagesController@show");
//store
Route::post("transaction_message/store", "TransactionMessagesController@store");
//edit
Route::get("transaction_message/{id}/edit", "TransactionMessagesController@edit");
//update
Route::put("transaction_message/{id}", "TransactionMessagesController@update");
//destroy
Route::delete("transaction_message/{id}", "TransactionMessagesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("informatio/", "InformationController@index");
//create
Route::get("informatio/create", "InformationController@create");
//show
Route::get("informatio/{id}", "InformationController@show");
//store
Route::post("informatio/store", "InformationController@store");
//edit
Route::get("informatio/{id}/edit", "InformationController@edit");
//update
Route::put("informatio/{id}", "InformationController@update");
//destroy
Route::delete("informatio/{id}", "InformationController@destroy");
//=======================================================================
