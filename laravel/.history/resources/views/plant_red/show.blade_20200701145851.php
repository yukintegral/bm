
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">plant_re {{ $plant_re-> }}</div>
                            <div class="panel-body">

                                <a href="{{ url("plant_re") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("plant_re") ."/". $plant_re-> . "/edit" }}" title="Edit plant_re"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/plant_re/{{ $plant_re-> }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>user_id</th><td>{{$plant_re->user_id}} </td></tr>
										<tr><th>plant_red</th><td>{{$plant_re->plant_red}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    