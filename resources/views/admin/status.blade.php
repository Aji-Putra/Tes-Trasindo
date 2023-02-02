@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center"> Form Update Status Tiket</h2>
                </div>
                <div class="card-body">
                    <form action="/update/status/{{ $pesanan->id }}" method="POST" >
                        @csrf
                        <input type="hidden" name="id" value="{{ $pesanan->id }}">
                        <input type="hidden" name="nama" value="{{ $pesanan->nama }}">
                        <input type="hidden" name="umur" value="{{ $pesanan->umur }}">
                        <input type="hidden" name="email" value="{{ $pesanan->email }}">
                        <input type="hidden" name="no_telepone" id="" value="{{ $pesanan->no_telepone }}">
                        <div class="form-group">
                            <label for="">Status Tiket Pilih cekin/belum_cekin</label>
                            <input type="text" class="form-control " name="status" id="status" value="{{ $pesanan->status }}" >
                        </div>  
                        <a href="/cekin" class="btn btn-sm btn-primary  mt-2">Cancel</a>
                        <button type="sumbit" class="btn btn-sm btn-dark mt-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection