<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\PlantBlu;
    
    //=======================================================================
    class PlantBlusController extends Controller
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
                $plant_blu = PlantBlu::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("plant_blue", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $plant_blu = PlantBlu::paginate($perPage);              
            }          
            return view("plant_blu.index", compact("plant_blu"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("plant_blu.create");
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
				"plant_blue" => "required|integer", //integer('plant_blue')

            ]);
            $requestData = $request->all();
            
            PlantBlu::create($requestData);
    
            return redirect("plant_blu")->with("flash_message", "plant_blu added!");
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
            $plant_blu = PlantBlu::findOrFail($id);
            return view("plant_blu.show", compact("plant_blu"));
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
            $plant_blu = PlantBlu::findOrFail($id);
    
            return view("plant_blu.edit", compact("plant_blu"));
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
				"plant_blue" => "required|integer", //integer('plant_blue')

            ]);
            $requestData = $request->all();
            
            $plant_blu = PlantBlu::findOrFail($id);
            $plant_blu->update($requestData);
    
            return redirect("plant_blu")->with("flash_message", "plant_blu updated!");
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
            PlantBlu::destroy($id);
    
            return redirect("plant_blu")->with("flash_message", "plant_blu deleted!");
        }
    }
    //=======================================================================
    
    