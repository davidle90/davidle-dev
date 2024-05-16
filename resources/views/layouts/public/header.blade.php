<nav class="bg-white border-b shadow">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="haf-font self-center text-4xl font-normal">{{ config('app.name', 'Laravel') }}</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-orange-100 rounded-lg md:hidden hover:bg-orange-100" aria-controls="navbar-default" aria-expanded="false">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <div class="flex justify-center items-center">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                    <li>
                        <a href="#" class="block py-2 px-3">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3">Projects</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-gradient-to-br from-purple-600 to-blue-500 rounded-md">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

@section('styles')
@endsection
