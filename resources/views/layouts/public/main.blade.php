
<!-- Header -->
@include('layouts.public.header')

<!-- Main -->
<main class="grow">
    @yield('content')
</main>

<!-- Footer -->
@include('layouts.public.footer')

<!-- Back to top button -->
<button id="backToTopBtn" title="Go to top" class="brand-text brand-secondary">
    <i class="fas fa-arrow-up"></i>
</button>
