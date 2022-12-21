<header id="site_header">
      <div class="my_container">
            <div class="logo">
                  <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <nav class="navbar">
                  @foreach(Config::get('db.menu') as $menu)
                  <a href="{{route($menu['href'])}}" class="">
                        {{$menu['text']}}
                  </a>

                  @endforeach
            </nav>
            <!-- /.navbar -->
      </div>
</header>