<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img class="mb-2 rounded-lg" src="/images/profile-banner.jpg" alt="">
            <img src="{{ $user->avatar }}" alt="{{ $user->name }} avatar"
                 class="rounded-full mr-2 absolute bottom-0"
                 width="150" height="150" style="left: 50%; transform: translateX(-50%) translateY(50%)">
        </div>


        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            Bugs Bunny is an animated cartoon character, created in the late 1930s by Leon Schlesinger Productions
            (later Warner Bros. Cartoons) and voiced originally by Mel Blanc. Bugs is best known for his starring
            roles in the Looney Tunes and Merrie Melodies series of animated short films, produced by Warner Bros.
        </p>



    </header>

    @include('timeline', ['tweets' => $user->tweets])

</x-app>
