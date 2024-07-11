<nav class="brand-bg brand-text">
    <div class="container flex flex-wrap items-center justify-center mx-auto py-4">
        {{-- <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-medium">{{ config('app.name', 'Laravel') }}</span>
        </a> --}}
        <div class="flex justify-center items-center mx-auto mb-5">
            <ul class="flex flex-wrap justify-center items-center text-sm sm:text-lg font-medium flex gap-4">
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
