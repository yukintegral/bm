
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">plant_blue {{ $plant_blue-> }}</div>
                            <div class="panel-body">

                                <a href="{{ url("plant_blue") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("plant_blue") ."/". $plant_blue-> . "/edit" }}" title="Edit plant_blue"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/plant_blue/{{ $plant_blue-> }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>user_id</th><td>{{$plant_blue->user_id}} </td></tr>
										<tr><th>plant_blue</th><td>{{$plant_blue->plant_blue}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    