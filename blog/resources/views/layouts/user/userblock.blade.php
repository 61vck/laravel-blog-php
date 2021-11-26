<div class="media">
    <a href="#">
        <img src="/" class="mr-3" alt="{{$user->getFullnameOrEmail()}}">
    </a>
    <div class="media-body">
        <h5 class="mt-0">
            <a href="#">
                {{$users->getFullnameOrEmail()}}
            </a>
        </h5>
        @if($user->location)
            <p>{{@users->location}}</p>
        @endif
    </div>
</div>
