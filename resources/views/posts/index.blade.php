<x-layout>
    {{-- <style>
        article {
            margin: auto;
            width: 50%
        }
        p {
            text-align: justify;
            text-justify: inter-word;
        }
    </style>
    <body>
        <div>
            <div>
                <article>
@foreach ($posts as $post)
                    <h2><a href="single/{{ $post->slug }}">{{ $post->title }}</a></h2>
    <p> by <a href="/authors/{{ $post->author->name }}">{{ $post->author->name }}</a>Category is
        {{ $post->Category->name }}
    </p>
    <p>{{ $post->excerpt }}</p>
    <hr>
    @endforeach
    </article>
    </div> --}}


    @include('posts._header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count() != 0)
            <x-posts-grid :posts="$posts" />
            {{ $posts->links() }}
        @else
            <p class="text-center">not posts try again</p>
        @endif
    </main>

</x-layout>
