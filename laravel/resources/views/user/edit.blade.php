
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit user #{{ $user->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("user") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/user/{{ $user->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$user->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="user_name" class="col-md-4 control-label">user_name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="user_name" type="text" id="user_name" value="{{$user->user_name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="lid" class="col-md-4 control-label">lid: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="lid" type="text" id="lid" value="{{$user->lid}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="lpw" class="col-md-4 control-label">lpw: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="lpw" type="text" id="lpw" value="{{$user->lpw}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="email" class="col-md-4 control-label">email: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="email" type="text" id="email" value="{{$user->email}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="class" class="col-md-4 control-label">class: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="class" type="text" id="class" value="{{$user->class}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="avatar" class="col-md-4 control-label">avatar: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="avatar" type="text" id="avatar" value="{{$user->avatar}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="self_introducion" class="col-md-4 control-label">self_introducion: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="self_introducion" type="text" id="self_introducion" value="{{$user->self_introducion}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="sns1" class="col-md-4 control-label">sns1: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="sns1" type="text" id="sns1" value="{{$user->sns1}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="sns2" class="col-md-4 control-label">sns2: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="sns2" type="text" id="sns2" value="{{$user->sns2}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="sns3" class="col-md-4 control-label">sns3: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="sns3" type="text" id="sns3" value="{{$user->sns3}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="kanri_flg" class="col-md-4 control-label">kanri_flg: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="kanri_flg" type="text" id="kanri_flg" value="{{$user->kanri_flg}}">
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
    