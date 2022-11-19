<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
    
    <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">Author</label>
            <select class="form-select" name="user_id" id="user" aria-label="Default select example">
                <option value="">--Select the Author--</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}"  @if ($author->id == (old('user_id') ?? $post->user_id)) selected @endif>
                        {{ $author->name }}
                    </option>
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id" id="category" aria-label="Default select example">
                <option selected>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"   @if ($category->id == (old('user_id') ?? $post->user_id)) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
              </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-app-layout>