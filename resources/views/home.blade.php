@extends('layouts.app')

@section('content')

  <header class="masthead">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="call-to-action">
            <h1 class="text-main text-main" style="font-size: 60px; font-weight: 700;">Pronto</h1>
            <p class="lead text-main mt-4 text-sec" style="font-size: 18px;">Saca la cámara y haz una foto.
              ¡Ya estás más cerca de venderlo!
            </p>
            <p class="lead text-sec mt-2s">Subé en un "tris" té, o todo lo que te haga ganar dinero.</p>
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


  <section id="anuncios">
    <div class="container my-3 py-3">
                <h4 class="text-accent">Echale un vistazo a los ultimos anuncios</h4>
                <p class="text-sec text-right">las razones porque nuestros productos son de calidad</p>

                <div class="row mt-5">
                  @foreach($announcements as $announcement)
                    <div class="col-12 col-md-3 mb-3">
                        
                          <div class="card rounded-0 border-0" style="width: 16rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top rounded-0 border-0" alt="...">
                            <div class="card-body bg-pri">
                              <h5 class="card-title text-sec">{{$announcement->title}}</h5>
                            <p class="card-text text-switch">{{$announcement->body}} <br> {{ $announcement->price }}€ <br>  Categoria: <a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}</a> <br>
                            <span>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement
                              ->user->name}} </span>
                            </p>
                              <div class="d-flex align-items-center">
                                <button class="btn rounded-0 border-0 btn-descover"><a href="#" class="text-sec text-decoration-none">descube más</a></button><i class="fas fa-long-arrow-alt-right arrowScrollDown"></i>
                              </div>
                            </div>
                          </div>
                  </div>
                @endforeach
    </div>
  </section>

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