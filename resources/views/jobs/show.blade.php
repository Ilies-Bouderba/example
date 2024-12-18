<x-layout>
    <x-slot:heading>
        Job Information
    </x-slot:heading>

    <x-slot:jobs>
        <div class="py-6">

            @if ($job)
            <h1 class="text-xl font-semibold mb-4">About This Job:</h1>
            <ul class="space-y-4">
                    <li class="bg-white p-4 rounded shadow-md">
                        <h1>{{ $job->employee->name }} </h1>
                        <h3 class="text-lg font-semibold">{{$job->title }}</h3>
                        <p>Salary: {{$job->title }}</p>
                    </li>
            </ul>
            @else
                <h1 class="text-xl font-semibold mb-4">There is no Available Info About this Jobs</h1>
             @endif

            <a href="/job/{{$job->id}}/edit">Edit Job</a>
        </div>
    </x-slot:jobs>

</x-layout>
