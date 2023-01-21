@extends('layouts.app')

@section('content')

    @include('content.svg-solar-system')

    <div class="mx-[150px] -mt-[300px] h-[300px] w-[300px] text-center">
        <img src="/img/Orbiter8_logo.png" class="inline-block">
        <p>A Decentralized Space Trading Game</p>
    </div>

    @include('content.features')

    @include('content.mailinglist')

    @include('content.roadmap')

    @include('content.partners')


@endsection
