
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">user_like {{ $user_like->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("user_like") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("user_like") ."/". $user_like->id . "/edit" }}" title="Edit user_like"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/user_like/{{ $user_like->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$user_like->id}} </td></tr>
										<tr><th>liking_user_id</th><td>{{$user_like->liking_user_id}} </td></tr>
										<tr><th>liked_user_id</th><td>{{$user_like->liked_user_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    