<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\User_like;
    
    //=======================================================================
    class User_likesController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\View\View
         */
        public function index(Request $request)
        {
            $keyword = $request->get("search");
            $perPage = 25;
    
            if (!empty($keyword)) {
                $user_like = User_like::where("id","LIKE","%$keyword%")->orWhere("liking_user_id", "LIKE", "%$keyword%")->orWhere("liked_user_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $user_like = User_like::paginate($perPage);              
            }          
            return view("user_like.index", compact("user_like"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("user_like.create");
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function store(Request $request)
        {
            $this->validate($request, [
				"liking_user_id" => "required|integer", //integer('liking_user_id')
				"liked_user_id" => "required|integer", //integer('liked_user_id')

            ]);
            $requestData = $request->all();
            
            User_like::create($requestData);
    
            return redirect("user_like")->with("flash_message", "user_like added!");
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function show($id)
        {
            $user_like = User_like::findOrFail($id);
            return view("user_like.show", compact("user_like"));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function edit($id)
        {
            $user_like = User_like::findOrFail($id);
    
            return view("user_like.edit", compact("user_like"));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function update(Request $request, $id)
        {
            $this->validate($request, [
				"liking_user_id" => "required|integer", //integer('liking_user_id')
				"liked_user_id" => "required|integer", //integer('liked_user_id')

            ]);
            $requestData = $request->all();
            
            $user_like = User_like::findOrFail($id);
            $user_like->update($requestData);
    
            return redirect("user_like")->with("flash_message", "user_like updated!");
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function destroy($id)
        {
            User_like::destroy($id);
    
            return redirect("user_like")->with("flash_message", "user_like deleted!");
        }
    }
    //=======================================================================
    
    