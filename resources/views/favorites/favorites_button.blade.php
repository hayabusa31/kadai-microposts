
    @if(Auth::user()->is_favoriting($micropost->id))
        {{--お気に入り削除ボタンのフォーム--}}
        {!! Form::open(['route' => ['favorites.unfavorite',$micropost->id],'method' => 'delete'])!!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-primary"]) !!}
        {!! Form::close() !!}
    @else
        {{--お気に入り追加ボタンのフォーム--}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite',['class' => "btn btn-primary"]) !!}
        {!! Form::close() !!}
    @endif