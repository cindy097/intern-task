<!-- resources/views/component/navbar-admin.blade.php -->
<header class="bg-white shadow-md px-4 py-3 flex justify-between items-center">
    <div class="text-xl font-semibold">Dashboard</div>

    {{-- Searchbar --}}
    @include('component.searchbar')

    <div>
        <span class="text-sm">Admin</span>
    </div>
</header>
