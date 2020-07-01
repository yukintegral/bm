<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\User;
    
    //=======================================================================
    class UsersController extends Controller
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
                $user = User::where("id","LIKE","%$keyword%")->orWhere("user_name", "LIKE", "%$keyword%")->orWhere("lid", "LIKE", "%$keyword%")->orWhere("lpw", "LIKE", "%$keyword%")->orWhere("email", "LIKE", "%$keyword%")->orWhere("class", "LIKE", "%$keyword%")->orWhere("avatar", "LIKE", "%$keyword%")->orWhere("self_introducion", "LIKE", "%$keyword%")->orWhere("sns1", "LIKE", "%$keyword%")->orWhere("sns2", "LIKE", "%$keyword%")->orWhere("sns3", "LIKE", "%$keyword%")->orWhere("kanri_flg", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $user = User::paginate($perPage);              
            }          
            return view("user.index", compact("user"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("user.create");
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
				"user_name" => "required", //string('user_name')
				"lid" => "required", //string('lid')
				"lpw" => "required", //string('lpw')
				"email" => "required", //string('email')
				"class" => "nullable", //string('class')->nullable()
				"avatar" => "nullable", //text('avatar')->nullable()
				"self_introducion" => "nullable", //text('self_introducion')->nullable()
				"sns1" => "nullable", //text('sns1')->nullable()
				"sns2" => "nullable", //text('sns2')->nullable()
				"sns3" => "nullable", //text('sns3')->nullable()
				"kanri_flg" => "required|integer", //integer('kanri_flg')

            ]);
            $requestData = $request->all();
            
            User::create($requestData);
    
            return redirect("user")->with("flash_message", "user added!");
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
            $user = User::findOrFail($id);
            return view("user.show", compact("user"));
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
            $user = User::findOrFail($id);
    
            return view("user.edit", compact("user"));
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
				"user_name" => "required", //string('user_name')
				"lid" => "required", //string('lid')
				"lpw" => "required", //string('lpw')
				"email" => "required", //string('email')
				"class" => "nullable", //string('class')->nullable()
				"avatar" => "nullable", //text('avatar')->nullable()
				"self_introducion" => "nullable", //text('self_introducion')->nullable()
				"sns1" => "nullable", //text('sns1')->nullable()
				"sns2" => "nullable", //text('sns2')->nullable()
				"sns3" => "nullable", //text('sns3')->nullable()
				"kanri_flg" => "required|integer", //integer('kanri_flg')

            ]);
            $requestData = $request->all();
            
            $user = User::findOrFail($id);
            $user->update($requestData);
    
            return redirect("user")->with("flash_message", "user updated!");
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
            User::destroy($id);
    
            return redirect("user")->with("flash_message", "user deleted!");
        }
    }
    //=======================================================================
    
    