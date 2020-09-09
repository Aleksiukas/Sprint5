@extends('layouts.app')
@section('content')

<div class="card-body">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Darbuotojai</th>
            <th>projektai</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($darbuotojai as $darbuotojas)
        <tr>
            <td>{{ $darbuotojas->id }}</td>
            <td>{!! $darbuotojas->darbuotojai !!}</td>
            <td>{!! $darbuotojas->projektas_id !!}</td>
            <td>
                <form action={{ route('darbuotojas.destroy', $darbuotojas->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('darbuotojas.edit', $darbuotojas->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
              </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('darbuotojas.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection