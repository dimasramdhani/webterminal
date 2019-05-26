<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 
	<h2>JADWAL KEBERANGKATAN BIS</h2>
	
 
	
	
	<br/>
	<br/>
 ARMADA BIS : MGI
	<table border="1">
		<tr>
			<th>TERMINAL</th>
			<th>Waktu Tiba</th>
			<th>Waktu Berangkat</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
		<?php $__currentLoopData = $jadwalbis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->jadwal_terminal); ?></td>
			<td><?php echo e($p->jadwal_singgah); ?></td>
			<td><?php echo e($p->jadwal_pergi); ?></td>
			<td><?php echo e($p->jadwal_keterangan); ?></td>
			
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<br>
<br>
	ARMADA BIS : MGI
	<table border="1">
		<tr>
			<th>TERMINAL</th>
			<th>Waktu Tiba</th>
			<th>Waktu Berangkat</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
		<?php $__currentLoopData = $jadwalbis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->jadwal_terminal); ?></td>
			<td><?php echo e($p->jadwal_singgah); ?></td>
			<td><?php echo e($p->jadwal_pergi); ?></td>
			<td><?php echo e($p->jadwal_keterangan); ?></td>
			
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 
 <?php $__env->startSection('content'); ?>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Pemohon iklan</h1>
            <?php if(Session::has('alert-success')): ?>
                <div class="alert alert-success">
                    <strong><?php echo e(\Illuminate\Support\Facades\Session::get('alert-success')); ?></strong>
                </div>
            <?php endif; ?>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
			<th>TERMINAL</th>
			<th>Waktu Tiba</th>
			<th>Waktu Berangkat</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
                </thead>
                <tbody>
                
                    <tr>
                        <?php $__currentLoopData = $jadwalbis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->jadwal_terminal); ?></td>
			<td><?php echo e($p->jadwal_singgah); ?></td>
			<td><?php echo e($p->jadwal_pergi); ?></td>
			<td><?php echo e($p->jadwal_keterangan); ?></td>
			
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
<?php $__env->stopSection(); ?>
 
</body>
</html>