
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">post_message</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("post_message/create") }}" class="btn btn-success btn-sm" title="Add New post_message">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("post_message") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>post_message</th><th>post_id</th><th>user_id</th><th>file</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($post_message as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->post_message}} </td>

                                            <td>{{ $item->post_id}} </td>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->file}} </td>
  
                                                <td><a href="{{ url("/post_message/" . $item->id) }}" title="View post_message"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/post_message/" . $item->id . "/edit") }}" title="Edit post_message"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/post_message/{{ $item->id }}" class="form-horizontal" style="display:inline;">
                                                        {{ csrf_field() }}
                                                        
                                                        {{ method_field("DELETE") }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $post_message->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    