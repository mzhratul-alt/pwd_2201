@extends('master')
@section('page_title', 'Create - ToDo')

@section('mising_section')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2>Create Task</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('todo.store') }}" method="POST">
                                @csrf
                                <input type="text" name="title" placeholder="Enter task here.." class="form-control mb-4">
                                @error('title')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                                <textarea name="description" placeholder="Enter task description" class="form-control mb-4"></textarea>
                                @error('description')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                                <input type="text" name="author" placeholder="Enter task author name" class="form-control mb-4">
                                @error('author')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                                <input type="datetime-local" name="due_date" class="form-control mb-4">
                                @error('due_date')
                                    <span class="text-danger small"> {{ $message }} </span>
                                @enderror
                                <button type="submit" class="btn btn-success w-100">Add New Task</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
