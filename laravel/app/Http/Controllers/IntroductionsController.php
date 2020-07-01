<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Introduction;
    
    //=======================================================================
    class IntroductionsController extends Controller
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
                $introduction = Introduction::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("content", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $introduction = Introduction::paginate($perPage);              
            }          
            return view("introduction.index", compact("introduction"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("introduction.create");
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
				"user_id" => "required", //string('user_id')
				"content" => "required", //text('content')

            ]);
            $requestData = $request->all();
            
            Introduction::create($requestData);
    
            return redirect("introduction")->with("flash_message", "introduction added!");
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
            $introduction = Introduction::findOrFail($id);
            return view("introduction.show", compact("introduction"));
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
            $introduction = Introduction::findOrFail($id);
    
            return view("introduction.edit", compact("introduction"));
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
				"user_id" => "required", //string('user_id')
				"content" => "required", //text('content')

            ]);
            $requestData = $request->all();
            
            $introduction = Introduction::findOrFail($id);
            $introduction->update($requestData);
    
            return redirect("introduction")->with("flash_message", "introduction updated!");
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
            Introduction::destroy($id);
    
            return redirect("introduction")->with("flash_message", "introduction deleted!");
        }
    }
    //=======================================================================
    
    