@extends('panel.index')

@section('appcontent')

  <div class="container">
    <h2 class="text-center font-montserrat">Users panel</h2>
    <!-- lista de usuarios-->

    <hr>

    <div class="list-group">
        @forelse ($users as $user)
          <a href="/panel/user/{{$user->id}}" class="list-group-item list-group-item-action flex-column align-items-start ">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{$user->name}}</h5>
              <h5 class="mb-1">{{$user->roles[0]->name}}</h5>
              <small>created at : {{$user->created_at}}</small>
            </div>
            {{-- <p class="mb-1">Whitout State</p> --}}
            <div class="d-flex flex-row bd-highlight -mb-3">
             
                {{-- todo low priority: probablemente intentar hacer andar el user->application->state->name --}}
                {{-- todo: filtrar usuarios por fecha, nombre, email,  estado (esto seria mas facil con bottones que te lleven a /panel/users/accepted , etc) --}}
                @include('panel.stateswitch')

             
            </div>
            <small>{{$user->email}}.</small>
          </a>
        @empty  
          <h2 class="p-2 text-center font-montserrat"> No users</h2>
        @endforelse
      </div>



      @if (count ($users))
      <div class="mt-5 p-2 mx-auto">
          {{$users->links()}}
      </div>
      @endif
    </div> 
  </div>

@endsection