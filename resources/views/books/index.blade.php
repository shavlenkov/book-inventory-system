@extends('layouts.app')

@section('title', 'book-inventory-system')

@section('style')
    <style>
        nav {
            width: 200px;
            margin: 0 auto;
        }
    </style>
@endsection

@section('content')

    <div class="flex justify-between">
        <div class="relative mb-6">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <form>
                <input name="search" type="text" id="input-group-1" value="{{ request('search') }}" class="bg-gray-50 w-64 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search book">
            </form>
        </div>

        <div class="mt-2">
            <a href="{{ route('get.signout') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sign out</a>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Author
                </th>
                <th scope="col" class="px-6 py-3">
                    Publication year
                </th>
                <th scope="col" class="px-6 py-3">
                    Publisher
                </th>
                <th scope="col" class="px-6 py-3">
                    ISBN
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($books as $book)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $book->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $book->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $book->author }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $book->publication_year }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $book->publisher }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $book->isbn }}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <br/>

    {{ $books->links() }}

@endsection
