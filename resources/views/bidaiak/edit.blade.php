@extends("layouts.app")

@section("content")
    <div class="p-5">
        <h1 class="text-center mb-5">BIDAIAK</h1>

        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="mb-0 text-center">AUKERATUTAKO BIDAIAREN INFORMAZIOA ALDATU</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('bidaiak.update', $bidaia->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="helmuga" class="form-label">Helmuga</label>
                        <input type="text" name="helmuga" id="helmuga" class="form-control" value="{{ old('helmuga', $bidaia->helmuga) }}" required>
                        {{-- Balidazio mezua --}}
                        @error("helmuga")
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="abiapuntua" class="form-label">Abiapuntua</label>
                        <input type="text" name="abiapuntua" id="abiapuntua" class="form-control" value="{{ old('abiapuntua', $bidaia->abiapuntua) }}" required>
                        {{-- Balidazio mezua --}}
                        @error("abiapuntua")
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" name="data" id="data" class="form-control" value="{{ old('data', $bidaia->data) }}" required>
                        {{-- Balidazio mezua --}}
                        @error("data")
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="{{ route('bidaiak.index') }}" class="btn btn-secondary me-2">ATZERA</a>
                        <button type="submit" class="btn btn-success">ALDATU INFORMAZIA</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
