<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Plant_white;
    
    //=======================================================================
    class PlantController extends Controller
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
                $plant_white = Plant_white::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("plant_white", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $plant_white = Plant_white::paginate($perPage);              
            }          
            return view("plant_white.index", compact("plant_white"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("plant_white.create");
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
				"plant_white" => "required|integer", //integer('plant_white')

            ]);
            $requestData = $request->all();
            
            Plant_white::create($requestData);
    
            return redirect("plant_white")->with("flash_message", "plant_white added!");
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
            $plant_white = Plant_white::findOrFail($id);
            return view("plant_white.show", compact("plant_white"));
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
            $plant_white = Plant_white::findOrFail($id);
    
            return view("plant_white.edit", compact("plant_white"));
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
				"plant_white" => "required|integer", //integer('plant_white')

            ]);
            $requestData = $request->all();
            
            $plant_white = Plant_white::findOrFail($id);
            $plant_white->update($requestData);
    
            return redirect("plant_white")->with("flash_message", "plant_white updated!");
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
            Plant_white::destroy($id);
    
            return redirect("plant_white")->with("flash_message", "plant_white deleted!");
        }
    }
    //=======================================================================
    
    