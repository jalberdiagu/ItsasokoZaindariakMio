@extends('layouts.app')

@section('content')
<div class="p-5">
    <h1 class="text-center mb-5">TRIPULANTEAK</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('tripulanteak.create') }}" class="btn btn-primary mb-3">TRIPULANTE BERRIA SORTU</a>
    </div>

    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>IZENA</th>
                <th>ABIZENA</th>
                <th>EGINKIZUNA</th>
                <th>SARTZE DATA</th>
                <th>BAJA DATA</th>
                <th>AKZIOAK</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tripulanteak as $tripulantea)
                <tr>
                    <td>{{ $tripulantea->id }}</td>
                    <td>{{ $tripulantea->izena }}</td>
                    <td>{{ $tripulantea->abizena }}</td>
                    <td>{{ $tripulantea->eginkizuna }}</td>
                    <td>{{ $tripulantea->sartze_data }}</td>
                    <td>{{ $tripulantea->baja_data }}</td>
                    <td>
                        <a href="{{ route('tripulanteak.show', $tripulantea->id) }}" class="btn btn-info">Ikusi</a>
                        <a href="{{ route('tripulanteak.edit', $tripulantea->id) }}" class="btn btn-warning">EDITATU</a>
                        <form action="{{ route('tripulanteak.destroy', $tripulantea->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Ezabatu</button>
                        </form> 
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">Ez daude tripulanteak!</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
