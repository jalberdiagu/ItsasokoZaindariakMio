@extends('layouts.app')

@section('content')
<div class="p-5">
    <h1 class="text-center mb-4">AUKERATUTAKO ERRESKATATUAREN INFORMAZIOA</h1>

    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-center">{{ $erreskatatuak->izena }} {{ $erreskatatuak->abizena }}</h3>
        </div>
        <div class="card-body ms-5">
            <p><strong>Izena:</strong> {{ $erreskatatuak->izena }}</p>
            <p><strong>Abizena:</strong> {{ $erreskatatuak->abizena }}</p>
            <p><strong>Adina:</strong> {{ $erreskatatuak->adina }} urte</p>

            <h4 class="mt-4 mb-3">Asoziatutako erreskatearen informazioa:</h4>
            <p><strong>Izena:</strong> {{ $erreskatatuak->erreskateak->izena }}</p>
            <p><strong>Deskribapena:</strong> {{ $erreskatatuak->erreskateak->deskribapena }}</p>
            <p><strong>Data:</strong> {{ $erreskatatuak->erreskateak->data }}</p>

            <div class="d-flex justify-content-center">
                <a href="{{ route('erreskatatuak.index') }}" class="btn btn-secondary mt-4">ATZERA</a>
            </div>
        </div>
    </div>
</div>
@endsection
