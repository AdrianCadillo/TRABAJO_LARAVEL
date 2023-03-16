 

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Aplicación</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/usuario/list">listado usuario</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.show', ['name'=>'Laravel 10']) }}">UserController</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/courses">listado de cursos</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>