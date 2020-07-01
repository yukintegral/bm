<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Plant_pink;
    
    //=======================================================================
    class PlantPinsController extends Controller
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
                $plant_pin = Plant_pink::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("plant_pink", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $plant_pin = Plant_pink::paginate($perPage);              
            }          
            return view("plant_pin.index", compact("plant_pin"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("plant_pin.create");
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
				"plant_pink" => "required|integer", //integer('plant_pink')

            ]);
            $requestData = $request->all();
            
            Plant_pink::create($requestData);
    
            return redirect("plant_pin")->with("flash_message", "plant_pin added!");
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
            $plant_pin = Plant_pink::findOrFail($id);
            return view("plant_pin.show", compact("plant_pin"));
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
            $plant_pin = Plant_pink::findOrFail($id);
    
            return view("plant_pin.edit", compact("plant_pin"));
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
				"plant_pink" => "required|integer", //integer('plant_pink')

            ]);
            $requestData = $request->all();
            
            $plant_pin = Plant_pink::findOrFail($id);
            $plant_pin->update($requestData);
    
            return redirect("plant_pin")->with("flash_message", "plant_pin updated!");
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
            Plant_pink::destroy($id);
    
            return redirect("plant_pin")->with("flash_message", "plant_pin deleted!");
        }
    }
    //=======================================================================
    
    