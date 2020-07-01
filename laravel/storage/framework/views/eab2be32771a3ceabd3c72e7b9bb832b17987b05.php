        
        <?php $__env->startSection("content"); ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">post_file</div>
                            <div class="panel-body">
                            
                            
                                <a href="<?php echo e(url("post_file/create")); ?>" class="btn btn-success btn-sm" title="Add New post_file">
                                    Add New
                                </a>

                                <form method="GET" action="<?php echo e(url("post_file")); ?>" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>post_id</th><th>file</th><th>update_at</th></tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $post_file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <tr>

                                            <td><?php echo e($item->id); ?> </td>

                                            <td><?php echo e($item->post_id); ?> </td>

                                            <td><?php echo e($item->file); ?> </td>

                                            <td><?php echo e($item->update_at); ?> </td>
  
                                                <td><a href="<?php echo e(url("/post_file/" . $item->id)); ?>" title="View post_file"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="<?php echo e(url("/post_file/" . $item->id . "/edit")); ?>" title="Edit post_file"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/post_file/<?php echo e($item->id); ?>" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> <?php echo $post_file->appends(["search" => Request::get("search")])->render(); ?> </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>
    
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>