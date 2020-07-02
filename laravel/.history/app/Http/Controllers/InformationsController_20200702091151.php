<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Information;
    
    //=======================================================================
    class InformationsController extends Controller
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
                $information = Information::where("id","LIKE","%$keyword%")->orWhere("content", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $information = Information::paginate($perPage);              
            }          
            return view("information.index", compact("information"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("information.create");
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
    
            return redirect("information")->with("flash_message", "information added!");
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
            $information = Information::findOrFail($id);
            return view("information.show", compact("information"));
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
            $information = Information::findOrFail($id);
    
            return view("information.edit", compact("information"));
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
            
            $information = Information::findOrFail($id);
            $information->update($requestData);
    
            return redirect("information")->with("flash_message", "information updated!");
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
    
            return redirect("information")->with("flash_message", "information deleted!");
        }
    }
    //=======================================================================
    
    