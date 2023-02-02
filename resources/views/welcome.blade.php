@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
                  <a href="/detail" class="btn-sm btn btn-primary float-end">Detail tiket</a>
              </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Pembelian tiket konser</h3>
                    <h4>Rp.200.000</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="/buy">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Lengkap</label>
                          <input type="nama" class="form-control" id="nama" name="nama" >
                        </div>
                        <div class="mb-3">
                          <label for="umur" class="form-label">Umur</label>
                          <input type="number" class="form-control" id="umur" name="umur">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                          </div>
                          <div class="mb-3">
                            <label for="notelepon" class="form-label">Nomor Telepone</label>
                            <input type="number" class="form-control" id="no_telepone" name="no_telepone">
                          </div>
                        <button type="submit" class="btn btn-success">Beli Tiket</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection