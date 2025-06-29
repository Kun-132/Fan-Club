@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Flower Stories</h1>
        <a href="{{ route('admin.flower-stories.create') }}" class="btn btn-primary">Add New Story</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title (EN)</th>
                            <th>Images</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stories as $story)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $story->title_en }}</td>
                            <td>
                                @if($story->image1)
                                <img src="{{ asset('storage/' . $story->image1) }}" width="50" class="img-thumbnail">
                                @endif
                            </td>
                            <td>{{ $story->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('admin.flower-stories.edit', $story->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.flower-stories.destroy', $story->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $stories->links() }}
        </div>
    </div>
</div>
@endsection