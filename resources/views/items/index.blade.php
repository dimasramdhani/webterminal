<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>JADWAL KEBERANGKATAN</h2>
	
 
	
	
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
		@foreach($jadwalbis as $p)
		<tr>
			<td>{{ $p->jadwal_terminal }}</td>
			<td>{{ $p->jadwal_singgah }}</td>
			<td>{{ $p->jadwal_pergi }}</td>
			<td>{{ $p->jadwal_keterangan }}</td>
			
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>