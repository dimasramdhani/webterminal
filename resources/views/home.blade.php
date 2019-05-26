@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda Telah Masuk!
                    <br>
                    <br>
                    <li>
            <a href="/create" class="btn btn-primary btn-lg">INPUT JADWAL BIS</a>
        </li>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
