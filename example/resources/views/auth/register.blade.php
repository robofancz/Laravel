<x-layout>
    <x-slot name="heading">
        Register
    </x-slot>

  <form method="POST" action="/register">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <x-form-label for="first_name">First Name</x-form-label>
            <div class="mt-2">
              <x-form-input id="first_name" name="first_name" placeholder="John" required/> 
              <x-form-error name="first_name"/>
            </div>
          </div>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <x-form-label for="last_name">Last Name</x-form-label>
                <div class="mt-2">
                    <x-form-input id="last_name" name="last_name" placeholder="Doe" required/> 
                    <x-form-error name="last_name"/>
                </div>
            </div>
        </div>

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
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <div class="mt-2">
                    <x-form-input id="password_confirmation" name="password_confirmation" type="password" required/> 
                    <x-form-error name="password_confirmation"/>
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
      <x-form-button>Register</x-form-button>
    </div>
  </div>
</form>


</x-layout>
