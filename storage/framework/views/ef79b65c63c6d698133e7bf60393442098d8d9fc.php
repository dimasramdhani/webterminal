<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	
	
	<br/>
	<br/>
 
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
 
 
</body>
</html>