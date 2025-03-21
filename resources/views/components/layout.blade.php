<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                color: #333;
                margin: 0;
                padding: 0;
            }

            h1 {
                font-size: 36px;
                color: #4CAF50;
                margin-top: 20px;
                text-align: center;
            }

            a {
                text-decoration: none;
                color: inherit;
            }

            .x-button {
                display: inline-block;
                background-color: #008CBA;
                color: white;
                padding: 10px 20px;
                margin: 10px 0;
                text-align: center;
                border-radius: 5px;
                cursor: pointer;
            }

            .x-button:hover {
                background-color: #005f73;
            }

            .container {
                width: 80%;
                margin: 0 auto;
                padding: 20px;
                text-align: center;
            }

            .filter-form {
                margin-bottom: 20px;
            }

            .filter-form select {
                padding: 8px;
                border-radius: 4px;
                border: 1px solid #ccc;
                font-size: 16px;
            }

            .filter-form label {
                font-size: 18px;
                margin-right: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1><a href="/pet">PETS</a></h1>

            @if(request()->is('pet'))
                <form method="GET" action="/pet" class="filter-form">
                    <label for="status">Filter by Status:</label>
                    <select name="status" id="status" onchange="this.form.submit()">
                        <option value="">All</option>
                        <option value="available" {{ request('status') === 'available' ? 'selected' : '' }}>Available</option>
                        <option value="adopted" {{ request('status') === 'adopted' ? 'selected' : '' }}>Adopted</option>
                        <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                </form>
            @endif

            <x-button href="/pet/create" class="x-button">Add Pet</x-button>

            {{$slot}}
        </div>
    </body>
</html>
