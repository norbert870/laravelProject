<x-layout>
    <form method="POST" action="/pet" class="pet-create-form">
        @csrf
        <div class="form-container">
            <h2>Create a New Pet</h2>

            <x-form-field>
                <x-form-label for="name">Name</x-form-label>
                <div class="input-container">
                    <x-form-input name="name" id="name" placeholder="name" required />
                    <x-form-error name="name" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="category">Category</x-form-label>
                <div class="input-container">
                    <x-form-input name="category" id="category" placeholder="category" required />
                    <x-form-error name="category" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="photoURL">PhotoURL</x-form-label>
                <div class="input-container">
                    <x-form-input name="photoURL" id="photoURL" placeholder="photoURL" required />
                    <x-form-error name="photoURL" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="status">Status</x-form-label>
                <div class="input-container">
                    <x-form-input name="status" id="status" placeholder="status" required />
                    <x-form-error name="status" />
                </div>
            </x-form-field>

            <div class="form-actions">
                <x-form-button class="x-form-button">Save</x-form-button>
            </div>
        </div>
    </form>

    <style>
        .pet-create-form {
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

        h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .input-container {
            margin-bottom: 10px;
        }

        .form-actions {
            display: flex;
            justify-content: center;
        }

        .form-field {
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
            justify-content: center;
            margin-top: 20px;
        }

        .x-form-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .x-form-button:hover {
            background-color: #45a049;
        }
    </style>
</x-layout>
