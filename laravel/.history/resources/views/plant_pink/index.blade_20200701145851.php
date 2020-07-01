
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">plant_pin</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("plant_pin/create") }}" class="btn btn-success btn-sm" title="Add New plant_pin">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("plant_pin") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>user_id</th><th>plant_pink</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($plant_pin as $item)
                                    
                                    <tr>

                                            <td>{{ $item->user_id}} </td>

                                            <td>{{ $item->plant_pink}} </td>
  
                                                <td><a href="{{ url("/plant_pin/" . $item->) }}" title="View plant_pin"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/plant_pin/" . $item-> . "/edit") }}" title="Edit plant_pin"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/plant_pin/{{ $item-> }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $plant_pin->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    