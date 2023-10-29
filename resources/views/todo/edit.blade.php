
@extends('master')
@section('page_title', 'Update - ToDo')

@section('mising_section')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2>Update Task</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('todo.update', $todo->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="title" placeholder="Enter task here.." class="form-control mb-4" value="{{ $todo->title }}">
                                @error('title')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                                <textarea name="description" placeholder="Enter task description" class="form-control mb-4">{{ $todo->description }}</textarea>
                                @error('description')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                                <input type="text" name="author" placeholder="Enter task author name" class="form-control mb-4" value="{{ $todo->author }}">
                                @error('author')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                                <input type="datetime-local" name="due_date" class="form-control mb-4" value="{{ $todo->due_date }}">
                                @error('due_date')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                                <button type="submit" class="btn btn-success w-100">Update Task</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
