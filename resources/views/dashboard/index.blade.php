@extends('layout.main')
@section('content')
    @include('components._sidebar')
    <section id="dashboard-content" class="ml-[250px]">
        @yield('dashboard.content')
    </section>
@endsection
