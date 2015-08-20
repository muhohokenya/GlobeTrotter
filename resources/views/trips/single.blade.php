@extends('app')

@section('content')


    <div class="header-map"   >
        <h1>GoogleMaps Implementation</h1>
    </div>

    <h1>{{ $trip->name }}</h1>
    <p>{{ $trip->desc }}</p>
    <p>from {{ $trip->start->format('d. M Y') }} to {{ $trip->end->format('d. M Y') }}</p>

    @if( Auth::check() && Auth::user()->id == $trip->user_id)
        <a class="btn btn-default" href="{{url('trip') . '/' . $trip->id . '/edit'}}">Edit Trip</a>
        <a href="{{url('entry/create')}}">
            <div class="entry">
                <h3>Add new Entry!</h3>
            </div>
        </a>
    @endif

    @foreach($entries as $entry)

        <a href="{{ url('entry') . '/' . $entry->id }}">
            <div class="entry">
                <h3>{{$entry->name}}</h3>
                <p>{{$entry->desc}}</p>
            </div>
        </a>
    @endforeach

@stop