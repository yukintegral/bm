<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Plant_yellow;
    
    //=======================================================================
    class Plant_yellowsController extends Controller
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
                $plant_yello = Plant_yellow::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("plant_yellow", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $plant_yello = Plant_yellow::paginate($perPage);              
            }          
            return view("plant_yello.index", compact("plant_yello"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("plant_yello.create");
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
				"plant_yellow" => "required|integer", //integer('plant_yellow')

            ]);
            $requestData = $request->all();
            
            Plant_yellow::create($requestData);
    
            return redirect("plant_yello")->with("flash_message", "plant_yello added!");
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
            $plant_yello = Plant_yellow::findOrFail($id);
            return view("plant_yello.show", compact("plant_yello"));
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
            $plant_yello = Plant_yellow::findOrFail($id);
    
            return view("plant_yello.edit", compact("plant_yello"));
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
				"plant_yellow" => "required|integer", //integer('plant_yellow')

            ]);
            $requestData = $request->all();
            
            $plant_yello = Plant_yellow::findOrFail($id);
            $plant_yello->update($requestData);
    
            return redirect("plant_yello")->with("flash_message", "plant_yello updated!");
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
            Plant_yellow::destroy($id);
    
            return redirect("plant_yello")->with("flash_message", "plant_yello deleted!");
        }
    }
    //=======================================================================
    
    