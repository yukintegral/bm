
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">post_file {{ $post_file->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("post_file") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("post_file") ."/". $post_file->id . "/edit" }}" title="Edit post_file"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/post_file/{{ $post_file->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$post_file->id}} </td></tr>
										<tr><th>post_id</th><td>{{$post_file->post_id}} </td></tr>
										<tr><th>file</th><td>{{$post_file->file}} </td></tr>
										<tr><th>update_at</th><td>{{$post_file->update_at}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    