
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit post_message #{{ $post_message->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("post_message") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/post_message/{{ $post_message->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$post_message->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="post_message" class="col-md-4 control-label">post_message: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="post_message" type="text" id="post_message" value="{{$post_message->post_message}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="post_id" class="col-md-4 control-label">post_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="post_id" type="text" id="post_id" value="{{$post_message->post_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="user_id" type="text" id="user_id" value="{{$post_message->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="file" class="col-md-4 control-label">file: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="file" type="text" id="file" value="{{$post_message->file}}">
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
    