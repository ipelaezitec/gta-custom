
 @if (!empty($user->application))
    @switch($user->application->state_id)
    @case(1)
        <button class="btn btn-sm btn-secondary w-25">Without state</button>
        @break
    @case(2)
        <button class="btn btn-sm btn-info w-25">Awaiting review</button>     
        @break
    @case(3)
        <button class="btn btn-sm btn-success w-25">Accepted</button>
        @break
    @case(4)
        <button class="btn btn-sm btn-danger w-25">Denied</button>
        @break
    @default
        
    @endswitch 

@else
<button class="btn btn-sm btn-secondary w-25">Without state</button>
@endif