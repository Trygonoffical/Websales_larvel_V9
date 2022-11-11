<!DOCTYPE html>
<!-- 
Jampack
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">

<!-- Mirrored from hencework.com/theme/jampack/classic/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Oct 2022 18:50:47 GMT -->
<head>
    <!-- Meta Tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | Jampack - Admin CRM Dashboard Template</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>
    
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- CSS -->
    <link href="<?php echo e(asset('dist/css/style.css')); ?>" rel="stylesheet" type="text/css">
</head>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper hk-pg-auth" data-footer="simple">
		<!-- Main Content -->
		<div class="hk-pg-wrapper py-0">
			<div class="hk-pg-body py-0">
				<!-- Container -->
				<div class="container-fluid">
					<!-- Row -->
					<div class="row auth-split">
						<div class="col-xl-5 col-lg-6 col-md-5 d-md-block d-none bg-primary-dark-3 bg-opacity-85 position-relative">
							<img class="bg-img" src="dist/img/signup-bg.jpg" alt="bg-img">
							<div class="auth-content py-8">
								<div class="row">
									<div class="col-xxl-8 mx-auto">
										<div class="text-center">
											<h3 class="text-white mb-2">High quality Bootstrap template for your next web project.</h3>
											<p class="text-white">Start your <u>14 Days FREE</u> trial.</p>
										</div>
										<ul class="list-icon text-white mt-4">
											<li class="mb-1"><p><i class="ri-check-fill"></i><span>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</span></p></li>
											<li class="mb-1"><p><i class="ri-check-fill"></i><span>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</span></p></li>
										</ul>
										<div class="row gx-3 mt-7">
											<div class="col-lg-6">
												<div class="card card-shadow">
													<img class="card-img-top" src="<?php echo e(asset('dist/img/slide1.jpg')); ?>" alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-uppercase">Help Centre</h5>
														<p class="card-text">This is a wider card with supporting text.</p>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="card card-shadow">
													<img class="card-img-top" src="<?php echo e(asset('dist/img/slide2.jpg')); ?>" alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title text-uppercase">Research Centre</h5>
														<p class="card-text">This is a wider card with supporting text.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<p class="p-xs text-white credit-text opacity-55">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="link-white"><u>OUCH</u></a></p>
						</div>
						<div class="col-xl-7 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
							<div class="auth-content flex-column pt-8 pb-md-8 pb-13">
								<div class="text-center mb-7">
									<a class="navbar-brand me-0" href="index.html">
										<img class="brand-img d-inline-block" src="dist/img/logo-light.png" alt="brand">
									</a>
								</div>
                                
								<form method="POST" action="<?php echo e(route('register')); ?>" class="w-100">
                                    <?php echo csrf_field(); ?>
									<div class="row">
										<div class="col-xxl-5 col-xl-7 col-lg-10 mx-auto">
											<h4 class="text-center mb-4">Sign Up to Jampack</h4>
											
											<div class="row gx-3">
												<div class="form-group col-lg-12">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.label','data' => ['for' => 'name','value' => ''.e(__('Name')).'','class' => 'form-label']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'name','value' => ''.e(__('Name')).'','class' => 'form-label']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.input','data' => ['id' => 'name','class' => 'form-control','type' => 'text','name' => 'name','value' => old('name'),'required' => true,'autofocus' => true,'autocomplete' => 'name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'name','class' => 'form-control','type' => 'text','name' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('name')),'required' => true,'autofocus' => true,'autocomplete' => 'name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
													
													
												</div>
												<div class="form-group col-lg-12">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.label','data' => ['for' => 'email','value' => ''.e(__('Email')).'','class' => 'fonm-label']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','value' => ''.e(__('Email')).'','class' => 'fonm-label']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.input','data' => ['id' => 'email','class' => 'form-control','type' => 'email','name' => 'email','value' => old('email'),'required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'email','class' => 'form-control','type' => 'email','name' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email')),'required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
													
                                                    
												</div>
												
												<div class="form-group col-lg-12">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.label','data' => ['for' => 'password','value' => ''.e(__('Password')).'','class' => 'form-label']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password','value' => ''.e(__('Password')).'','class' => 'form-label']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
													<div class="input-group password-check">
														<span class="input-affix-wrapper affix-wth-text">
															
                                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.input','data' => ['id' => 'password','class' => 'form-control','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'new-password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'password','class' => 'form-control','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'new-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

															<a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
																<span>Show</span>
																<span class="d-none">Hide</span>
															</a>
														</span>
													</div>
												</div>

                                                <div class="form-group col-lg-12">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.label','data' => ['for' => 'password_confirmation','value' => ''.e(__('Confirm Password')).'','class' => 'form-label']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => ''.e(__('Confirm Password')).'','class' => 'form-label']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

													<div class="input-group password-check">
														<span class="input-affix-wrapper affix-wth-text">
															
                                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.input','data' => ['id' => 'password_confirmation','class' => 'form-control','type' => 'password','name' => 'password_confirmation','required' => true,'autocomplete' => 'new-password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'password_confirmation','class' => 'form-control','type' => 'password','name' => 'password_confirmation','required' => true,'autocomplete' => 'new-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>


															
														</span>
													</div>
												</div>
											</div>
											
											<div class="form-check form-check-sm mb-3">
												<input type="checkbox" class="form-check-input" id="logged_in" checked>
												<label class="form-check-label text-muted fs-8" for="logged_in">By creating an account you specify that you have read and agree with our <a href="#">Tearms of use</a> and <a href="#">Privacy policy</a>. We may keep you inform about latest updates through our default <a href="#">notification settings</a></label>
											</div>
											<button href="<?php echo e(route('login')); ?>" class="btn btn-primary btn-rounded btn-uppercase btn-block"> <?php echo e(__('Register')); ?></button>
											<p class="p-xs mt-2 text-center">Already a member ? <a href="<?php echo e(route('login')); ?>"><u><?php echo e(__('Already registered?')); ?></u></a></p>
										</div>
									</div>
								</form>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.validation-errors','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

  

							</div>
							<!-- Page Footer -->
							<div class="hk-footer border-0">
								<footer class="container-xxl footer">
									<div class="row">
										<div class="col-xl-8 text-center">
											<p class="footer-text pb-0"><span class="copy-text">Jampack © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
										</div>
									</div>
								</footer>
							</div>
							<!-- / Page Footer -->
						</div>
					</div>
					<!-- /Row -->
				</div>
				<!-- /Container -->
			</div>
			<!-- /Page Body -->
		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->

	<!-- jQuery -->
    <script src="<?php echo e(asset('vendors/jquery/dist/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core JS -->
   	<script src="<?php echo e(asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- FeatherIcons JS -->
    <script src="<?php echo e(asset('dist/js/feather.min.js')); ?>"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?php echo e(asset('dist/js/dropdown-bootstrap-extended.js')); ?>"></script>

	<!-- Simplebar JS -->
	<script src="<?php echo e(asset('vendors/simplebar/dist/simplebar.min.js')); ?>"></script>
	
	<!-- Init JS -->
	<script src="<?php echo e(asset('dist/js/init.js')); ?>"></script>
</body>

<!-- Mirrored from hencework.com/theme/jampack/classic/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Oct 2022 18:50:47 GMT -->
</html><?php /**PATH /home/ayodhya/Desktop/websales/resources/views/auth/register.blade.php ENDPATH**/ ?>