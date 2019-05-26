@extends('baseuser')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Masukan Jadwal Keberangkatan</h1>
            <hr>
            <form action="{{ route('kontak.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Terminal Tujuan:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Waktu Berangkat:</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
              
                <div class="form-group">
                    <label for="alamat">Armada:</label>
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">Tarif :</label>
                    <textarea class="form-control" id="tarif" name="tarif"></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">Kuota:</label>
                    <textarea class="form-control" id="kuota" name="kuota"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection