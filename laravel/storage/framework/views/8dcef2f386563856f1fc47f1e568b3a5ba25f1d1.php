        
        <?php $__env->startSection("content"); ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">user</div>
                            <div class="panel-body">
                            
                            
                                <a href="<?php echo e(url("user/create")); ?>" class="btn btn-success btn-sm" title="Add New user">
                                    Add New
                                </a>

                                <form method="GET" action="<?php echo e(url("user")); ?>" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>user_name</th><th>lid</th><th>lpw</th><th>email</th><th>class</th><th>avatar</th><th>self_introducion</th><th>sns1</th><th>sns2</th><th>sns3</th><th>kanri_flg</th></tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <tr>

                                            <td><?php echo e($item->id); ?> </td>

                                            <td><?php echo e($item->user_name); ?> </td>

                                            <td><?php echo e($item->lid); ?> </td>

                                            <td><?php echo e($item->lpw); ?> </td>

                                            <td><?php echo e($item->email); ?> </td>

                                            <td><?php echo e($item->class); ?> </td>

                                            <td><?php echo e($item->avatar); ?> </td>

                                            <td><?php echo e($item->self_introducion); ?> </td>

                                            <td><?php echo e($item->sns1); ?> </td>

                                            <td><?php echo e($item->sns2); ?> </td>

                                            <td><?php echo e($item->sns3); ?> </td>

                                            <td><?php echo e($item->kanri_flg); ?> </td>
  
                                                <td><a href="<?php echo e(url("/user/" . $item->id)); ?>" title="View user"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="<?php echo e(url("/user/" . $item->id . "/edit")); ?>" title="Edit user"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/user/<?php echo e($item->id); ?>" class="form-horizontal" style="display:inline;">
                                                        <?php echo e(csrf_field()); ?>

                                                        
                                                        <?php echo e(method_field("DELETE")); ?>

                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> <?php echo $user->appends(["search" => Request::get("search")])->render(); ?> </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>
    
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>