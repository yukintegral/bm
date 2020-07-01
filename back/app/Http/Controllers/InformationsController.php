<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Information;
    
    //=======================================================================
    class InformatiosController extends Controller
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
                $informatio = Information::where("id","LIKE","%$keyword%")->orWhere("content", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $informatio = Information::paginate($perPage);              
            }          
            return view("informatio.index", compact("informatio"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("informatio.create");
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
				"content" => "required", //string('content')

            ]);
            $requestData = $request->all();
            
            Information::create($requestData);
    
            return redirect("informatio")->with("flash_message", "informatio added!");
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
            $informatio = Information::findOrFail($id);
            return view("informatio.show", compact("informatio"));
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
            $informatio = Information::findOrFail($id);
    
            return view("informatio.edit", compact("informatio"));
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
				"content" => "required", //string('content')

            ]);
            $requestData = $request->all();
            
            $informatio = Information::findOrFail($id);
            $informatio->update($requestData);
    
            return redirect("informatio")->with("flash_message", "informatio updated!");
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
            Information::destroy($id);
    
            return redirect("informatio")->with("flash_message", "informatio deleted!");
        }
    }
    //=======================================================================
    
    