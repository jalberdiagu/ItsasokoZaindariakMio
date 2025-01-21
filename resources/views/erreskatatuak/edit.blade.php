@extends('layouts.app')

@section('content')
<div class="p-5">
    <h1 class="text-center mb-4">EDITATU ERRESKATATUAK</h1>

    <form action="{{ route('erreskatatuak.update', $erreskatatuak->id) }}" method="POST" class="bg-light p-5">
        @csrf
        @method('PUT') <!-- Esto indica que estamos realizando una actualización -->

        <div class="mb-3">
            <label for="izena" class="form-label">Izena</label>
            <input type="text" class="form-control" id="izena" name="izena" value="{{ old('izena', $erreskatatuak->izena) }}" required>
            {{-- Balidazio mezua --}}
            @error("izena")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="abizena" class="form-label">Abizena</label>
            <input type="text" class="form-control" id="abizena" name="abizena" value="{{ old('abizena', $erreskatatuak->abizena) }}" required>
            {{-- Balidazio mezua --}}
            @error("abizena")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="adina" class="form-label">Adina</label>
            <input type="number" class="form-control" id="adina" name="adina" value="{{ old('adina', $erreskatatuak->adina) }}" required>
            {{-- Balidazio mezua --}}
            @error("adina")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="erreskateak_id" class="form-label">Erreskateak</label>
            <select class="form-control" id="erreskateak_id" name="erreskateak_id" required>
                <option value="">Selecciona un Erreskateak</option>
                @foreach ($erreskateak as $erres)
                    <option value="{{ $erres->id }}" {{ $erres->id == $erreskatatuak->erreskateak_id ? 'selected' : '' }}>
                        {{ $erres->izena }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route("erreskatatuak.index") }}" class="btn btn-st btn-secondary me-2">ATZERA</a>
            <button type="submit" class="btn btn-success btn-st">EDITATU</button>
        </div>
    </form>
</div>
@endsection
