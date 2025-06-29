@extends('admin.layout.app')

@section('content')
 <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        <h2>Add New Country Content Section</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.country-sections.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Country</label>
                <select name="country_id" class="form-control" required>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Paragraph</label>
                <textarea name="paragraph" class="form-control" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label>Media Type</label>
                <select name="media_type" id="mediaTypeSelect" class="form-control" required>
                    <option value="">Select Media Type</option>
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                </select>
            </div>

            <div class="mb-3" id="imageInput" style="display:none;">
                <label>Upload Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3" id="videoInput" style="display:none;">
                <label>Video Source URL</label>
                <input type="text" name="video_src" class="form-control">
            </div>

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="show">Show</option>
                    <option value="hide">Hide</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Detail Page</label>
                <select name="detail_page" class="form-control">
                    <option value="">-- Select Detail Page --</option>
                    @foreach($detailPages as $slug => $label)
                        <option value="{{ $slug }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mediaTypeSelect = document.getElementById('mediaTypeSelect');
        const imageInput = document.getElementById('imageInput');
        const videoInput = document.getElementById('videoInput');

        mediaTypeSelect.addEventListener('change', function () {
            const value = this.value;
            imageInput.style.display = value === 'image' ? 'block' : 'none';
            videoInput.style.display = value === 'video' ? 'block' : 'none';
        });
    });
</script>
@endsection
