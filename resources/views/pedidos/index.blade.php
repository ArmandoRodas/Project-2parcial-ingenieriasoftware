@extends('layouts.app')

@section('content')
  <h1 class="title">Pedidos</h1>

  <a href="{{ route('pedidos.create')}}" class="button is-primary mb-4"> Realizar Pedido</a>
    
  @if(session('success'))
    <div class="notification is-success">
      {{ session('success') }}
    </div>
  @endif

  <table class="table is-fullwidth is-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Comunidad</th>
        <th>Tipo</th>
        <th>Motorizado</th>
        <th>Estado</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pedidos as $p)
        <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->comunidad->nombre }} ({{ $p->comunidad->distancia }} km)</td>
          <td>{{ $p->tipo }}</td>    {{-- mostramos aquí --}}
          <td>{{ $p->motorizado->nombre }}</td>
          <td>{{ $p->estado }}</td>
          <td>{{ $p->created_at->format('d/m/Y H:i') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{ $pedidos->links() }}
@endsection
