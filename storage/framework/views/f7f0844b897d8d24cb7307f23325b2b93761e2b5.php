<div class="hk-menu">
    <!-- Brand -->
    <div class="menu-header">
        <span>
            <a class="navbar-brand" href="index.html">
                <img class="brand-img img-fluid" src="<?php echo e(asset('dist/img/brand-sm.svg')); ?>" alt="brand" />
                <img class="brand-img img-fluid" src="<?php echo e(asset('dist/img/Jampack.svg')); ?>" alt="brand" />
            </a>
            <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                <span class="icon">
                    <span class="svg-icon fs-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="10" y1="12" x2="20" y2="12"></line>
                            <line x1="10" y1="12" x2="14" y2="16"></line>
                            <line x1="10" y1="12" x2="14" y2="8"></line>
                            <line x1="4" y1="4" x2="4" y2="20"></line>
                        </svg>
                    </span>
                </span>
            </button>
        </span>
    </div>
    <!-- /Brand -->

    <!-- Main Menu -->
    <div data-simplebar class="nicescroll-bar">
        <div class="menu-content-wrap">
            <div class="menu-group">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <rect x="4" y="4" width="16" height="4" rx="1" />
                                        <rect x="4" y="12" width="6" height="8" rx="1" />
                                        <line x1="14" y1="12" x2="20" y2="12" />
                                        <line x1="14" y1="16" x2="20" y2="16" />
                                        <line x1="14" y1="20" x2="20" y2="20" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Dashboard</span>
                            <span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
                        </a>
                    </li>
                </ul>	
            </div>
            <div class="menu-gap"></div>
            <div class="menu-group">
                <div class="nav-header">
                    <span>Apps</span>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <?php if(auth()->guard()->check()): ?>
                            
                        <?php if( \Auth::user()->role == 'admin'): ?>
                        
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                        <line x1="12" y1="11" x2="12" y2="11.01" />
                                        <line x1="8" y1="11" x2="8" y2="11.01" />
                                        <line x1="16" y1="11" x2="16" y2="11.01" />
                                    </svg>
                                </span>
                            </span>
                            
                            <span class="nav-link-text">Sales</span>
                        </a>
                        <ul id="dash_chat" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/info"><span class="nav-link-text">Users</span></a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('createUser')); ?>"><span class="nav-link-text">Create Salesperson</span></a>
                                    </li>
                                </ul>	
                            </li>	
                        </ul>	
                        <?php else: ?>
                        <div></div>
                            
                        <?php endif; ?> 
                        <?php endif; ?>

                    </li>	
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chatpop">
                            <span class="nav-icon-wrap">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                                        <line x1="12" y1="12" x2="12" y2="12.01" />
                                        <line x1="8" y1="12" x2="8" y2="12.01" />
                                        <line x1="16" y1="12" x2="16" y2="12.01" />
                                    </svg>
                                </span>
                            </span>
                            
                            <span class="nav-link-text">Products</span>
                            
                        </a>
                        <ul id="dash_chatpop" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('product.index')); ?>"><span class="nav-link-text">Update Products</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('product.create')); ?>"><span class="nav-link-text">Create Products</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('category.create')); ?>"><span class="nav-link-text">Attribute Create</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('category.index')); ?>"><span class="nav-link-text">Attribute Update</span></a>
                                    </li>
                                </ul>	
                            </li>	
                        </ul>	
                    </li>	
                        
                    
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_scrumboard">
                            <span class="nav-icon-wrap position-relative">
                                <span class="badge badge-sm badge-primary badge-sm badge-pill position-top-end-overflow">3</span>
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="4" y1="4" x2="10" y2="4" />
                                        <line x1="14" y1="4" x2="20" y2="4" />
                                        <rect x="4" y="8" width="6" height="12" rx="2" />
                                        <rect x="14" y="8" width="6" height="6" rx="2" />
                                    </svg>
                                </span>
                            </span>
                            <span class="nav-link-text">Venders</span>
                        </a>
                        <ul id="dash_scrumboard" class="nav flex-column collapse  nav-children">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('vendor.index')); ?> "><span class="nav-link-text">Update Venders</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('vendor.create')); ?>"><span class="nav-link-text">Create Venders</span></a>
                                    </li>
                                </ul>	
                            </li>	
                        </ul>	
                    </li>


                    
                </ul>
            </div>
            
            
        </div>
    </div>
    <!-- /Main Menu -->
</div>
<div id="hk_menu_backdrop" class="hk-menu-backdrop"></div><?php /**PATH /home/ayodhya/Desktop/websales/resources/views/includes/dashsidenav.blade.php ENDPATH**/ ?>