@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-5">
            <a href="/kategori" class="btn btn-secondary">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                    @csrf

                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" autofocus autocomplete="off"
                            value="{{ $kategori->nama_kategori }}">
                        @error('nama_kategori')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
