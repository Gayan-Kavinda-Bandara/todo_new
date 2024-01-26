<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('todo') }}">Todo List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page">Banners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page">Relationship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page">Livewire List</a>
          </li>
        </ul>
        {{-- @if (Auth::user())
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <x-responsive-nav-link href="{{ route('logout') }}"
                           @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
        @else
        <span><a href="{{ route('register') }}">Register</a></span>/<span><a href="{{ route('login') }}">Login</a></span>
        @endif --}}
      </div>
    </div>
  </nav>
