<?php $__env->startSection('content'); ?>
    <?php if(count($errors) > 0): ?>
        <ul class="list-group">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item text-danger">
                    <?php echo e($error); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                        Adding Student
                    </div>
                    <div class="card-body">
                        <form action="/student/add" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="course">Course</label>
                                <input type="course" name="course" id="course" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="address" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile No</label>
                                <input type="number" name="mobile" id="mobile" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/zack/Documents/Api-laravel/resources/views/addStu.blade.php */ ?>