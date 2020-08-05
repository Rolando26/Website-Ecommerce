@extends('layouts.admin')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Aktivitas Toko</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Omset</small>
                                        <br>
                                        <strong class="h4">Rp {{ number_format($subtotal) }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Jumlah Customer</small>
                                        <br>
                                        <strong class="h4">{{ $customers }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Pemesanan</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Pesanan Baru</small>
                                        <br>
                                        <strong class="h4">{{ $new }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Perlu Dikonfirmasi</small>
                                        <br>
                                        <strong class="h4">{{ $confirm }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Perlu Diproses</small>
                                        <br>
                                        <strong class="h4">{{ $process }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Perlu Dikirim</small>
                                        <br>
                                        <strong class="h4">{{ $shipping }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-success">
                                        <small class="text-muted">Transaksi Selesai</small>
                                        <br>
                                        <strong class="h4">{{ $done }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection