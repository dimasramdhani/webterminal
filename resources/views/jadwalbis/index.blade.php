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
		@foreach($jadwalbis as $p)
		<tr>
			<td>{{ $p->jadwal_terminal }}</td>
			<td>{{ $p->jadwal_singgah }}</td>
			<td>{{ $p->jadwal_pergi }}</td>
			<td>{{ $p->jadwal_keterangan }}</td>
			
		</tr>
		@endforeach
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
		@foreach($jadwalbis as $p)
		<tr>
			<td>{{ $p->jadwal_terminal }}</td>
			<td>{{ $p->jadwal_singgah }}</td>
			<td>{{ $p->jadwal_pergi }}</td>
			<td>{{ $p->jadwal_keterangan }}</td>
			
		</tr>
		@endforeach
	</table>
 
 @section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Pemohon iklan</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
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
                        @foreach($jadwalbis as $p)
		<tr>
			<td>{{ $p->jadwal_terminal }}</td>
			<td>{{ $p->jadwal_singgah }}</td>
			<td>{{ $p->jadwal_pergi }}</td>
			<td>{{ $p->jadwal_keterangan }}</td>
			
		</tr>
		@endforeach
                    </tr>
                
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
 
</body>
</html>