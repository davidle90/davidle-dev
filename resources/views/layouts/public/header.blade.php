<header class="bg-white mb-5">
    <nav class="flex justify-between items-center md:container mx-auto">
        <div>
            <img class="w-16 cursor-pointer" src="https://placehold.co/160x120?text=Hello+World" alt="">
        </div>
        <div class="nav-links md:static absolute bg-white md:min-h-fit min-h-[82vh] left-0 top-[-100%] md:w-auto w-full flex px-6">
            <ul class="nav-ul flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                <li>
                    <a class="hover:text-gray-500" href="#">Hem</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="#">CV</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="#">Portfolio</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="#">Kontakt</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 md:hidden" href="#">Logga in</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec] hidden md:block">Logga in</button>
            <i class="bi bi-list text-3xl cursor-pointer md:hidden mx-5 onToggleMenu"></i>
        </div>
    </nav>
</header>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.onToggleMenu').on('click', function () {
                if($(this).hasClass('bi-list')) {
                    $(this).removeClass('bi-list');
                    $(this).addClass('bi-x-lg');
                } else {
                    $(this).removeClass('bi-x-lg');
                    $(this).addClass('bi-list');
                }
                $('.nav-links').toggleClass('top-[6%]');
                $('.nav-ul').toggleClass('my-5');
            });
        });
    </script>
@endpush
