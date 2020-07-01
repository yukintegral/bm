
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New post</div>
                            <div class="panel-body">
                                <a href="{{ url("/post") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/post/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="user_id" type="text" id="user_id" value="{{old('user_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="content" class="col-md-4 control-label">content: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="content" type="text" id="content" value="{{old('content')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="category_id" class="col-md-4 control-label">category_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="category_id" type="text" id="category_id" value="{{old('category_id')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="post_name" class="col-md-4 control-label">post_name: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="post_name" type="text" id="post_name" value="{{old('post_name')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="price" class="col-md-4 control-label">price: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="price" type="text" id="price" value="{{old('price')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="post_status_id" class="col-md-4 control-label">post_status_id: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="post_status_id" type="text" id="post_status_id" value="{{old('post_status_id')}}">
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
    