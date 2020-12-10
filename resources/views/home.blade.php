@extends('layouts.app')

@section('content')
<section class="py-5 text-center container my-5">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1><u>¡Véndelo</u> más pronto que tarde!</h1>
        <p>Saca lo que no usas. Házle una foto y véndelo. <u><br>¡Y si no te lo compran te lo compramos nosotros!</u></p>
        <p>
          <a href="#" class="btn btn-primary my-2">Subir un producto</a>
          <a href="#" class="btn btn-secondary my-2">Pedir precio por mi producto.</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
              <img width="100%" height="225" src="https://thumb.pccomponentes.com/w-530-530/articles/33/333002/1413-cecotec-mambo-10070-robot-de-cocina-multifuncion.jpg" alt="">

            <div class="card-body">
                <p class="card-title"><h4>Hogar</h4></p>
              <p class="card-text">Los productos de esta categoría están revisados y garantizados.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver artículos</button>
                
                </div>
                <small class="text-muted">9 artículos</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img width="100%" height="225" src="https://www.hola.com/imagenes/estar-bien/20180312121453/ropa-contamina-medio-ambiente/0-548-821/ropa-medioambiente-t.jpg" alt="">

            <div class="card-body">
                <p class="card-title"><h4>Ropa</h4></p>
              <p class="card-text">Vistete por muy poco dinero y cuida el medio ambiente. *Envios gratis</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver productos</button>
                  
                </div>
                <small class="text-muted">911 articulos</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">  <div class="card shadow-sm">
            <img width="100%" height="225" src="https://www.automovilessanchezseat.es/wp-content/uploads/2018/07/segunda-mano-coches4x4.jpg" alt="">

            <div class="card-body">
                <p class="card-title"><h4>Coches</h4></p>
              <p class="card-text">Descubre tu coche nuevo, totalmente revisado en más de 65 puntos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver coches</button>
                 
                </div>
                <small class="text-muted">1.1204 coches</small>
              </div>
            </div>
          </div>
        </div>

    
      </div>
    </div>
  </div>
@endsection
