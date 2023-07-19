<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Relazioni</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          @guest
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>    

        @else

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">LogOut</a></li>
                <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
              @csrf</form>
              <li><a class="dropdown-item" href="{{route('product.create')}}">Crea il tuo prodotto</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-destroy').submit();">Cancellami</a></li>
              <form action="{{route('user.destroy')}}" id="form-destroy" method="POST" class="d-none">
              @csrf
              @method('delete')
            </form>
            </ul>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorie
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('product.category', $category)}}">
                {{$category->name}}</a></li>
                @endforeach
              </ul>
          </li>
        </ul>
        </form>
        @endguest

         
      </div>
    </div>
  </nav>