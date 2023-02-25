<nav class="bg-gray-800 py-4 flex justify-center">
    <div class="container flex justify-between items-center px-2">
        <div>
            <a href="{{ route('home') }}" class="text-xl font-bold text-white">Diary</a>
        </div>
        <ul class="flex items-center">
            <li><a href="/" class="text-gray-300 hover:text-white px-3 py-2">Home</a></li>
            <li><a href="/about" class="text-gray-300 hover:text-white px-3 py-2">About</a></li>
            @auth
                <li class="text-gray-300 hover:text-white hover:cursor-pointer px-3 py-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <div :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </div>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</nav>
