<header
    x-data="{navbarOpen: false}"
    class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md h-24"
>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <img
                        src="{{url("img/impetus.png")}}"
                        alt="logo"
                        class="w-full"
                    />
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-elements.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                               x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-elements.navbar-hamburger>
                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none">
                        <ul class="block lg:flex lg:items-center">
                            @foreach($navbarItems as $item)
                                <x-elements.navbar-item :item="$item"></x-elements.navbar-item>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
