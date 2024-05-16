<!-- Main -->
<main class="grow">
    <!-- Sidebar -->
    @include('layouts.admin.navbar')
    <div class="sm:ml-64">
        <div class="p-5 bg-gray-100">
            @include('layouts.admin.header')
        </div>
        <div class="flex">
            <!-- <div class="w-52 p-5">
                @ yield('sidebar')
            </div> -->
            <div class="grow p-5">
                @yield('content')
            </div>
        </div>
    </div>
</main>
