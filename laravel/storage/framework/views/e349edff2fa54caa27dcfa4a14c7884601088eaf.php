        
        <?php $__env->startSection("content"); ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">transaction</div>
                            <div class="panel-body">
                            
                            
                                <a href="<?php echo e(url("transaction/create")); ?>" class="btn btn-success btn-sm" title="Add New transaction">
                                    Add New
                                </a>

                                <form method="GET" action="<?php echo e(url("transaction")); ?>" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>post_id</th><th>user_id</th></tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <tr>

                                            <td><?php echo e($item->id); ?> </td>

                                            <td><?php echo e($item->post_id); ?> </td>

                                            <td><?php echo e($item->user_id); ?> </td>
  
                                                <td><a href="<?php echo e(url("/transaction/" . $item->id)); ?>" title="View transaction"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="<?php echo e(url("/transaction/" . $item->id . "/edit")); ?>" title="Edit transaction"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/transaction/<?php echo e($item->id); ?>" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> <?php echo $transaction->appends(["search" => Request::get("search")])->render(); ?> </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>
    
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>