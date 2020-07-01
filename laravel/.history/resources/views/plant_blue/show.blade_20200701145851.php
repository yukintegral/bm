
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">plant_blu {{ $plant_blu-> }}</div>
                            <div class="panel-body">

                                <a href="{{ url("plant_blu") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("plant_blu") ."/". $plant_blu-> . "/edit" }}" title="Edit plant_blu"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/plant_blu/{{ $plant_blu-> }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>user_id</th><td>{{$plant_blu->user_id}} </td></tr>
										<tr><th>plant_blue</th><td>{{$plant_blu->plant_blue}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    