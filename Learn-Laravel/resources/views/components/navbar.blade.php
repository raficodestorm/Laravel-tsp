</nav>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid ">
    <a class="navbar-brand" href="{{ route('page-1') }}">RugStar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ms-5">
          <a class="nav-link active" aria-current="page" href="{{ route('page-1') }}">Home</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link active" aria-current="page" href="{{ route('page-2') }}">About</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link active" aria-current="page" href="{{ route('page-3') }}">Service</a>
        </li>
        <li class="nav-item  ms-3">
          <a class="nav-link active" aria-current="page" href="{{ route('page-1') }}">Contact</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>