<nav class="bg-white border-b border-gray-200 shadow-md p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="text-lg font-semibold text-gray-900">MyApp</a>

        <!-- Navigation Links (Desktop) -->
        <div class="hidden sm:flex space-x-6">
            <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-500">Dashboard</a>
            <a href="{{ route('goals') }}" class="text-gray-700 hover:text-blue-500">Goals</a>
            <a href="{{ route('publications.index') }}" class="text-gray-700 hover:text-blue-500">Publications</a>
        </div>

        <!-- Authentication Links -->
        <div class="hidden sm:flex">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-700 hover:text-red-500">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-500">Login</a>
                <a href="{{ route('register') }}" class="ml-4 text-gray-700 hover:text-blue-500">Register</a>
            @endauth
        </div>
    </div>
</nav>
