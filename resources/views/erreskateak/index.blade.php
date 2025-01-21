@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <h1 class="mb-4 text-center">ERRESKATEAK</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('erreskateak.create') }}" class="btn btn-primary mb-3">ERRESKATE BERRIA SORTU</a>
        </div>
        <table class="table table-bordered table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IZENA</th>
                    <th>DESKRIBAPENA</th>
                    <th>DATA</th>
                    <th>AKZIOAK</th>
                </tr>
            </thead>
            <tbody>
                @forelse($erreskateak as $erreskatea)
                    <tr>
                        <td>{{ $erreskatea->id }}</td>
                        <td>{{ $erreskatea->izena }}</td>
                        <td>{{ $erreskatea->deskribapena }}</td>
                        <td>{{ $erreskatea->data }}</td>
                        <td>
                            <a href="{{ route('erreskateak.show', $erreskatea->id) }}" class="btn btn-info btn-st">IKUSI</a>
                            <a href="{{ route('erreskateak.edit', $erreskatea->id) }}" class="btn btn-warning btn-st">EDITATU</a>
                            <form action="{{ route('erreskateak.destroy', $erreskatea->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-st">Ezabatu</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Ez daude erreskateak datu basean!.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

