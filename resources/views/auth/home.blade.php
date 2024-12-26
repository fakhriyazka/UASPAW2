@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <div class="alert alert-success">
                    @if ($message = Session::get('success'))
                        {{ $message }}
                    @else
                        You are logged in!
                    @endif
                </div>
                <div>
                <p>
                    Apa yang ingin anda lihat?
                </p>
                <a class="btn btn-sm btn-info"href="{{ route('products') }}">Data Produk</a>
                <a class="ml-10 btn btn-sm btn-info" href="{{ route('transactions.index') }}">Data Transaksi</a>
                </div>              
            </div>
        </div>
    </div>    
</div>
    
@endsection