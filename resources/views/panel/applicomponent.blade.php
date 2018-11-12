<h2 class="text-center"> Application </h2>
<ul class="list-group list-group-flush">
  @forelse ($answers as $a)  
    <li class="list-group-item font-montserrat"><b>{{$a->question->question}}</b>
      @if ( $a->text == '0')
        <p class="p-2">No</p>
      @else
        <p class="p-2">{{$a->text}}</p>
      @endif
    </li>
  @empty  
      <h2 class="p-2 text-center font-montserrat"> </h2>
  @endforelse
</ul>
