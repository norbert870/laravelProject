<x-layout>
    <div class="pet-details">
        <h2 class="pet-name">Name: {{$pet->name}}</h2>
        <p class="pet-category">Category: {{$pet->category}}</p>
        <img src="{{$pet->photoURL}}" alt="pet image" class="pet-image">
        <p>Status: {{$pet->status}}</p>
    </div>
    <div class="pet-actions">
        <x-button href="/pet/{{$pet->id}}/edit" class="edit-button">Edit</x-button>
        <button form="delete-form" class="delete-button">Delete</button>
        <form method="POST" action="/pet/{{$pet->id}}" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>

    <style>
        .pet-details {
            text-align: center;
            margin: 20px;
        }

        .pet-name {
            font-size: 28px;
            color: #333;
        }

        .pet-category {
            font-size: 18px;
            color: #555;
        }

        .pet-image {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 8px;
            margin-top: 15px;
        }

        .pet-actions {
            margin-top: 20px;
            text-align: center;
        }

        .edit-button,
        .delete-button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .edit-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }

        .edit-button:hover {
            background-color: #45a049;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: #e53935;
        }

        .hidden {
            display: none;
        }
    </style>
</x-layout>
