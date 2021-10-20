<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex-left inline-flext">
            {{ isset($currentcategory) ? "$currentcategory->name" : 'categories' }}
        </button>
        <x-icon name="down-arrow" class="absolute pointer-event-none" style="right: 12px;margin-top:-27px" />
    </x-slot>
    {{-- <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item> --}}
    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>
    {{-- <x-dropdown-item href="/">All</x-dropdown-item> --}}

    @foreach ($categories as $category)
        {{-- <x-dropdown-item href="/Categories/{{ $category->slug }}" this code for route web api 39 line function --}}
        <x-dropdown-item
            href="/?Category={{ $category->slug }}&{{ http_build_query(request()->except('Category')) }}"
            :active="isset($currentcategory) && $currentcategory->is($category)">
            {{ $category->name }}
        </x-dropdown-item>

        {{-- <a href="/Categories/{{ $category->slug }}" class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white
            {{ isset($currentcategory) && $currentcategory->is($category) ? 'bg-blue-500' : '' }}">
            {{ $category->name }}
        </a> --}}
    @endforeach

</x-dropdown>
