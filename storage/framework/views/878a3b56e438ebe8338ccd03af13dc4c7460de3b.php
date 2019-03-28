<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h1>Laravel CRUD: Using Resource controller with Eloquent Model</h1>
    </div><br>

    <div class="row">
        <a href="/addStu" class="btn btn-primary btn-md">Add Student</a>
    </div><br>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Address</th>
                    <th>Mobile no</th>
                    <th>action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($student->id); ?></td>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->course); ?></td>
                        <td><?php echo e($student->address); ?></td>
                        <td><?php echo e($student->mobile); ?></td>
                        <td><a href="<?php echo e(route('student.edit', ['id' => $student->id])); ?>" class='btn btn-success btn-md'>edit</a></td>
                        <td><a href="<?php echo e(route('student.delete', ['id' => $student->id])); ?>" class='btn btn-danger btn-md'>delete</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/zack/Documents/Api-laravel/resources/views/student_list.blade.php */ ?>