
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New user_like</div>
                            <div class="panel-body">
                                <a href="{{ url("/user_like") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/user_like/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="liking_user_id" class="col-md-4 control-label">liking_user_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="liking_user_id" type="text" id="liking_user_id" value="{{old('liking_user_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="liked_user_id" class="col-md-4 control-label">liked_user_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="liked_user_id" type="text" id="liked_user_id" value="{{old('liked_user_id')}}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Create">
                                        </div>
                                    </div>     
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    