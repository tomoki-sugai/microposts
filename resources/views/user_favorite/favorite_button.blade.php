@if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost -> id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost ->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
@endif

