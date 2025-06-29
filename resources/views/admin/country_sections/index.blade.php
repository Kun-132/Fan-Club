@extends('admin.layout.app')

@section('content')
<div class="container">
    <h2>Country Sections</h2>
    <a href="{{ route('admin.country-sections.create') }}" class="btn btn-primary mb-3">+ Add New Section</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Country</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sections as $section)
            <tr>
                <td>{{ $section->country->country_name }}</td>
                <td>{{ $section->title }}</td>
                <td>{{ $section->status }}</td>
                <td>
                    <a href="{{ route('admin.country-sections.edit', $section->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.country-sections.destroy', $section->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
