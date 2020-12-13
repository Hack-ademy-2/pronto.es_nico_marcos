@extends('layouts.app')

@section('content')

  <header class="masthead">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="call-to-action">
            <h1 class="text-main text-main" style="font-size: 60px; font-weight: 700;">Pronto</h1>
            <p class="lead text-main mt-4 text-sec" style="font-size: 18px;">Lorem ipsum dolor sit amet consectetur
              Adipisci qui dolor iste? Temporibus. <br>
            </p>
          <a href="{{ route('announcement.new')}}" class="text-decoration-none text-reset"><button class="submit-btn btn rounded-0 mt-3" style="font-size: 15px;">sube un anuncio</button></a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </header>



  <div class="container my-5 py-5">
    <div class="row">
      <div class="col-12">
        <h3 class="text-main">Lorem ipsum dolor sit amet</h3>
        <p class="mt-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-0 rounded-0 mb-3">
            <div class="card-body p-5">
              <i class="fas fa-hand-holding-usd fa-4x text-switch"></i>
              <h5 class="card-title text-main mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
              <p class="card-text text-sec mt-4" style="font-size: 13px;">Some quick example text to build on the card
                title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-0 rounded-0 mb-3">
            <div class="card-body p-5">
              <i class="fas fa-at fa-4x text-switch"></i>
              <h5 class="card-title text-main mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
              <p class="card-text text-sec mt-4" style="font-size: 13px;">Some quick example text to build on the card
                title and make up the bulk of the card's
                content.</p>

            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-0 rounded-0 mb-3">
            <div class="card-body p-5">
              <i class="fas fa-shipping-fast fa-4x text-switch"></i>
              <h5 class="card-title text-main mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
              <p class="card-text text-sec mt-4" style="font-size: 13px;">Some quick example text to build on the card
                title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-0 rounded-0 mb-3">
            <div class="card-body p-5">
              <i class="fas fa-handshake fa-4x text-switch"></i>
              <h5 class="card-title text-main mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
              <p class="card-text text-sec mt-4" style="font-size: 13px;">Some quick example text to build on the card
                title and make up the bulk of the card's
                content.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid bg-pri">
    <div class="container my-5 py-5">
      <div class="row">
        <div class="col-12 col-md-4">
          <h5 class="text-pri">Team</h5>
        </div>
        <div class="col-6 col-md-8">
          <p class="text-muted"> our entire software developing team, amazing vibes and smiles. Enjoy the time while
            building some graet web applications. </p>
          <div class="row">
            <div class="col-12 col-md-4 py-4">
              <div class="box-photo1"></div>
              <p class="h5 mt-3 text-accent">Marcos</p>
              <p class="small text-muted">software Dev - Backend Dev</p>
            </div>
            <div class="col-12 col-md-4 py-4">
              <div class="box-photo2"></div>
              <p class="h5 mt-3 text-accent">Nico</p>
              <p class="small text-muted">software Dev - Frontend Dev</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@include('contact.form')

@endsection