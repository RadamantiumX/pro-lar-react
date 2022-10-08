@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Bienvenido {{ Auth::user()->name }}</h2><img src="{{ Auth::user()->avatar }}" alt="">
                </div>
            </div>
        </div>
    </div>
   <!--Inicio MODAL-->

  <button type="button" class="btn btn-primary row justify-conten-center" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Quiero recibir ayuda para mi sitio web</button>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form action="{{ route('comentarios') }}" method="POST">
            @csrf



          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Celular:</label>
            <input type="text" class="form-control" name="celular">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Comentario:</label>
            <textarea class="form-control" name="comentario"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" value="Enviar petición">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<!--Fin MODAL-->


</div>
  @if (session('success'))

              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

     @endif
        @if (session('error'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

     @endif


<!--Capa de React ejemplo-->
<div id="example"></div>
@endsection
