<x-Layout>
    <div class="space-y-15 md:space-y-16">
        @foreach ($posts as $post)
        <x-post :$post list></x-post>
        @endforeach
        {{-- récupère la méthode links --}}
        {{ $posts->links() }}
    </div>
</x-layout>