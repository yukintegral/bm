
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">categorie {{ $categorie->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("categorie") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("categorie") ."/". $categorie->id . "/edit" }}" title="Edit categorie"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/categorie/{{ $categorie->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$categorie->id}} </td></tr>
										<tr><th>category_name</th><td>{{$categorie->category_name}} </td></tr>
										<tr><th>update_at</th><td>{{$categorie->update_at}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    