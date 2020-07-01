<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\PlantWhit;
    
    //=======================================================================
    class PlantWhitsController extends Controller
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
                $plant_whit = PlantWhit::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("plant_white", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $plant_whit = PlantWhit::paginate($perPage);              
            }          
            return view("plant_whit.index", compact("plant_whit"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("plant_whit.create");
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
            
            PlantWhit::create($requestData);
    
            return redirect("plant_whit")->with("flash_message", "plant_whit added!");
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
            $plant_whit = PlantWhit::findOrFail($id);
            return view("plant_whit.show", compact("plant_whit"));
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
            $plant_whit = PlantWhit::findOrFail($id);
    
            return view("plant_whit.edit", compact("plant_whit"));
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
            
            $plant_whit = PlantWhit::findOrFail($id);
            $plant_whit->update($requestData);
    
            return redirect("plant_whit")->with("flash_message", "plant_whit updated!");
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
            PlantWhit::destroy($id);
    
            return redirect("plant_whit")->with("flash_message", "plant_whit deleted!");
        }
    }
    //=======================================================================
    
    