
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit plant_pink #{{ $plant_pink-> }}</div>
                            <div class="panel-body">
                                <a href="{{ url("plant_pink") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/plant_pink/{{ $plant_pink-> }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="user_id" type="text" id="user_id" value="{{$plant_pink->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="plant_pink" class="col-md-4 control-label">plant_pink: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="plant_pink" type="text" id="plant_pink" value="{{$plant_pink->plant_pink}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    