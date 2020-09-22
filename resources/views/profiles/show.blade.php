@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img class="mb-2 rounded-lg" src="/images/profile-banner.jpg" alt="">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>

        <p class="text-sm">
            Bugs Bunny is an animated cartoon character, created in the late 1930s by Leon Schlesinger Productions
            (later Warner Bros. Cartoons) and voiced originally by Mel Blanc. Bugs is best known for his starring
            roles in the Looney Tunes and Merrie Melodies series of animated short films, produced by Warner Bros.
        </p>

        <img src="{{ $user->avatar }}" alt="{{ $user->name }} avatar"
             class="rounded-full mr-2 absolute"
             style="width: 150px; top: 225px; left: calc(50% - 75px)">

    </header>

    @include('timeline', ['tweets' => $user->tweets])

@endsection
