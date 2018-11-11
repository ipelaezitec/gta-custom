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

            <div class="card-body">
              <a href="#" class="card-link">Delete</a>
              <a href="#" class="card-link">Change state</a>
            </div>
          </div>

  </div>



@endsection