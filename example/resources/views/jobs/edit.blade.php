<x-layout>
    <x-slot name="heading">
        Edit Job: {{ $job['title'] }}
    </x-slot>

  <form method="POST" action="/jobs/{{ $job->id }}" class="mx-auto mt-16 max-w-2xl">
    @csrf
    @method('PATCH')

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                <input 
                id="title" 
                type="text" 
                name="title" 
                placeholder="Senior Backend Developer" 
                value="{{$job->title}}"
                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
                required/>
              </div>
              @error('title')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>

            <div class="sm:col-span-4">
              <label for="location" class="block text-sm/6 font-medium text-gray-900">Location</label>
              <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                  <input 
                  id="location" 
                  type="text" 
                  name="location" 
                  placeholder="New York, NY" 
                  value="{{$job->location}}"
                  class="block flex-1 border-0 bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
                  required/>
                </div>
                @error('location')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                {{-- all validation error availible in laravel docs --}}
            </div>
        </div>
        {{-- <div class="mt-4 text-red-600">
          @if ($errors->any())
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          @endif
        </div> --}}
      </div>
    </div>
    <div class="mt-6 flex items-center justify-between gap-x-6">
      <div class="flex items-center">
        <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
      </div>
      <div class="flex items-center gap-x-6">
        <div>
        <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
        </div>
        <div>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </div>
  </div>      
</div>

</form>
<form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
  @csrf
  @method('DELETE')
</form>


</x-layout>
