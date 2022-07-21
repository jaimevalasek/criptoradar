<div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
    <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">

        <!-- Home -->
        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
            <a class="nav-link g-py-7 g-px-0" href="{{ url('/') }}">Home</a>
        </li>
        <!-- End Home -->

        <!-- Shortcodes -->
        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
            <a href="#" class="nav-link g-py-7 g-px-0">Serviços</a>
        </li>
        <!-- End Shortcodes -->

    @auth

        <!-- Logout -->
        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
            <a href="javascript:void" onclick="$('#logout-form').submit();" class="nav-link g-py-7 g-px-0">
                Logout
            </a>
        </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <!-- End Logout -->
    @else

        @if (Route::has('register'))
            <!-- Register -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                    <a class="nav-link g-py-7 g-px-0" href="{{ route('register') }}">Register</a>
                </li>
                <!-- End Register -->
        @endif

        <!-- Login -->
        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
            <a class="nav-link g-py-7 g-px-0" href="{{ route('login') }}">Login</a>
        </li>
        <!-- End Login -->
        @endauth

    </ul>
</div>
