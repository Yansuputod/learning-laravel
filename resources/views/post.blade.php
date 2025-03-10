<x-Layout>

    <x-slot:title>{{ $title }}</x-slot:title>

        <article class="py-8 max-w-screen-md border-b border-gray-400">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            <div class="fontbase text-gray-500">
                <a href="#">{{ $post['author'] }}</a>
            </div>
            <p class="my-4 fontlight">
                {{ $post['content'] }}
            </p>
            <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back</a>
        </article>

</x-Layout>
