<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories list') }}
        </h2>
    </x-slot>
    <a href="{{route('category.create')}}" type="button" class="btn btn-primary">New category</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            
          </tr>
        </thead>
        <tbody>
        
            @foreach ($categories as $category)
            @method('delete')
            @csrf
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ substr($category->description, 0,50).'...' }}</td>
                    
                    <td>
                        <a href="{{route('category.edit', $category->id)}}"  class="btn btn-outline-info">Edit</a>
                         
                        
                    </td>
                    <td>
                    <form action="{{ route('category.destroy', $category->id)}}" method="post">
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