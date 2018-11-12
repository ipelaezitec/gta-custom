@extends('panel.index')

@section('appcontent')

  <div class="container">
    <h2 class="text-center font-montserrat"> User Panel</h2>
        <hr>
        <div class="card" >
            {{-- <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image cap"> --}}
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title">{{$user->name}}</h4>
                <small class="mt-1">created at {{$user->created_at}}</small>
              </div>
              <small>{{$user->email}}</small>
              <hr>
              <p class="card-text">  @include('panel.stateswitch')</p>
              <p class="card-text">No sé que poner acá, probablemente el discord</p>

              
            </div>


            <ul class="list-group list-group-flush">
              {{-- {{@if}} -- // si tiene hecha una applicación que se muestre acá mismo, sino, no muestra nada}}
              {{-- @forelse ($users as $user)  // Acá irian las preguntas de su applicación--}}
                {{-- <li class="list-group-item">Pregunta y respuesta 1</li> --}}
              {{-- @empty   --}}
                {{-- poner "Application state : user->application->state" --}}
                {{-- <h2 class="p-2 text-center font-montserrat"> No users </h2> --}}
              {{-- @endforelse --}}
              

            </ul>
            @if ( (Auth::user()->hasRole('SuperAdmin') && Auth::id() == $user->id) || $user->id == 1 ) 
            @else
              @if (Auth::user()->hasRole('SuperAdmin'))
                <div class="col-md-4"> 
                <!-- Rol Widget -->
                    <div class="card my-12">
                        <h5 class="card-header">Change Role</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{ route('changerole') }}" method="post">
                                    @csrf
                                    <input hidden type="text" name="userid" value="{{ $user->id }}">
                                    <select name="role" class="custom-select" onChange="this.form.submit();">
                                        @foreach ($roles as $role)
                                            @if($role->id == $user->roles[0]->id)
                                                <option value="{{ $role->id }}" class="value" selected>{{ $role->name }}</option>
                                            @else
                                                <option value="{{ $role->id }}" class="value">{{ $role->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              @endif
            @endif

            <div class="card-body">
            @if ((Auth::user()->hasRole('SuperAdmin') && Auth::id() == $user->id) || $user->id == 1)
            @else
               @if (Auth::user()->hasRole('SuperAdmin'))
                <a href="/panel/user/delete/{{$user->id}}" class="card-link">Delete User</a>
                  <a href="#" class="card-link">Change state</a>
                </div>
              @endif
            @endif
          </div>

  </div>



@endsection