
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">post_statuse {{ $post_statuse->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("post_statuse") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("post_statuse") ."/". $post_statuse->id . "/edit" }}" title="Edit post_statuse"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/post_statuse/{{ $post_statuse->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$post_statuse->id}} </td></tr>
										<tr><th>posts_status</th><td>{{$post_statuse->posts_status}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    