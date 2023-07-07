<h1>{{$heading }}</h1>

@if (count($listings)==0)
    <p>No listings found</p>
@endif

@foreach($listings as $lsiting)
    <h2>
        {{$lsiting['title']}}
    </h2>
    <p>
        {{$lsiting['description']}}>
    </p>


@endforeach