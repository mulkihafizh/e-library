@extends('dashboard.index')

@section('dashboard.content')
    <div id="books" class="container py-8 min-h-screen">
        <h1 class="title text-2xl font-semibold py-4">
            Create Book
        </h1>
        <form action="/dashboard/books/store" method="POST"
            class="border bg-white  grid grid-cols-2 gap-3 overflow-hidden rounded-lg w-3/4" enctype="multipart/form-data">
            @csrf
            <h1 class="title col-span-2 bg-gray-100 border-b text-xl py-2 px-5">Add Book Form</h1>
            <div class="form-group col-span-2 px-5 pt-3">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title"
                    class="mt-1 focus:ring-indigo-500 border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
            </div>
            <div class="form-group col-span-2 px-5">
                <label for="writer" class="block text-sm font-medium text-gray-700">Writer</label>
                <input type="text" name="writer" id="writer"
                    class="mt-1 focus:ring-indigo-500 border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
            </div>
            <div class="form-group  pl-5">
                <label for="publisher" class="block text-sm font-medium text-gray-700">Publisher</label>
                <input type="text" name="publisher" id="publisher"
                    class="mt-1 focus:ring-indigo-500 border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
            </div>
            <div class="form-group  pr-5">
                <label for="isbn" class="block text-sm font-medium text-gray-700">No. ISBN</label>
                <input type="text" name="isbn" id="isbn"
                    class="mt-1 focus:ring-indigo-500 border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
            </div>
            <div class="form-group  pl-5">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" id="category_id"
                    class=" mt-1 focus:ring-indigo-500 border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  focus:outline-none">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ Str::title($category->name) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group  pr-5">
                <label for="synopsis" class="block text-sm font-medium text-gray-700">Synopsis</label>
                <textarea name="synopsis" id="synopsis" cols="30" rows="2"
                    class="mt-1 focus:ring-indigo-500 border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  focus:outline-none"></textarea>
            </div>
            <div class="form-group  pl-5">
                <label for="cover" class="block text-sm font-medium text-gray-700">Cover</label>
                <input type="file" name="cover" id="cover"
                    class="mt-1 focus:ring-indigo-500  border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
            </div>
            <div class="form-group  pr-5">
                <label for="file" class="block text-sm font-medium text-gray-700">File</label>
                <input type="file" name="file" id="file"
                    class="mt-1 focus:ring-indigo-500  border focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
            </div>
            <div class="form-group  pb-3 pl-5">
                <button type="submit" class="bg-blue-500  rounded-3xl text-white px-3 py-1 ">Submit</button>
            </div>
        </form>
        <div class="book-table mt-6">
            <table class="w-full">
                <thead class="rounded-t-lg border overflow-hidden">
                    <tr class="bg-white text-left ">
                        <th class="border rounded-t-lg font-medium px-4 py-2">No</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">Book ID</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">Category ID</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">Title</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">Writer</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">Publisher</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">ISBN</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">Synopsis</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">Cover Book</th>
                        <th class="border rounded-t-lg font-medium px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $book->id }}</td>
                            <td class="border px-4 py-2">{{ Str::tittle($book->category->name) }}</td>
                            <td class="border px-4 py-2">{{ $book->title }}</td>
                            <td class="border px-4 py-2">{{ $book->writer }}</td>
                            <td class="border px-4 py-2">{{ $book->publisher }}</td>
                            <td class="border px-4 py-2">{{ $book->isbn }}</td>
                            <td class="border px-2 py-2 overflow-">{{ $book->synopsis }}</td>
                            <td class="border px-4 py-2">{{ $book->cover }}</td>
                            <td class="border px-4 py-2">
                                <a href="" class="bg-yellow-300 text-white">Edit</a>
                                <a href="/dashboard/books/{{ $book->id }}/delete"
                                    class="bg-red-600 text-white">Delete</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
