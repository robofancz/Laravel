<x-layout>
    <x-slot name="heading">
        Log In
    </x-slot>

  <form method="POST" action="/login">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                    <x-form-input id="email" name="email" placeholder="example@test.com" type="email" required/> 
                    <x-form-error name="email"/>
                </div>
            </div>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <x-form-label for="password">Password</x-form-label>
                <div class="mt-2">
                    <x-form-input id="password" name="password" type="password" required/> 
                    <x-form-error name="password"/>
                </div>
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
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <x-form-button>Log In</x-form-button>
    </div>
  </div>
</form>


</x-layout>
