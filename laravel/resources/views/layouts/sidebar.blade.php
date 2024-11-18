<aside class="main-sidebar elevation-4" style="background-color: #2F2B2B; color: #DDE2FF">

    <a href="{{ route('home') }}" class="brand-link logo-switch">

        <img src="" alt="" class="brand-image">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
