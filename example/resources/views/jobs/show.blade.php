<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2>{{ $job->title }}</h2>
    <p>{{ $job->location }}</p>

    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Listing</x-button>
    </p>

</x-layout>