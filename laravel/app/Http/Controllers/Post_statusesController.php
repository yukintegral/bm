<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Post_status;
    
    //=======================================================================
    class Post_statusesController extends Controller
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
                $post_status = Post_status::where("id","LIKE","%$keyword%")->orWhere("posts_status", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $post_status = Post_status::paginate($perPage);              
            }          
            return view("post_status.index", compact("post_status"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("post_status.create");
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
				"posts_status" => "required", //string('posts_status')

            ]);
            $requestData = $request->all();
            
            Post_status::create($requestData);
    
            return redirect("post_status")->with("flash_message", "post_status added!");
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
            $post_status = Post_status::findOrFail($id);
            return view("post_status.show", compact("post_status"));
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
            $post_status = Post_status::findOrFail($id);
    
            return view("post_status.edit", compact("post_status"));
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
				"posts_status" => "required", //string('posts_status')

            ]);
            $requestData = $request->all();
            
            $post_status = Post_status::findOrFail($id);
            $post_status->update($requestData);
    
            return redirect("post_status")->with("flash_message", "post_status updated!");
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
            Post_status::destroy($id);
    
            return redirect("post_status")->with("flash_message", "post_status deleted!");
        }
    }
    //=======================================================================
    
    