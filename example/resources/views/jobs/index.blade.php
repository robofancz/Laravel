<x-layout>
    <x-slot name="heading">
        Job Listings
    </x-slot>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg mb-4 hover:bg-gray-50">
                <div class="font-bold text-blue-500">{{$job->employer->name}}</div>
                <div>
                    <strong class="test">{{ $job['title'] }}</strong> - {{ $job['location'] }}
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
