
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">plant_white</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("plant_white/create") }}" class="btn btn-success btn-sm" title="Add New plant_white">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("plant_white") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>user_id</th><th>plant_white</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($plant_white as $item)
                                    
                                    <tr>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->plant_white}} </td>
  
                                                <td><a href="{{ url("/plant_white/" . $item->) }}" title="View plant_white"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/plant_white/" . $item-> . "/edit") }}" title="Edit plant_white"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/plant_white/{{ $item-> }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $plant_white->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    