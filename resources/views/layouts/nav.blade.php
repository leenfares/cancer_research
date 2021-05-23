

  <nav class="navbar navbar-expand-lg ">
  <div class="container">
  <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/images/front/logo-sq.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon" ></span> -->
            <i class="fa fa-bars"></i> 
        </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto" >
    @if(App::getLocale() == 'en')
    <li class="nav-item">
    <a class="nav-link active" href="{{ url('/') }}">{{ __('messages.nav_home') }}
       <span class="sr-only">(current)</span></a> 
     </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ url('/about') }}">{{ __('messages.nav_about') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/under_construction') }}">{{ __('messages.nav_news') }}</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ url('/under_construction') }}">{{ __('messages.nav_courses') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{ url('/all_research')}} ">{{ __('messages.nav_research') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{ url('/under_construction')}} ">{{ __('messages.nav_donate') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/under_construction') }}">{{ __('messages.nav_contact') }}</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/under_construction') }}">{{ __('messages.nav_contact') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{ url('/under_construction')}} ">{{ __('messages.nav_donate') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{ url('/all_research')}} ">{{ __('messages.nav_research') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/under_construction') }}">{{ __('messages.nav_courses') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/under_construction') }}">{{ __('messages.nav_news') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/about') }}">{{ __('messages.nav_about') }}</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="{{ url('/') }}">{{ __('messages.nav_home') }}
       <span class="sr-only">(current)</span></a> 
     </li>

      @endif
    </ul>
  </div>
</div>
</nav>

