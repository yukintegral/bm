<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Category;
    
    //=======================================================================
    class CategoriesController extends Controller
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
                $categorie = Category::where("id","LIKE","%$keyword%")->orWhere("category_name", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $categorie = Categories::paginate($perPage);              
            }          
            return view("categorie.index", compact("categorie"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("categorie.create");
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
				"category_name" => "required", //string('category_name')
				"update_at" => "required|date", //dateTime('update_at')

            ]);
            $requestData = $request->all();
            
            Categorie::create($requestData);
    
            return redirect("categorie")->with("flash_message", "categorie added!");
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
            $categorie = Categorie::findOrFail($id);
            return view("categorie.show", compact("categorie"));
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
            $categorie = Categorie::findOrFail($id);
    
            return view("categorie.edit", compact("categorie"));
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
				"category_name" => "required", //string('category_name')
				"update_at" => "required|date", //dateTime('update_at')

            ]);
            $requestData = $request->all();
            
            $categorie = Categorie::findOrFail($id);
            $categorie->update($requestData);
    
            return redirect("categorie")->with("flash_message", "categorie updated!");
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
            Categorie::destroy($id);
    
            return redirect("categorie")->with("flash_message", "categorie deleted!");
        }
    }
    //=======================================================================
    
    