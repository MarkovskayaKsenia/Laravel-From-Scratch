<x-app>
    <div>
        @forelse($users as $user)
            <a href="{{$user->path()}}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}"
                    alt="{{ $user->username }}'s avatar"
                    width="60" class="mr-4 rounded"
                >
                <div>
                    <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                </div>
            </a>
        @empty
            <div>There are no users</div>
        @endforelse

            <div>{{ $users->links() }}</div>
    </div>
</x-app>
