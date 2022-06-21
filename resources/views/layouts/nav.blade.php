

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
        <a class="nav-link" href="{{ url('/all_teams') }}">{{ __('messages.nav_team') }}</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ url('/all_partners') }}">{{ __('messages.nav_partner') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{ url('/all_research')}} ">{{ __('messages.nav_research') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{ url('/all_news')}} ">{{ __('messages.nav_news') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{ url('/under_construction')}} ">{{ __('messages.nav_donate') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/under_construction') }}">{{ __('messages.nav_contact') }}</a>
      </li>
      <li class="nav-item">
      <div class="dropdown show">
         <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ __('messages.langs') }}
         </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        @endforeach
      </div>
      </div>
      </li> 
      @else
      <li class="nav-item">
      <div class="dropdown show">
         <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ __('messages.langs') }}
         </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        @endforeach
      </div>
      </div>
      </li> 
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
        <a class="nav-link"  href="{{ url('/all_news')}} ">{{ __('messages.nav_news') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/all_teams') }}">{{ __('messages.nav_team') }}</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ url('/all_partners') }}">{{ __('messages.nav_partner') }}</a>
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

