<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @csrf
        
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description"  rows="3">{{ $category->description }}</textarea>
        </div>
        
       
        <button type="submit" class="btn btn-primary">Valider</button>
      </form>
</x-app-layout>