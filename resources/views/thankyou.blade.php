@extends('layouts.app')

@push('style')

<style>

  article {
    height: 100vh;
    width: 100%;
    background-color: #D8D8D8;
    display: flex;
    justify-content: center;
    align-items: center; 
  }

  h1.ml8 {
  font-weight: 900;
  font-size: 4.5em;
  color: #D4A517;
  width: 3em;
  height: 3em;
  display: flex;
  justify-content: center;
  align-items: center; 
}

.ml8 .letters-container {
  position: absolute;
  height: 2em;
}

.ml8 .letters {
  position: relative;
  z-index: 2;
  display: inline-block;
  line-height: 0.7em; 
  right: -0.12%;
  top: -0.7em;
}

.ml8 .bang {
  font-size: 1.2em;
  top: auto;
  left: -0.06em;
  top: -0.5em;
}

.dameUnMargin {
  margin-top: 150px;
}

.ml8 .circle {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
}

.ml8 .circle-white {
  width: 5.3em;
  height: 5.3em;
  border: 3px dashed rgb(41, 41, 41);
  border-radius: 2em;
}

.ml8 .circle-dark {
  width: 4.4em;
  height: 4.4em;
  background-color: rgb(41, 41, 41);
  border-radius: 3em;
  z-index: 1;
}

.ml8 .circle-dark-dashed {
  border-radius: 4.4em;
  background-color: transparent;
  border: 2px dashed rgb(41, 41, 41);
  width: 4.6em;
  height: 4.6em;
}

</style>

@endpush


@section('content')

<article id="sucess">
  <h1 class="ml8">
    <span class="letters-container">
      <span class="letters letters-left">El anuncio ha sido creado</span> 
      <span class="letters bang"><i class="fas fa-check"></i></span>
      <h1 class="dameUnMargin text-main">Gracias y mucha suerte.   Vuelve pronto a nuestra <a href="{{ route('home') }}" class="text-decoration-none text-accent">Home</a></h1>
    
    </span>
    <span class="circle circle-white"></span>
    <span class="circle circle-dark"></span>
    <span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
  </h1>
  <h2></h2>
</article>


@endsection

@push('scripts')

<script>
    
anime.timeline(
  { 
    direction: 'reverse'
  })
  .add({
    targets: '.ml8 .circle-white',
    scale: [0, 3],
    opacity: [1, 0],
    easing: "easeInOutExpo",
    rotateZ: 360,
    duration: 1200,
  }).add({
    targets: '.ml8 .circle-container',
    scale: [0, 1],
    duration: 1200,
    easing: "easeInOutExpo",
    offset: '-=1000',
  }).add({
    targets: '.ml8 .circle-dark',
    scale: [0, 1],
    duration: 1200,
    easing: "easeOutExpo",
    offset: '-=600',

  }).add({
    targets: '.ml8 .letters-left',
    scale: [0, 1],
    duration: 1400,
    offset: '-=550',

  }).add({
    targets: '.ml8 .bang',
    scale: [0, 1],
    rotateZ: [45, 15],
    duration: 1400,
    offset: '-=1000',

  }).add({
    targets: '.ml8',
    opacity: 0,
    duration: 1000,
   easing: "easeOutExpo", 
    delay: 1600,

  });

anime({
  targets: '.ml8 .circle-dark-dashed',
  rotateZ: 360,
  duration: 20000,
  easing: "linear",
  direction: 'reverse'
});

</script>
    
@endpush