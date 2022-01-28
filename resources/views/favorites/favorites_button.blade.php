@if(Auth::id() != $user->id)
    @if(Auth::user()->is_following($user->id))
        {{--お気に入り削除ボタンのフォーム--}}
        {!! Form::open(['route' => ['user.unadd',$user->id],'method' => 'delete'])!!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{--お気に入り追加ボタンのフォーム--}}
        {!! Form::open(['route' => ['user.add', $user->id]]) !!}
            {!! Form::submit('favorite',['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif