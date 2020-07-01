
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">post_message {{ $post_message->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("post_message") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("post_message") ."/". $post_message->id . "/edit" }}" title="Edit post_message"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/post_message/{{ $post_message->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$post_message->id}} </td></tr>
										<tr><th>post_message</th><td>{{$post_message->post_message}} </td></tr>
										<tr><th>post_id</th><td>{{$post_message->post_id}} </td></tr>
										<tr><th>user_id</th><td>{{$post_message->user_id}} </td></tr>
										<tr><th>file</th><td>{{$post_message->file}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    