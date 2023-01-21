@extends('layouts.app')

@section('content')

    <div class="bg-gray-500">
        <div  class="px-8 py-8 text-3xl font-bold text-center text-white xl:px-14">
          <h2 class="bg-center w-full py-[130px] bg-o8-purple-500  rounded-3xl bg-cover" style="background-image: url('img/header-passing-saturn.png')">Join The Orbiter 8 Community</h2>
        </div>
    </div>


    <div class="bg-gray-300">
        <div class="max-w-screen-md mx-auto">

            @include('content.mailinglist')
            @include('content.socialicons')

        </div>
    </div>
</div>


@endsection
