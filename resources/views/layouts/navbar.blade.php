<nav class="fixed w-full top-0 z-50  " style="background-color: #004d4d;" >
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Mobile menu button -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button id="menu-button" class="group relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-green-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none">
                    <span class="sr-only">Open main menu</span>
                    <svg id="menu-icon" class="block w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <svg id="close-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <a href="{{ url('/') }}" class="flex shrink-0 items-center">
                    <img alt="Your Company" src="https://rajagiri.edu/images/logo.png" class="h-8 w-auto">
                </a>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        @php
                            $navItems = [
                                ['name' => 'Home', 'href' => url('/')],
                                ['name' => 'Projects', 'href' => url('/allProjectPage')],
                                ['name' => 'Calendar', 'href' => url('/calendar')],
                            ];
                        @endphp
                        @foreach ($navItems as $item)
                            <a href="{{ $item['href'] }}" class="{{ request()->url() == $item['href'] ? 'bg-green-600 text-white' : 'text-white hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
                                {{ $item['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden sm:hidden space-y-1 px-2 pt-2 pb-3">
        @foreach ($navItems as $item)
            <a href="{{ $item['href'] }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->url() == $item['href'] ? 'bg-green-900 text-white' : 'text-green-800 hover:bg-green-200 hover:text-green-600' }}">
                {{ $item['name'] }}
            </a>
        @endforeach
    </div>
</nav>

<script>
    document.getElementById('menu-button').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
        document.getElementById('menu-icon').classList.toggle('hidden');
        document.getElementById('close-icon').classList.toggle('hidden');
    });
</script>
