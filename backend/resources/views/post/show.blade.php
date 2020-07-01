
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">post {{ $post->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("post") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("post") ."/". $post->id . "/edit" }}" title="Edit post"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/post/{{ $post->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$post->id}} </td></tr>
										<tr><th>user_id</th><td>{{$post->user_id}} </td></tr>
										<tr><th>content</th><td>{{$post->content}} </td></tr>
										<tr><th>category_id</th><td>{{$post->category_id}} </td></tr>
										<tr><th>post_name</th><td>{{$post->post_name}} </td></tr>
										<tr><th>price</th><td>{{$post->price}} </td></tr>
										<tr><th>post_status_id</th><td>{{$post->post_status_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    