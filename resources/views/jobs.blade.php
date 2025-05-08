<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <h1>Jobs</h1>
    <ul>
        @foreach ( $jobs as $job )
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    {{ $job['title'] }} : Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>