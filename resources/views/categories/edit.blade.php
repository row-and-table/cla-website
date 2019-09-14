@extends('layouts.app')
@section('content')
<div class="max-w-3xl mx-auto p-8 bg-white">
    <h1 class="text-2xl font-bold mb-6">Edit Category</h1>
    <form action="/categories/{{$category->id}}" method="POST">
        @csrf
        @method('put')
        <label class="block mb-6">
            <span class="text-gray-700">Title</span>
            <input class="form-input mt-1 block w-full" placeholder="Nonfiction" name="title" value="{{$category->title}}">
        </label>
        <button type="submit" class="bg-blue-700 text-white p-2 rounded-sm uppercase tracking-wide">Submit</button>
    </form>
</div>
@endsection