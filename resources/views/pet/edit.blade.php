<x-layout>
    <form method="POST" action="/pet/{{$pet->id}}" class="pet-form">
        @csrf
        @method('PATCH')
        <div class="form-container">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" autocomplete="name" value="{{$pet->name}}" required>
                @error('name')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" value="{{$pet->category}}" required>
                @error('category')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="photoURL">PhotoURL</label>
                <input type="text" name="photoURL" id="photoURL" autocomplete="photoURL" value="{{$pet->photoURL}}" required>
                @error('photoURL')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" autocomplete="status" value="{{$pet->status}}" required>
                @error('status')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="form-actions">
                <button form="delete-form" class="delete-button">Delete</button>
                <a href="/pet/{{$pet->id}}" class="cancel-button">Cancel</a>
                <button type="submit" class="update-button">Update</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/pet/{{$pet->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <style>
        .pet-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #4CAF50;
        }

        .error-message {
            color: #f44336;
            font-size: 14px;
            margin-top: 5px;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .delete-button,
        .update-button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
        }

        .delete-button:hover {
            background-color: #e53935;
        }

        .update-button {
            background-color: #4CAF50;
            color: white;
        }

        .update-button:hover {
            background-color: #45a049;
        }

        .cancel-button {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #333;
            background-color: #ccc;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cancel-button:hover {
            background-color: #aaa;
        }

        .hidden {
            display: none;
        }
    </style>
</x-layout>
