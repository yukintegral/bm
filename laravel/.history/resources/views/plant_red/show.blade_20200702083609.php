
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">plant_red {{ $plant_red-> }}</div>
                            <div class="panel-body">

                                <a href="{{ url("plant_red") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("plant_red") ."/". $plant_red-> . "/edit" }}" title="Edit plant_red"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/plant_red/{{ $plant_red-> }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>user_id</th><td>{{$plant_red->user_id}} </td></tr>
										<tr><th>plant_red</th><td>{{$plant_red->plant_red}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    