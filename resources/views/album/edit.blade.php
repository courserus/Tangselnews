@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Album</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('album.update', $album->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Album</label>
                <input type="text" name="judul" id="judul" class="form-control"
                    value="{{ old('judul', $album->judul) }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $album->deskripsi) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('album.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
