@extends('layouts.app')

@section('content')
<div class="p-5">
    <h1 class="mb-4 text-center">ERRESKATE BERRIA SORTU</h1>

    <form action="{{ route('erreskateak.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="izena" class="form-label">Izena:</label>
            <input type="text" name="izena" id="izena" class="form-control" required>
            {{-- Balidazio mezua --}}
            @error("izena")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deskribapena" class="form-label">Deskribapena</label>
            <textarea name="deskribapena" id="deskribapena" class="form-control"></textarea>
            {{-- Balidazio mezua --}}
            @error("deskribapena")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" required>
            {{-- Balidazio mezua --}}
            @error("data")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('erreskateak.index') }}" class="btn btn-secondary me-2">ATZERA</a>
            <button type="submit" class="btn btn-success">SORTU</button>
        </div>
    </form>
</div>
@endsection
