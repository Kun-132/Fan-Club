@extends('admin.layout.app')

@section('content')
<div class="d-flex">
    <!-- Sidebar -->
    <div class="p-3 border-end" style="width: 220px;">
        <div class="sidebar">
            <h4>Fan Club Admin</h4>
            <hr>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.flower-stories.index') }}">Flower Stories upload</a>
            <a href="{{ route('admin.country-sections.index') }}">Country Content Sections</a>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="btn btn-danger btn-sm mt-3">Logout</button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        <h2>Edit Country Content Section</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.country-sections.update', $section->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Country</label>
                <select name="country_id" class="form-control" required>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ $section->country_id == $country->id ? 'selected' : '' }}>
                            {{ $country->country_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" value="{{ $section->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Paragraph</label>
                <textarea name="paragraph" class="form-control" rows="5" required>{{ $section->paragraph }}</textarea>
            </div>

            <div class="mb-3">
                <label>Upload New Image (optional)</label>
                <input type="file" name="image" class="form-control">
                @if ($section->image)
                    <p class="mt-2">Current Image: <br><img src="{{ asset('storage/' . $section->image) }}" width="150"></p>
                @endif
            </div>

            <div class="mb-3">
                <label>Video Source URL</label>
                <input type="text" name="video_src" value="{{ $section->video_src }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="show" {{ $section->status === 'show' ? 'selected' : '' }}>Show</option>
                    <option value="hide" {{ $section->status === 'hide' ? 'selected' : '' }}>Hide</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Detail Page</label>
                <select name="detail_page" class="form-control">
                    <option value="">-- Select Detail Page --</option>
                    @foreach($detailPages as $slug => $label)
                        <option value="{{ $slug }}" {{ $section->detail_page === $slug ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
