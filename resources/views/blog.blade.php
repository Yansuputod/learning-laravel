<x-Layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-400">
            <a href="/blog/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="fontbase text-gray-500">
                <a href="#">{{ $post['author'] }}</a>
            </div>
            <p class="my-4 fontlight">
                {{ Str::limit($post['content'], 200) }}
            </p>
            <a href="/blog/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach

</x-Layout>
