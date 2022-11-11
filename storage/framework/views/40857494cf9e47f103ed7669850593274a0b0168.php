<?php $__env->startSection('content'); ?>
    





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
                    <th class="w-25">Category</th>
                    <th>Attribute_value</th>
                    <th>Price/Stock</th>
                    <th>Edit/Delete</th>
                </tr>
                
            </thead>
            <tbody>
                <?php if($products): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                

                    
                
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
                                <div class="text-high-em text-uppercase"><?php echo e($product->Name); ?> </div> 
                                <div class="fs-7"><a href="#" class="table-link-text link-medium-em"></a></div> 
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="progress-lb-wrap">
                            <div class="d-flex align-items-center">
                                
                                    <div class="text-high-em"><?php echo e($product->Category); ?> </div>  
                                
                               
                            </div>
                        </div>
                    </td>
                    <td><?php echo e($product->Attribute_value); ?></td>
                    <td>
                        <span class="badge badge-soft-secondary  my-1  me-2"> <?php echo e($product->price); ?></span>
                        <span class="badge badge-soft-secondary my-1  me-2"><?php echo e($product->Stock); ?></span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <form action="<?php echo e(route('product.edit', ['product'=>$product->id])); ?>" method="get">
                                <?php echo csrf_field(); ?>
                                
                            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></button>
                            </form>
                            <form action="<?php echo e(route('product.destroy', ['product'=> $product->id])); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" class="p-1 btn btn-icon btn-rounded flush-soft-hover rounded" value="Del"></input>
                            
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
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboardlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ayodhya/Desktop/websales/resources/views/product/viewproduct.blade.php ENDPATH**/ ?>