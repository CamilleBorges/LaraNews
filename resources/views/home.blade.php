@extends('partials.layout')

@section('content')
@include('partials.publicMenu')

<center>
<div class="container">
    <div class="row mt-3">
    <p hidden>{{$i=0}}</p>
    <p hidden>{{$d=0}}</p>
    <p hidden>{{$c=0}}</p>
    
    @foreach($posts as $post)
        @if($post->active)
        <p hidden>{{$c++}}</p>
        @endif
    @endforeach

    @if($c>=3)
        <p hidden> {{$p = 2}} </p>
    @else
        <p hidden> {{$p = $c-1}} </p> 
    @endif

    @while($i<$p+1)
        <div class="col-12">
            @if($posts[$d]['active'])
                <h2 class="display-3" style="color:blue">{{ $posts[$d]['title'] }}</h2>
                <h3>{{ $posts[$d]['summary'] }}</h3>
                <p style="font-size:12px">{{ $posts[$d]['post_date'] }}</p>
                <p>{{ $posts[$d]['text'] }}</p>
                <p hidden>{{$i++}}</p>
            @else        
                <p></p>
            @endif
        </div>
        <p hidden>{{$d++}}</p>
    @endwhile

</hr>
    </div>
</div>
@endsection