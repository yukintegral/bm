<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Post;
    
    //=======================================================================
    class PostsController extends Controller
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
                $post = Post::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("content", "LIKE", "%$keyword%")->orWhere("category_id", "LIKE", "%$keyword%")->orWhere("post_name", "LIKE", "%$keyword%")->orWhere("price", "LIKE", "%$keyword%")->orWhere("post_status_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $post = Post::paginate($perPage);              
            }          
            return view("post.index", compact("post"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("post.create");
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
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"content" => "required", //text('content')
				"category_id" => "required|integer", //integer('category_id')
				"post_name" => "required", //string('post_name')
				"price" => "nullable|integer", //integer('price')->nullable()
				"post_status_id" => "required|integer", //integer('post_status_id')

            ]);
            $requestData = $request->all();
            
            Post::create($requestData);
    
            return redirect("post")->with("flash_message", "post added!");
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
            $post = Post::findOrFail($id);
            return view("post.show", compact("post"));
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
            $post = Post::findOrFail($id);
    
            return view("post.edit", compact("post"));
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
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"content" => "required", //text('content')
				"category_id" => "required|integer", //integer('category_id')
				"post_name" => "required", //string('post_name')
				"price" => "nullable|integer", //integer('price')->nullable()
				"post_status_id" => "required|integer", //integer('post_status_id')

            ]);
            $requestData = $request->all();
            
            $post = Post::findOrFail($id);
            $post->update($requestData);
    
            return redirect("post")->with("flash_message", "post updated!");
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
            Post::destroy($id);
    
            return redirect("post")->with("flash_message", "post deleted!");
        }
    }
    //=======================================================================
    
    