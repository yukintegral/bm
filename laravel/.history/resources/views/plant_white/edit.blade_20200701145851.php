
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit plant_whit #{{ $plant_whit-> }}</div>
                            <div class="panel-body">
                                <a href="{{ url("plant_whit") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/plant_whit/{{ $plant_whit-> }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="user_id" type="text" id="user_id" value="{{$plant_whit->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="plant_white" class="col-md-4 control-label">plant_white: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="plant_white" type="text" id="plant_white" value="{{$plant_whit->plant_white}}">
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
    