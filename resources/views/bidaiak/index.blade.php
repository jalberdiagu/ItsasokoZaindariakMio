@extends("layouts.app")

@section("content")

    <div class="p-5">
        <h1 class="text-center mb-5">BIDAIAK</h1>
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('bidaiak.create') }}" class="btn btn-primary mb-3">BIDAI BERRIA SORTU</a>
        </div>
        <table class="table table-bordered table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>HELMUGA</th>
                    <th>ABIAPUNTUA</th>
                    <th>DATA</th>
                    <th>AKZIOAK</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bidaiak as $bidaia)
                    <tr>
                        <td>{{ $bidaia->id }}</td>
                        <td>{{ $bidaia->helmuga }}</td>
                        <td>{{ $bidaia->abiapuntua }}</td>
                        <td>{{ $bidaia->data }}</td>
                        <td>
                            <a href="{{ route('bidaiak.show', $bidaia->id) }}" class="btn btn-info">Ikusi</a>
                            <a href="{{ route('bidaiak.edit', $bidaia->id) }}" class="btn btn-warning">Editatu</a>
                            <form action="{{ route('bidaiak.destroy', $bidaia->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Ezabatu</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">Ez daude bidaiak datu basean!</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
