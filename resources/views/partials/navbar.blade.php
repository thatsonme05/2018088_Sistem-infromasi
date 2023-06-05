<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link {{($title === "Home")? 'active' : ''}}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{($title === "Information")? 'active' : ''}}" href="/info">Information</a>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a href="/login" class="nav-link {{($title === "login")? 'active' : ''}}
        "><i class="bi bi-hand-index-thumb"></i>Login</a>
      </li>
    </ul>
    </div>
  </div>
</nav>