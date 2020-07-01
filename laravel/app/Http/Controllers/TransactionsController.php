<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Transaction;
    
    //=======================================================================
    class TransactionsController extends Controller
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
                $transaction = Transaction::where("id","LIKE","%$keyword%")->orWhere("post_id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $transaction = Transaction::paginate($perPage);              
            }          
            return view("transaction.index", compact("transaction"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("transaction.create");
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
				"post_id" => "required|integer", //integer('post_id')
				"user_id" => "required|integer", //integer('user_id')

            ]);
            $requestData = $request->all();
            
            Transaction::create($requestData);
    
            return redirect("transaction")->with("flash_message", "transaction added!");
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
            $transaction = Transaction::findOrFail($id);
            return view("transaction.show", compact("transaction"));
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
            $transaction = Transaction::findOrFail($id);
    
            return view("transaction.edit", compact("transaction"));
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
				"post_id" => "required|integer", //integer('post_id')
				"user_id" => "required|integer", //integer('user_id')

            ]);
            $requestData = $request->all();
            
            $transaction = Transaction::findOrFail($id);
            $transaction->update($requestData);
    
            return redirect("transaction")->with("flash_message", "transaction updated!");
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
            Transaction::destroy($id);
    
            return redirect("transaction")->with("flash_message", "transaction deleted!");
        }
    }
    //=======================================================================
    
    