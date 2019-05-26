<?php $__env->startSection('content'); ?>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>KEBERANGKATAN DARI TERMINAL CILEUNGSI</h1>
            <?php if(Session::has('alert-success')): ?>
                <div class="alert alert-success">
                    <strong><?php echo e(\Illuminate\Support\Facades\Session::get('alert-success')); ?></strong>
                </div>
            <?php endif; ?>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                     <th>No.</th>
                    <th>Tujuan</th>
                    <th>Waktu Berangkat</th>
                    
                    <th>Armada Bis</th>
                    <th>Tarif</th>
                    <th>Kuota</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php  $no = 1;  ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($datas->nama); ?></td>
                        <td><?php echo e($datas->email); ?></td>
                        
                        <td><?php echo e($datas->alamat); ?></td>
                      <td><?php echo e($datas->tarif); ?></td>
                      <td><?php echo e($datas->kuota); ?></td>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>



        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>