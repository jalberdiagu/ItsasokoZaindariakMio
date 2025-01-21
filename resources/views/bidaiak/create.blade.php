@extends("layouts.app")

@section("content")
    <div class="p-5">
        <h1 class="text-center mb-5">BIDAI BERRIAK SORTU</h1>
        <form action="{{ route('bidaiak.store') }}" method="POST" class="bg-light p-5">
            @csrf
            <div class="mb-3">
                <label for="helmuga" class="form-label">Helmuga</label>
                <input type="text" name="helmuga" id="helmuga" class="form-control" required>
                {{-- Balidazio mezua --}}
                @error("helmuga")
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="abiapuntua" class="form-label">Abiapuntua</label>
                <input type="text" name="abiapuntua" id="abiapuntua" class="form-control" required>
                {{-- Balidazio mezua --}}
                @error("abiapuntua")
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
                <a href="{{ route("bidaiak.index") }}" class="btn btn-st btn-secondary me-2">ATZERA</a>
                <button type="submit" class="btn btn-primary">SORTU</button>
            </div>
        </form>
    </div>
@endsection


