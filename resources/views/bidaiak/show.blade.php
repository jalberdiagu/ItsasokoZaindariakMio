@extends("layouts.app")

@section("content")
<div class="container py-5">
    <h1 class="text-center mb-4">Información del Bidaia</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">AUKERATUTAKO BIDAIAREN XEHETASUNAK</h3>
        </div>
        <div class="card-body">
            <p><strong>Helmuga:</strong> {{ $bidaia->helmuga }}</p>
            <p><strong>Abiapuntua:</strong> {{ $bidaia->abiapuntua }}</p>
            <p><strong>Data:</strong> {{ $bidaia->data }}</p>

            <h4 class="mt-4">Tripulante:</h4>
            @if ($bidaia->tripulanteak->isNotEmpty())
                @foreach ($bidaia->tripulanteak as $tripulante)
                    <p>{{ $tripulante->izena }} - {{ $tripulante->pivot->eginkizuna }}</p>
                @endforeach
            @else
                <p>No hay tripulantes asignados a este Bidaia.</p>
            @endif
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('bidaiak.index') }}" class="btn btn-secondary">ATZERA</a>
        </div>
    </div>
</div>
@endsection
