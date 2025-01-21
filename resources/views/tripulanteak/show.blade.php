@extends("layouts.app")

@section("content")
<div class="container p-5">
    <h1 class="mb-4 text-center">TRIPULANTEAREN XEHETASUNAK</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $tripulantea->izena }} {{ $tripulantea->abizena }}</h5>
            <p class="card-text"><strong>Eginkizuna:</strong> {{ $tripulantea->eginkizuna }}</p>
            <p class="card-text"><strong>Sartze data:</strong> {{ $tripulantea->sartze_data }}</p>
            <p class="card-text"><strong>Baja data:</strong> {{ $tripulantea->baja_data ?? 'Ez dago baja datarik' }}</p>
        </div>
    </div>

    <h2>Bidaiak</h2>
    @if ($tripulantea->bidaiak->isNotEmpty())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Helmuga</th>
                    <th>Data</th>
                    <th>Eginkizuna</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tripulantea->bidaiak as $bidaia)
                    <tr>
                        <td>{{ $bidaia->helmuga }}</td>
                        <td>{{ $bidaia->data }}</td>
                        <td>{{ $bidaia->pivot->eginkizuna }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tripulanteak ez dauka bidaiarik.</p>
    @endif

    <div class="mt-4">
        <a href="{{ route('tripulanteak.index') }}" class="btn btn-secondary">Atzera</a>
    </div>
</div>
@endsection
