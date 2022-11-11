<div class="hk-pg-header pg-header-wth-tab pt-7">
                    
    <ul class="nav nav-line nav-light nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#">
                <span class="nav-link-text">Overview</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#">
                <span class="nav-link-text">Analytics</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#">
                <span class="nav-link-text">Operations</span>
            </a>
        </li>
    </ul>
</div>
<div class="card-body">
    <div class="contact-list-view">
        <table id="datable_1" class="table nowrap w-100 mb-5">
            <thead>
                <tr>
                    <th><span class="form-check fs-6 mb-0">
                        <input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
                        <label class="form-check-label" for="customCheck1"></label>
                    </span></th>
                    <th>Name</th>
                    <th class="w-25">Email</th>
                    <th>Join Date</th>
                    
                    
                </tr>
                
            </thead>
            <tbody>
                <?php if($users): ?>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                

                    
                
                <tr>
                    <td>
                    </td>
                    <td>
                        <div class="media align-items-center">
                            <div class="media-head me-2">
                                <div class="avatar avatar-xs avatar-rounded">
                                    <img src="<?php echo e(asset('dist/img/logo-avatar-1.png')); ?>" alt="user" class="avatar-img">
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="text-high-em text-uppercase"><?php echo e($user->name); ?> </div> 
                                <div class="fs-7"><a href="#" class="table-link-text link-medium-em"></a></div> 
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="progress-lb-wrap">
                            <div class="d-flex align-items-center">
                                
                                    <div class="text-high-em"><?php echo e($user->email); ?> </div>  
                                
                               
                            </div>
                        </div>
                    </td>
                    <td><?php echo e($user->created_at); ?></td>
                    <td>
                        
                        
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <form action="<?php echo e(route('user.edit', $user->id)); ?>" method="get">
                                <?php echo csrf_field(); ?>
                                
                            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
                            </form>
                            <form action="<?php echo e(route('delete', ['id'=>$user->id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></button>
                        </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div>Empty</div>
                <?php endif; ?>
               
                
                    
                
                    
                
                
            </tbody>
        </table>
    </div>
</div><?php /**PATH /home/ayodhya/Desktop/websales/resources/views/admindash/users.blade.php ENDPATH**/ ?>