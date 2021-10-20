{{-- @props(['slug','name']) this is another way if it put must put $post->Category->slug --}}
@props(['category']) {{-- this is another way if it put must put $Category->slug --}}

<a href="/Categories/{{ $category->slug }}"
    class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
    style="font-size: 10px">{{ $category->name }}
</a>
