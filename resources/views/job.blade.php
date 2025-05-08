<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <h1>Jobs</h1>
    <ul>
        <li>
            <p href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                {{ $job['title'] }} : Pays {{ $job['salary'] }} per year.
            </p>
        </li>
    </ul>
</x-layout>
