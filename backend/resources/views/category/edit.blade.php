
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit category #{{ $category->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("category") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/category/{{ $category->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$category->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="category_name" class="col-md-4 control-label">category_name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="category_name" type="text" id="category_name" value="{{$category->category_name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="update_at" class="col-md-4 control-label">update_at: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="update_at" type="date" id="update_at" value="{{$category->update_at}}">
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
    