@extends('layouts.app')

@section('content')
<div class="p-5">
    <h1 class="mb-4 text-center">AUKERATUTAKO ERRESKATEAREN INFORMAZIOA</h1>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3">Erreskatearen Xehetasunak</h4>

            <div class="mb-3">
                <strong>Izena:</strong>
                <p>{{ $erreskatea->izena }}</p>
            </div>
            <div class="mb-3">
                <strong>Deskribapena:</strong>
                <p>{{ $erreskatea->deskribapena }}</p>
            </div>
            <div class="mb-3">
                <strong>Data:</strong>
                <p>{{ $erreskatea->data }}</p>
            </div>

            <h4 class="card-title mb-3">Erreskatatuak</h4>
            @if($erreskatea->erreskatatuak->isNotEmpty())
                <ul class="list-group">
                    @foreach($erreskatea->erreskatatuak as $erreskatatu)
                        <li class="list-group-item">
                            <strong>Izena:</strong> {{ $erreskatatu->izena }}<br>
                            <strong>Deskribapena:</strong> {{ $erreskatatu->deskribapena }}<br>
                            <strong>Data:</strong> {{ $erreskatatu->data }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Ez daude erreskatatuak asoziatuta erreskate honi!</p>
            @endif
            <div class="d-flex justify-content-center">
                <a href="{{ route('erreskateak.index') }}" class="btn btn-center btn-secondary mt-4">Atzera</a>

            </div>
        </div>
    </div>
</div>
@endsection
