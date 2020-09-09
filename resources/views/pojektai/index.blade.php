@extends('layouts.app')
@section('content')

<div class="card-body">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Projektas</th>
            <th>Darbuotojai</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($pojektai as $pojektas)
        <tr>
            <td>{{ $pojektas->id }}</td>
            <td>{!!$pojektas->pojektas !!}</td>
            <td>{{ $pojektas->projektas_id }}</td>
            <td>
                <form action={{ route('projektas.destroy', $pojektas->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('projektas.edit', $pojektas->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('projektas.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection