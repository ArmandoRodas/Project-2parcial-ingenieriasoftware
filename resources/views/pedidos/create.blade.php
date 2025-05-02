@extends('layouts.app')

@section('content')
  <h1 class="title">Nuevo Pedido</h1>

  <form action="{{ route('pedidos.store') }}" method="POST">
    @csrf

    {{-- Selección de comunidad --}}
    <div class="field">
      <label class="label">Comunidad</label>
      <div class="control">
        <div class="select is-fullwidth">
          <select name="comunidad_id" required>
            <option value="">-- Selecciona --</option>
            @foreach($comunidades as $c)
              <option value="{{ $c->id }}" {{ old('comunidad_id') == $c->id ? 'selected' : '' }}>
                {{ $c->nombre }} ({{ $c->distancia }} km)
              </option>
            @endforeach
          </select>
        </div>
      </div>
      @error('comunidad_id')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>

    {{-- Selección de tipo de hamburguesa --}}
    <div class="field">
      <label class="label">Tipo de hamburguesa</label>
      <div class="control">
        <div class="select is-fullwidth">
          <select name="tipo" required>
            <option value="">-- Selecciona tipo --</option>
            @foreach(['Sencilla','Doble','Triple','Veggie','Especial'] as $tipo)
              <option value="{{ $tipo }}" {{ old('tipo') == $tipo ? 'selected' : '' }}>
                {{ $tipo }}
              </option>
            @endforeach
          </select>
        </div>
      </div>
      @error('tipo')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>

    {{-- Botón de envío --}}
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-primary">Hacer pedido</button>
      </div>
    </div>
  </form>
@endsection

@push('scripts')
<script>
  // 1) Leemos el token CSRF del <meta>
  const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

  // 2) Simulación de actualización de ubicación cada 30 s
  setInterval(() => {
    fetch(`/motorizado/1/ubicacion`, {
      method: 'POST',
      credentials: 'same-origin',      // envía cookie de sesión
      headers: {
        'X-CSRF-TOKEN': csrfToken,
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: JSON.stringify({
        lat: 14.60 + (Math.random() - 0.5) * 0.01,
        lng: -89.31 + (Math.random() - 0.5) * 0.01
      })
    })
    .then(res => {
      if (!res.ok) console.error('Ubicación no aceptada:', res.status);
    })
    .catch(err => console.error(err));
  }, 30000);
</script>
@endpush
