<x-layout>
    <x-slot:heading>
        Job Editing : {{ $job->title }} 
    </x-slot:heading>

    <form method="POST" action="/job/{{$job->id}}">
        @csrf
        @method("PATCH");
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">title</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6"></div>
                    <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{$job->title}}">
                  </div>
                </div>
                @error('title')
                    {{$message}}
                @enderror
              </div>

              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-gray-900">salary</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6"></div>
                    <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{$job->salary}}">
                  </div>
                </div>
                @error('salary')
                   {{$message}}
                @enderror
              </div>
    
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button form="delete-form" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">DELETE</button>
            <a href="/job/{{$job->id}}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>

      <form method="POST" action="/job/{{$job->id}}" class="hidden" id="delete-form">
        @csrf   
        @method('DELETE');
      </form>

      {{-- @if($errors->any())
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      @endif --}}
      
</x-layout>
