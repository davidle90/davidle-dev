<nav class="brand-bg brand-text">
    <div class="container flex flex-wrap items-center justify-center mx-auto py-4">
        {{-- <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-medium">{{ config('app.name', 'Laravel') }}</span>
        </a> --}}
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden hover:bg-orange-100" aria-controls="navbar-default" aria-expanded="false">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <div class="flex justify-center items-center">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                    <li>
                        <a href="" class="block py-2 px-3 goToAbout hover:text-red-400">About</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 px-3 goToSkills hover:text-red-400">Skills</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 px-3 goToProjects hover:text-red-400">Projects</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 px-3 goToContact hover:text-red-400">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

@section('styles')
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.goToAbout').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#about').offset().top
                }, 500); // Adjust the duration (500ms) as needed
            });
            $('.goToSkills').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#skills').offset().top
                }, 500); // Adjust the duration (500ms) as needed
            });
            $('.goToProjects').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#projects').offset().top
                }, 500); // Adjust the duration (500ms) as needed
            });
            $('.goToContact').click(function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#contact').offset().top
                }, 500); // Adjust the duration (500ms) as needed
            });
        });
    </script>
@endpush
