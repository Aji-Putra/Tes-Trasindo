@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center"> Form Edit Data Pelanggan</h2>
                </div>
                <div class="card-body">
                    <form action="/pesanan/update/{{ $pesanan->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $pesanan->id }}">
                        <div class="form-group">
                            <label for="">Nama Pelanggan</label>
                            <input type="text" class="form-control " name="nama" id="nama" value="{{ $pesanan->nama }}" >
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur" value="{{ $pesanan->umur }}" >
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input  class="form-control" type="string" name="email" id="email" value="{{ $pesanan->email }}" >
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepone</label>
                            <input  class="form-control" type="number" name="no_telepone" id="no_telepone" value="{{ $pesanan->no_telepone }}" >
                        </div>
                        <a href="/datapelanggan" class="btn btn-sm btn-primary  mt-2">Cancel</a>
                        <button type="sumbit" class="btn btn-sm btn-dark mt-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection