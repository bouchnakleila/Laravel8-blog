<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts list') }}
        </h2>
    </x-slot>
    <a href="{{route('post.create')}}" type="button" class="btn btn-primary">New post</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ substr($post->body, 0,50).'...' }}</td>
                    
                    <td>
                        <a href="/post/{{ $post->id }}" class="btn btn-outline-info">Show</a>
                    </td>
                    <td>
                        <a href="{{route('post.edit', $post->id)}}"  class="btn btn-outline-info">Edit</a>
                    </td>
                    <td>
                    <form action="{{route('post.destroy', $post->id)}}" method="post">
                         @csrf
                         @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</x-app-layout>