@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <main>
      <div class="my-5 text-left">
        <h2>Saca la cámara y haz una foto. <br> ¡Ya estás más cerca de venderlo!</h2>
        <p class="lead">Subé en un "tris" té, o todo lo que te haga ganar dinero.</p>
      </div>
  
      <div class="row g-3">
        <div class="col-md-5 col-lg-4 order-md-last">
         
          
  
       
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">¿Qué vendes?</h4>

          <form>
            <div class="mb-3">
              <label for="Título" class="form-label">Título</label>
              <input type="text" class="form-control" id="título" aria-describedby="Título">
              <div id="emailHelp" class="form-text">Pon un nombre chulo a tu producto.</div>
            </div>
            
            <div class="mb-3">
              <label for="body" class="form-label">Descripción</label>
              <textarea class="form-control" cols="20" rows="5"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Subir producto</button>
          </form>

        
        </div>
      </div>
    </main>
  



@endsection