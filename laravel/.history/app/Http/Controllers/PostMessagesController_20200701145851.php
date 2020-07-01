<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\PostMessage;
    
    //=======================================================================
    class PostMessagesController extends Controller
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
                $post_message = PostMessage::where("id","LIKE","%$keyword%")->orWhere("post_message", "LIKE", "%$keyword%")->orWhere("post_id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("file", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $post_message = PostMessage::paginate($perPage);              
            }          
            return view("post_message.index", compact("post_message"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("post_message.create");
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
				"post_message" => "required", //text('post_message')
				"post_id" => "required|integer", //integer('post_id')
				"user_id" => "required|integer", //integer('user_id')
				"file" => "required", //text('file')

            ]);
            $requestData = $request->all();
            
            PostMessage::create($requestData);
    
            return redirect("post_message")->with("flash_message", "post_message added!");
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
            $post_message = PostMessage::findOrFail($id);
            return view("post_message.show", compact("post_message"));
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
            $post_message = PostMessage::findOrFail($id);
    
            return view("post_message.edit", compact("post_message"));
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
				"post_message" => "required", //text('post_message')
				"post_id" => "required|integer", //integer('post_id')
				"user_id" => "required|integer", //integer('user_id')
				"file" => "required", //text('file')

            ]);
            $requestData = $request->all();
            
            $post_message = PostMessage::findOrFail($id);
            $post_message->update($requestData);
    
            return redirect("post_message")->with("flash_message", "post_message updated!");
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
            PostMessage::destroy($id);
    
            return redirect("post_message")->with("flash_message", "post_message deleted!");
        }
    }
    //=======================================================================
    
    