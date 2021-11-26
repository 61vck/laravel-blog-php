@extends('layouts.layout')

@section('title', 'user posts page')
@section('content')

    <div class="row">
        <div class="col-lg-6">
            <h3>
                Результаты поиска: "{{\http\Env\Request::input('query')}}"
            </h3>

            @if(!$users->count())
                <p>
                    Пользователь не найден
                </p>
            @else

                <div class="row">
                    <div class="col-lg-6>
                    @foreach($users as $user)
                        @include('user.userblock')
                    @endforeach
                    </div>
                </div>

             @endif
        </div>
    </div>

{{--<div class="media mb-2">--}}
{{--    <a href="#">--}}
{{--        <img src="{{$user->getAvatarUrl()}}" class="mr-3" alt="{{$user->getLoginOrFullname()}}">--}}
{{--    </a>--}}

{{--    <div class="med-a-body">--}}
{{--        <h5 class="mt-0">--}}
{{--            <a href="#">{{$user->getLoginOrFullname()}}</a>--}}
{{--        </h5>--}}
{{--        @if($user->location)--}}
{{--            <p>{{$user->location}}</p>--}}
{{--        @endif--}}
{{--    </div>--}}

{{--</div>--}}

@endsection
