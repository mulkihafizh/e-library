@extends('layout.main')
@section('content')
    <section id="register" class="h-screen bg-blue-600 flex items-center justify-center">
        <div class="register-form bg-white w-2/5 rounded-lg overflow-hidden">
            <h1 class="text-xl font-semibold px-5 py-3 bg-gray-100 border-b">Register</h1>
            <form action="/register/store" method="POST" class="flex flex-col gap-5">
                @csrf
                <div class="form-group px-5 flex flex-col">
                    <label for="name">Name</label>
                    <input type="text" name="name"
                        class="w-full border px-3 rounded-md focus:outline-none focus:border-indigo-600 ">
                </div>
                <div class="form-group px-5 flex flex-col">
                    <label for="email">Email</label>
                    <input type="email" name="email"
                        class="w-full border px-3 rounded-md focus:outline-none focus:border-indigo-600 ">
                </div>
                <div class="form-group px-5 flex flex-col">
                    <label for="address">Address</label>
                    <input type="text" name="address"
                        class="w-full border px-3 rounded-md focus:outline-none focus:border-indigo-600 ">
                </div>
                <div class="form-group px-5 flex flex-col">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone"
                        class="w-full border px-3 rounded-md focus:outline-none focus:border-indigo-600 ">
                </div>
                <div class="form-group px-5 flex flex-col">
                    <label for="password">Password</label>
                    <input type="password" name="password"
                        class="w-full border px-3 rounded-md focus:outline-none focus:border-indigo-600 ">
                </div>
                <div class="form-group px-5  pb-5">
                    <button type="submit" class="bg-blue-400 px-3 py-1 text-white rounded-3xl">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
