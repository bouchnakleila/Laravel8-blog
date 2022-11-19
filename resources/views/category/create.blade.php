<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Category') }}
        </h2>
    </x-slot>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-app-layout>