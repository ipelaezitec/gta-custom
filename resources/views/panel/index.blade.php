@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <div class="d-flex flex-column side-panel p-2 mt-2 sticky-top">
          
          <h2 class="text-center">Admin Panel </h2>
          
          <div class="dropdown-divider"></div>

          <a href="{{url ('/panel/appreceived')}}" class="text-left bottom-color btn  btn-block active" role="button" aria-pressed="true">
            Applications received
          </a>
          
          {{-- Todo : Admin access only --}}
          <a href="{{url ('/panel/custom')}}" class="text-left bottom-color btn  btn-block active" role="button" aria-pressed="true">
          Customizations
          </a>
            
          <a href="{{url ('/panel/users')}}" class="text-left bottom-color btn  btn-block active" role="button" aria-pressed="true">
            Users
          </a>
        </div>

      </div>
    
      
      <div class="col-xs-12 col-sm-9 mt-2">
          <div class="panel-card">
            
            @yield('appcontent')
            
          </div>
        
      </div>
    <div>
 </div>
@endsection
