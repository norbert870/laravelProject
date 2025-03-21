<x-layout>
    <div class="pets-container">
        @if ($pets->isEmpty())
            <p>No data</p>
        @else
            @foreach ($pets as $pet)
                <a href="/pet/{{$pet['id']}}" class="pet-link">
                    <div class="pet-item">{{$pet->name}}</div>
                </a>
            @endforeach
        @endif
    </div>

    <style>
        .pets-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .pet-link {
            text-decoration: none;
            width: 100%;
            max-width: 300px;
            margin: 10px 0;
        }

        .pet-item {
            background-color: #f9f9f9;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .pet-item:hover {
            background-color: #d1ffd6;
            transform: scale(1.05);
        }

        p {
            font-size: 18px;
            color: #ff6b6b;
            text-align: center;
        }
    </style>
</x-layout>
