
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">user {{ $user->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("user") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("user") ."/". $user->id . "/edit" }}" title="Edit user"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/user/{{ $user->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$user->id}} </td></tr>
										<tr><th>user_name</th><td>{{$user->user_name}} </td></tr>
										<tr><th>lid</th><td>{{$user->lid}} </td></tr>
										<tr><th>lpw</th><td>{{$user->lpw}} </td></tr>
										<tr><th>email</th><td>{{$user->email}} </td></tr>
										<tr><th>class</th><td>{{$user->class}} </td></tr>
										<tr><th>avatar</th><td>{{$user->avatar}} </td></tr>
										<tr><th>self_introducion</th><td>{{$user->self_introducion}} </td></tr>
										<tr><th>sns1</th><td>{{$user->sns1}} </td></tr>
										<tr><th>sns2</th><td>{{$user->sns2}} </td></tr>
										<tr><th>sns3</th><td>{{$user->sns3}} </td></tr>
										<tr><th>kanri_flg</th><td>{{$user->kanri_flg}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    