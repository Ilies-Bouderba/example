<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <x-slot:jobs>
        <div class="py-6">

            @if ($jobs)
            <h1 class="text-xl font-semibold mb-4">Available Jobs</h1>
            <ul class="space-y-4">
                @foreach ($jobs as $job)
                    <li class="bg-white p-4 rounded shadow-md">
                        <h1>{{ $job->employee->name }}</h1>
                        <a href="/job/{{$job['id']}}"><h3 class="text-lg font-semibold">{{$job['title']}}</h3></a>
                        <p>Salary: {{$job['salary']}}</p>
                    </li>
                @endforeach
            </ul>
            <div class="my-5">{{ $jobs->links() }} </div>
            @else
                <h1 class="text-xl font-semibold mb-4">There is no Available Jobs</h1>
            @endif
            

        </div>

    </x-slot:jobs>

</x-layout>
