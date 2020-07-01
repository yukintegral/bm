
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit transaction_message #{{ $transaction_message->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("transaction_message") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/transaction_message/{{ $transaction_message->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$transaction_message->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="transaction_message" class="col-md-4 control-label">transaction_message: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="transaction_message" type="text" id="transaction_message" value="{{$transaction_message->transaction_message}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="transaction_id" class="col-md-4 control-label">transaction_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="transaction_id" type="text" id="transaction_id" value="{{$transaction_message->transaction_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="sender_id" class="col-md-4 control-label">sender_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="sender_id" type="text" id="sender_id" value="{{$transaction_message->sender_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="receiver_id" class="col-md-4 control-label">receiver_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="receiver_id" type="text" id="receiver_id" value="{{$transaction_message->receiver_id}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    