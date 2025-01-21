@extends('layouts.app')

@section('content')
<div class="p-5">
    <h1 class="text-center mb-4">ERRESKATATUAK</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('erreskatatuak.create') }}" class="btn btn-primary mb-3">SORTU ERRESKATATUAK</a>
    </div>

    <table class="table table-striped table-hover text-center table-bordered">
        <thead>
            <tr>
                <th>IZENA</th>
                <th>ABIZENA</th>
                <th>ADINA</th>
                <th>ERRESKATEAK</th>
                <th>AKZIOAK</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($erreskatatuak as $erreskatatuak)
                <tr>
                    <td>{{ $erreskatatuak->izena }}</td>
                    <td>{{ $erreskatatuak->abizena }}</td>
                    <td>{{ $erreskatatuak->adina }}</td>
                    <td>{{ $erreskatatuak->erreskateak->izena }}</td>
                    <td>
                        <a href="{{ route('erreskatatuak.show', $erreskatatuak->id) }}" class="btn btn-info btn-st">IKUSI</a>
                        <a href="{{ route('erreskatatuak.edit', $erreskatatuak->id) }}" class="btn btn-warning btn-st">EDITATU</a>
                        <form action="{{ route('erreskatatuak.destroy', $erreskatatuak->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-st">EZABATU</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">ez daude erreskatatuak datu basean!.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
