
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\PostLike;
    
    //=======================================================================
    class PostLikesController extends Controller
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
                $post_like = PostLike::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("post_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $post_like = PostLike::paginate($perPage);              
            }          
            return view("post_like.index", compact("post_like"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("post_like.create");
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
				"user_id" => "required|integer", //integer('user_id')
				"post_id" => "required|integer", //integer('post_id')

            ]);
            $requestData = $request->all();
            
            PostLike::create($requestData);
    
            return redirect("post_like")->with("flash_message", "post_like added!");
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
            $post_like = PostLike::findOrFail($id);
            return view("post_like.show", compact("post_like"));
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
            $post_like = PostLike::findOrFail($id);
    
            return view("post_like.edit", compact("post_like"));
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
				"user_id" => "required|integer", //integer('user_id')
				"post_id" => "required|integer", //integer('post_id')

            ]);
            $requestData = $request->all();
            
            $post_like = PostLike::findOrFail($id);
            $post_like->update($requestData);
    
            return redirect("post_like")->with("flash_message", "post_like updated!");
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
            PostLike::destroy($id);
    
            return redirect("post_like")->with("flash_message", "post_like deleted!");
        }
    }
    //=======================================================================
    
    