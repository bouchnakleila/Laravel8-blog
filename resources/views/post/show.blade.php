<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts details') }}
        </h2>
    </x-slot>

    <div class="card mb-3">
        <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}<span class="badge bg-primary">{{ $post->category->name }}</span></h5>
          <h5 class="card-title">Author: {{ $post->user->name }}</h5>
          <p class="card-text">{{ $post->body }}</p>
          <p class="card-text"><small class="text-muted">Published: {{ $post->created_at }}</small></p>
        
        <aside>
          <ul>
              @foreach ($comments as $comment)
              <li>
                {{ $comment->comment }}
              </li>
              @endforeach
          </ul>
      </aside>
      </div>
    </div>
</x-app-layout>