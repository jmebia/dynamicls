    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> {{ config('app.name', 'DynamicLS') }} </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            @isset($pages_list)
              @foreach ($pages_list as $link)
              <li class="nav-item">
                @if (strpos($_SERVER['REQUEST_URI'], $link->name) !== false)
                <a class="nav-link active" aria-current="page" href="/{{$link->name}}/index">{{$link->name}}</a>
                @else
                <a class="nav-link" href="/{{$link->name}}/index">{{$link->name}}</a>
                @endif
              </li>
              @endforeach
            @endif
            </ul>
          </div>
        </div>
      </nav>