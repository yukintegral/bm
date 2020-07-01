<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\PlantRe;
    
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
                $plant_re = PlantRe::where("id","LIKE","%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("plant_red", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $plant_re = PlantRe::paginate($perPage);              
            }          
            return view("plant_re.index", compact("plant_re"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("plant_re.create");
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
            
            PlantRe::create($requestData);
    
            return redirect("plant_re")->with("flash_message", "plant_re added!");
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
            $plant_re = PlantRe::findOrFail($id);
            return view("plant_re.show", compact("plant_re"));
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
            $plant_re = PlantRe::findOrFail($id);
    
            return view("plant_re.edit", compact("plant_re"));
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
            
            $plant_re = PlantRe::findOrFail($id);
            $plant_re->update($requestData);
    
            return redirect("plant_re")->with("flash_message", "plant_re updated!");
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
            PlantRe::destroy($id);
    
            return redirect("plant_re")->with("flash_message", "plant_re deleted!");
        }
    }
    //=======================================================================
    
    