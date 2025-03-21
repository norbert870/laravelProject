<x-layout>
    <ul>
        @foreach ($pets as $pet)
            <a href="/pet/{{$pet['id']}}">
                <li>{{$pet['name']}}</li>
            </a>
        @endforeach
    </ul>
</x-layout>