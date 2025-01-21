@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tripulante berri bat sortu</h1>

    <form action="{{ route('tripulanteak.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="izena" class="form-label">Izena</label>
            <input type="text" name="izena" id="izena" class="form-control" value="{{ old('izena') }}" required>
            {{-- Balidazio mezua --}}
            @error("izena")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="abizena" class="form-label">Abizena</label>
            <input type="text" name="abizena" id="abizena" class="form-control" value="{{ old('abizena') }}" required>
            {{-- Balidazio mezua --}}
            @error("abizena")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
            <div class="mb-3">
                <label for="eginkizuna" class="form-label">Eginkizuna</label>
                <select name="eginkizuna" id="eginkizuna" class="form-control" required>
                    <option value="Kapitaina">Kapitaina</option>
                    <option value="Makinen Burua">Makinen Burua</option>
                    <option value="Mekanikoa">Mekanikoa</option>
                    <option value="Zubi Ofiziala">Zubi Ofiziala</option>
                    <option value="Marinelak">Marinelak</option>
                    <option value="Medikua">Medikua</option>
                    <option value="Erizaintzako pertsona">Erizaintzako pertsona</option>
                </select>
            </div>
        <div class="mb-3">
            <label for="sartze_data" class="form-label">Sartze data</label>
            <input type="date" name="sartze_data" id="sartze_data" class="form-control" value="{{ old('sartze_data') }}" required>
            {{-- Balidazio mezua --}}
            @error("sartze_data")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="baja_data" class="form-label">Baja data</label>
            <input type="date" name="baja_data" id="baja_data" class="form-control" value="{{ old('baja_data') }}">
            {{-- Balidazio mezua --}}
            @error("baja_data")
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="bidaiak" class="form-label">Bidaiak</label>
            <select name="bidaiak[]" id="bidaiak" class="form-control" multiple>
                @foreach($bidaiak as $bidaia)
                    <option value="{{ $bidaia->id }}">{{ $bidaia->helmuga }} ({{ $bidaia->data }})</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route("tripulanteak.index") }}" class="btn btn-st btn-secondary me-2">ATZERA</a>
            <button type="submit" class="btn btn-success">SORTU</button>
        </div>
    </form>
</div>
@endsection
