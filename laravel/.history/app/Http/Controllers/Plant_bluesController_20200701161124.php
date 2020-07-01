<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Plant_blue;
    
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
                $plant_blue = Plant_blue::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("plant_blue", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $plant_blu = Plant_blue::paginate($perPage);              
            }          
            return view("plant_blue.index", compact("plant_blue"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("plant_blue.create");
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
            
            Plant_blue::create($requestData);
    
            return redirect("plant_blue")->with("flash_message", "plant_blue added!");
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
            $plant_blue = Plant_blue::findOrFail($id);
            return view("plant_blue.show", compact("plant_blue"));
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
            $plant_blue = Plant_blue::findOrFail($id);
    
            return view("plant_blue.edit", compact("plant_blue"));
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
            
            $plant_blue = Plant_blue::findOrFail($id);
            $plant_blue->update($requestData);
    
            return redirect("plant_blue")->with("flash_message", "plant_blue updated!");
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
            Plant_blue::destroy($id);
    
            return redirect("plant_blue")->with("flash_message", "plant_blue deleted!");
        }
    }
    //=======================================================================
    
    