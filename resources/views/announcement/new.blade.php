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
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Título</label>
                <input type="text" class="form-control" id="firstName" placeholder="Título" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

  
        
  
              <div class="col-12 mt-2">
                <label for="address" class="form-label">Describe el producto</label>
                <input type="text" class="form-control" id="address" placeholder="Descripción" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>


              <div class="col-12 mt-2">
                <label for="username" class="form-label">Por cuánto lo vendes</label>
                <div class="input-group">
                  <span class="input-group-text">€</span>
                  <input type="text" class="form-control" id="username" placeholder="10 €" required>
                <div class="invalid-feedback">
                    Your username is required.
                  </div>
                </div>
              </div>
  
              
  
              

              {{-- <div class="col-12 m-2">
                <label for="address" class="form-label">Foto 1</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="col-12 m-2">
                <label for="address" class="form-label">Foto 2</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="col-12 m-2">
                <label for="address" class="form-label">Foto 3</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div> --}}

               
              <br>
              
              <div class="col-md-12 mt-2">
                <label for="country" class="form-label">Categoría del prouducto:</label>
                <select class="form-select" id="country" required>
                  <option value="">Pequeño Electrodoméstico</option>
                  <option>Ropa</option>
                  <option>Coches y motos</option>
                  <option>Móviles</option>
                  <option>Todo lo demás</option>
                </select>

                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              
            </div>
  
            <hr class="my-4">
  
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="same-address">
              <label class="form-check-label" for="same-address">¿Quieres que te hagamos una oferta si no lo vendes en 7 días?</label>
            </div>
  
  
            <br class="my-4">
  
            <button class="w-100 btn btn-primary btn-lg" type="submit">Publicar anuncio</button>
          </form>
        </div>
      </div>
    </main>
  



@endsection