<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\PostFile;
    
    //=======================================================================
    class Post_filesController extends Controller
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
                $post_file = PostFile::where("id","LIKE","%$keyword%")->orWhere("post_id", "LIKE", "%$keyword%")->orWhere("file", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $post_file = PostFile::paginate($perPage);              
            }          
            return view("post_file.index", compact("post_file"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("post_file.create");
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
				"post_id" => "required", //string('post_id')
				"file" => "required|integer", //integer('file')
				"update_at" => "required|date", //dateTime('update_at')

            ]);
            $requestData = $request->all();
            
            PostFile::create($requestData);
    
            return redirect("post_file")->with("flash_message", "post_file added!");
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
            $post_file = PostFile::findOrFail($id);
            return view("post_file.show", compact("post_file"));
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
            $post_file = PostFile::findOrFail($id);
    
            return view("post_file.edit", compact("post_file"));
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
				"post_id" => "required", //string('post_id')
				"file" => "required|integer", //integer('file')
				"update_at" => "required|date", //dateTime('update_at')

            ]);
            $requestData = $request->all();
            
            $post_file = PostFile::findOrFail($id);
            $post_file->update($requestData);
    
            return redirect("post_file")->with("flash_message", "post_file updated!");
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
            PostFile::destroy($id);
    
            return redirect("post_file")->with("flash_message", "post_file deleted!");
        }
    }
    //=======================================================================
    
    