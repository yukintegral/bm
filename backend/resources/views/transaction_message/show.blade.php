
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">transaction_message {{ $transaction_message->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("transaction_message") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("transaction_message") ."/". $transaction_message->id . "/edit" }}" title="Edit transaction_message"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/transaction_message/{{ $transaction_message->id }}" class="form-horizontal" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field("delete") }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                        Delete
                                        </button>    
                            </form>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
										<tr><th>id</th><td>{{$transaction_message->id}} </td></tr>
										<tr><th>transaction_message</th><td>{{$transaction_message->transaction_message}} </td></tr>
										<tr><th>transaction_id</th><td>{{$transaction_message->transaction_id}} </td></tr>
										<tr><th>sender_id</th><td>{{$transaction_message->sender_id}} </td></tr>
										<tr><th>receiver_id</th><td>{{$transaction_message->receiver_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    