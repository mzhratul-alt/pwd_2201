@extends('master')

@section('mising_section')
    <section>
        <div class="container-fluid mt-5">
            <div class="table-responsive">
                <table class="text-center table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($todos as $key => $todo)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{  $todo->title }}</td>
                                <td>{{  $todo->description }}</td>
                                <td>{{  $todo->author }}</td>
                                <td>{{  Carbon\Carbon::parse($todo->due_date)->format('h:i a - d-M-Y') }}</td>
                                <td>
                                    <span class="badge bg-{{ $todo->status ? 'success': 'danger' }}">{{ $todo->status ? 'Done': 'Unfinished' }}</span>
                                </td>
                                <td>{{  Carbon\Carbon::parse($todo->created_at)->diffForHumans() }}</td>
                                <td>{{  Carbon\Carbon::parse($todo->updated_at)->diffForHumans() }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('todo.edit',$todo->id ) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
