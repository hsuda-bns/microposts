@if (Auth::user()->is_favourite($micropost->id))
        {{-- お気に入りを外すフォーム --}}
        {!! Form::open(['route' => ['favourites.unfavourite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavourite', ['class' => "btn btn-warning btn-btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りにするフォーム --}}
        {!! Form::open(['route' => ['favourites.favourite', $micropost->id]]) !!}
            {!! Form::submit('Favourite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @endif