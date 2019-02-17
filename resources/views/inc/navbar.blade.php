<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
      <a class="navbar-brand" href="/">SampleApp</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">Home </a>
          </li>
          <li class="nav-item {{ Request::is('about') ? 'active' : '' }}" >
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item {{ Request::is('messages') ? 'active' : '' }}">
            <a class="nav-link" href="/messages">Messages</a>
          </li>
          <li class="nav-item {{ Request::is('bulma') ? 'active' : '' }}">
            <a class="nav-link" href="/bulma">Bulma</a>
          </li>
        </ul>
      </div>
    </nav>