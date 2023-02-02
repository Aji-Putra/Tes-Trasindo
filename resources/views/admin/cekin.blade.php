@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                
                <div class="card-header">
                    <div class="card-title">Data Pemesanan Tiket Konser</div>
                    <form action="/cari" method="GET">
                        <div class="">
                            <label for="cari" class="form-label">Cari ID pelanggan</label>
                            <input type="text" class="form-control" id="cari" name="cari" >
                          </div>
                        <input type="submit" value="Cari" class="btn btn-sm btn-primary">
                      </form>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepone</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        
                        @foreach ($pemesan as  $pesan )
                        
                        <tbody>
                            <td>{{ $pesan->nama }}</td>
                            <td>{{ $pesan->umur }}</td>
                            <td>{{ $pesan->email }}</td>
                            <td>{{ $pesan->no_telepone }}</td>
                            <td>
                                <a href="/status/{{ $pesan->id }}" class="btn btn-sm btn-warning">Update Status</a>
                            </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection