<nav class="flex justify-between items-center w-[92%] mx-auto">
    <div>
        <img class="w-16" src="https://placehold.co/160x120?text=Hello+World" alt="">
    </div>
    <div class="nav-links md:static absolute bg-white md:min-h-fit bg-black min-h-[60vh] left-0 md:w-auto w-full flex items-center px-5">
        <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
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
        </ul>
    </div>
    <div class="flex items-center gap-6">
        <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Logga in</button>
        <ion-icon name="menu" class="text-3xl cursor-pointer md:hidden onToggleMenu"></ion-icon>
    </div>
</nav>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.onToggleMenu').on('click', function () {
                var newName = ($(this).attr('name') === 'menu') ? 'close' : 'menu';
                $(this).attr('name', newName);
            })
        })
    </script>
@endpush
