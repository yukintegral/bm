<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Transaction;
    
    //=======================================================================
    class TransactionMessagesController extends Controller
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
                $transaction_message = Transaction::where("id","LIKE","%$keyword%")->orWhere("transaction_message", "LIKE", "%$keyword%")->orWhere("transaction_id", "LIKE", "%$keyword%")->orWhere("sender_id", "LIKE", "%$keyword%")->orWhere("receiver_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                    $transaction_message = Transaction::paginate($perPage);              
            }          
            return view("transaction_message.index", compact("transaction_message"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("transaction_message.create");
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
				"transaction_message" => "required", //string('transaction_message')
				"transaction_id" => "required|integer", //integer('transaction_id')
				"sender_id" => "required|integer", //integer('sender_id')
				"receiver_id" => "required|integer", //integer('receiver_id')

            ]);
            $requestData = $request->all();
            
            Transaction::create($requestData);
    
            return redirect("transaction_message")->with("flash_message", "transaction_message added!");
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
            $transaction_message = Transaction::findOrFail($id);
            return view("transaction_message.show", compact("transaction_message"));
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
            $transaction_message = Transaction::findOrFail($id);
    
            return view("transaction_message.edit", compact("transaction_message"));
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
				"transaction_message" => "required", //string('transaction_message')
				"transaction_id" => "required|integer", //integer('transaction_id')
				"sender_id" => "required|integer", //integer('sender_id')
				"receiver_id" => "required|integer", //integer('receiver_id')

            ]);
            $requestData = $request->all();
            
            $transaction_message = Transaction::findOrFail($id);
            $transaction_message->update($requestData);
    
            return redirect("transaction_message")->with("flash_message", "transaction_message updated!");
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
    
            return redirect("transaction_message")->with("flash_message", "transaction_message deleted!");
        }
    }
    //=======================================================================
    
    