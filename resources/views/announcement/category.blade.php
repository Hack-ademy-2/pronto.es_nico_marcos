@extends('layouts.app')
@section('content')
<section id="anuncios">
  <div class="container my-5 py-5">
              <h4 class="text-main">Anuncios por categoria:  <span class="text-accent">{{$category->name}}</span> </h4>
          

              <div class="row mt-5">
                @foreach($announcements as $announcement)
                  <div class="col-12 col-md-3 mb-3">
                      
                        <div class="card rounded-0 border-0" style="width: 16rem;">
                          <img src="https://via.placeholder.com/150" class="card-img-top rounded-0 border-0" alt="...">
                          <div class="card-body bg-pri">
                            <h5 class="card-title text-sec">{{$announcement->title}}</h5>
                          <p class="card-text text-switch">{{$announcement->body}} <br> {{ $announcement->price }}€ <br>  Categoria: <a href="#">{{$announcement->category->name}}</a> <br>
                          <span>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement
                            ->user->name}} </span>
                          </p>
                            <div class="d-flex align-items-center">
                              <button class="btn rounded-0 border-0 btn-descover"><a href="#" class="text-sec text-decoration-none"> Compralo ya!</a></button>
                            </div>
                          </div>
                        </div>
                </div>
             @endforeach

             
  </div>
  <div class="container">
         <div class="row my-3">
              <div class="col-12">
               
              {{ $announcements->links() }}
          
             
          </div>
  </div>
</section>

    
@endsection
