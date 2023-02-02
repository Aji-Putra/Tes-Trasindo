@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Data Pemesanan Tiket Konser</div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepone</th>
                            <th scope="col">Status Cekin</th>
                            </tr>
                        </thead>
                        @foreach ($laporan as $index => $l )
                        <tbody>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $l->nama }}</td>
                            <td>{{ $l->umur }}</td>
                            <td>{{ $l->email }}</td>
                            <td>{{ $l->no_telepone }}</td>
                            <td>{{ $l->status }}</td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection