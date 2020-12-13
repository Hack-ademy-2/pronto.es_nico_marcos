<nav class="container-fluid py-3 bg-nav fixed-top">
  <div class="row">
    <div class="col-3 d-flex justify-content-center align-items-center">
    <a href="{{ route('home') }}" class="text-decoration-none text-reset"><i class="fab fa-cloudsmith fa-2x text-accent"></i>
      </a>
    </div>
    <div class="col-6 d-flex justify-content-center align-items-center">
    <a class="nav-link text-decoration-none text-pri" href="{{ route('announcement.new') }}">
        <span class="borderFade" style="font-size: 13px;">subir anuncio</span>
      </a>
      <a class="nav-link text-decoration-none text-pri" href="#">
        <span class="borderFade" style="font-size: 13px;"> categorias</span>
      </a>
      <a class="nav-link text-decoration-none text-pri" href="#">
        <span class="borderFade" style="font-size: 13px;">sobre nosotros</span>
      </a>
    </div>
    <div class="col-3 d-flex justify-content-center">
      
            <!-- Right Side Of Navbar -->
         
                
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                   
                          <a class="nav-link text-reset" href="{{ route('login') }}"><i class="fas fa-user text-sec"></i> Login</a>
                   
                  @endif
                  
                  @if (Route::has('register'))
                   
                          <a class="nav-link text-reset" href="{{ route('register') }}"><i class="fas fa-users-cog text-sec"></i> Register</a>
                      
                  @endif
              @else
               
                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-decoration-none text-reset" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right border-0 rounded-0 bg-light" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none border-0 rounded-0 bg-light">
                              @csrf
                          </form>
                      </div>
           
              @endguest
          
    </div>
  </div>
</nav>
