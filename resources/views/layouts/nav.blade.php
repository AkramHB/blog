<div class = "container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Disabled</a>
            </li>
          </ul>
          @if(Auth::check())
            <h3 class = "ml-auto">Welcome {{Auth::user()->name}}</h3>
          @endif
          @if(!Auth::check())
            <div class = "ml-auto">
              <a class = "btn btn-default" href="/register">Register</a>
              <a class = "btn btn-default" href="/login">Login</a>
            </div>
          @endif
        </div>
      </nav>
</div>
  