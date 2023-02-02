@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center"> Detail Tiket Pelanggan</h2>
                </div>
                <div class="card-body">
                    @forelse ($data as $id )
                    <form >
                        
                        <div class="form-group">
                            <label for="">ID Pelanggan</label>
                            <input type="number" class="form-control" value="{{ $id->id }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pelanggan</label>
                            <input type="text" class="form-control " name="nama" id="nama" value="{{ $id->nama }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur" value="{{ $id->umur }}" disabled >
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input  class="form-control" type="string" name="email" id="email" value="{{ $id->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepone</label>
                            <input  class="form-control" type="number" name="no_telepone" id="no_telepone" value="{{ $id->no_telepone }}" disabled>
                        </div>
                        <a href="/" class="btn btn-sm btn-primary  mt-2">Back</a>
                    </form>
                    @empty
                        
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection