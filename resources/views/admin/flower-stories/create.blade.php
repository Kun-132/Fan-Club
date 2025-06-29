@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Add New Flower Story</h1>
        <a href="{{ route('admin.flower-stories.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.flower-stories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_en" class="form-label">Title (English) *</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_ja" class="form-label">Title (Japanese)</label>
                            <input type="text" class="form-control" id="title_ja" name="title_ja">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_mm" class="form-label">Title (Myanmar)</label>
                            <input type="text" class="form-control" id="title_mm" name="title_mm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_kh" class="form-label">Title (Khmer)</label>
                            <input type="text" class="form-control" id="title_kh" name="title_kh">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image1" class="form-label">Image 1 *</label>
                            <input type="file" class="form-control" id="image1" name="image1" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image2" class="form-label">Image 2</label>
                            <input type="file" class="form-control" id="image2" name="image2">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image3" class="form-label">Image 3</label>
                            <input type="file" class="form-control" id="image3" name="image3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image4" class="form-label">Image 4</label>
                            <input type="file" class="form-control" id="image4" name="image4">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="paragraph_en" class="form-label">Content (English)</label>
                    <textarea class="form-control" id="paragraph_en" name="paragraph_en" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="paragraph_ja" class="form-label">Content (Japanese)</label>
                    <textarea class="form-control" id="paragraph_ja" name="paragraph_ja" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="paragraph_mm" class="form-label">Content (Myanmar)</label>
                    <textarea class="form-control" id="paragraph_mm" name="paragraph_mm" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="paragraph_kh" class="form-label">Content (Khmer)</label>
                    <textarea class="form-control" id="paragraph_kh" name="paragraph_kh" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save Story</button>
            </form>
        </div>
    </div>
</div>
@endsection