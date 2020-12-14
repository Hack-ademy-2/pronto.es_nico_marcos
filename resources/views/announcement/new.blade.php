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

          <form method="POST" action="{{route('announcement.create')}}">

            @csrf
            
            <div class="mb-3">
              
              <label for="categories">Categorias</label>
              <select class="form-control" id="categories"  name="category">
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}" 
                          {{old('category') == $category->id ? 'selected'               : ''}}
                      >{{$category->name}}</option>
                  @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label for="announcementName" class="form-label">Título</label>
              <input type="text" class="form-control" id="announcementName" aria-describedby="Título" name="title">
              <div id="emailHelp" class="form-text">Pon un nombre chulo a tu producto.</div>
            </div>
            
            <div class="mb-3">
              <label for="announcementBody" class="form-label">Descripción</label>
              <textarea class="form-control" cols="20" rows="5" name="body"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Subir producto</button>
          </form>

        
        </div>
      </div>
    </main>
  



@endsection