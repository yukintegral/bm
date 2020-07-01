<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Plant_red;
    
    //=======================================================================
    class PlantResController extends Controller
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
                $plant_red = Plant_red::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("plant_red", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $plant_red = Plant_red::paginate($perPage);              
            }          
            return view("plant_red.index", compact("plant_red"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("plant_red.create");
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
				"plant_red" => "nullable|integer", //integer('plant_red')->nullable()

            ]);
            $requestData = $request->all();
            
            Plant_red::create($requestData);
    
            return redirect("plant_red")->with("flash_message", "plant_red added!");
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
            $plant_red = Plant_red::findOrFail($id);
            return view("plant_red.show", compact("plant_red"));
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
            $plant_red = Plant_red::findOrFail($id);
    
            return view("plant_red.edit", compact("plant_red"));
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
				"plant_red" => "nullable|integer", //integer('plant_red')->nullable()

            ]);
            $requestData = $request->all();
            
            $plant_red = Plant_red::findOrFail($id);
            $plant_red->update($requestData);
    
            return redirect("plant_red")->with("flash_message", "plant_red updated!");
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
            Plant_red::destroy($id);
    
            return redirect("plant_red")->with("flash_message", "plant_red deleted!");
        }
    }
    //=======================================================================
    
    