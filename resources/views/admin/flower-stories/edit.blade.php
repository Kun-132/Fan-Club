@extends('admin.layout.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Edit Flower Story</h1>
        <a href="{{ route('admin.flower-stories.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.flower-stories.update', $flowerStory->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_en" class="form-label">Title (English) *</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $flowerStory->title_en }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_ja" class="form-label">Title (Japanese)</label>
                            <input type="text" class="form-control" id="title_ja" name="title_ja" value="{{ $flowerStory->title_ja }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_mm" class="form-label">Title (Myanmar)</label>
                            <input type="text" class="form-control" id="title_mm" name="title_mm" value="{{ $flowerStory->title_mm }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_kh" class="form-label">Title (Khmer)</label>
                            <input type="text" class="form-control" id="title_kh" name="title_kh" value="{{ $flowerStory->title_kh }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image1" class="form-label">Image 1 *</label>
                            <input type="file" class="form-control" id="image1" name="image1">
                            @if($flowerStory->image1)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $flowerStory->image1) }}" width="100" class="img-thumbnail">
                                <small class="text-muted">Current image</small>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image2" class="form-label">Image 2</label>
                            <input type="file" class="form-control" id="image2" name="image2">
                            @if($flowerStory->image2)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $flowerStory->image2) }}" width="100" class="img-thumbnail">
                                <small class="text-muted">Current image</small>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image3" class="form-label">Image 3</label>
                            <input type="file" class="form-control" id="image3" name="image3">
                            @if($flowerStory->image3)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $flowerStory->image3) }}" width="100" class="img-thumbnail">
                                <small class="text-muted">Current image</small>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image4" class="form-label">Image 4</label>
                            <input type="file" class="form-control" id="image4" name="image4">
                            @if($flowerStory->image4)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $flowerStory->image4) }}" width="100" class="img-thumbnail">
                                <small class="text-muted">Current image</small>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="paragraph_en" class="form-label">Content (English)</label>
                    <textarea class="form-control" id="paragraph_en" name="paragraph_en" rows="3">{{ $flowerStory->paragraph_en }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="paragraph_ja" class="form-label">Content (Japanese)</label>
                    <textarea class="form-control" id="paragraph_ja" name="paragraph_ja" rows="3">{{ $flowerStory->paragraph_ja }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="paragraph_mm" class="form-label">Content (Myanmar)</label>
                    <textarea class="form-control" id="paragraph_mm" name="paragraph_mm" rows="3">{{ $flowerStory->paragraph_mm }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="paragraph_kh" class="form-label">Content (Khmer)</label>
                    <textarea class="form-control" id="paragraph_kh" name="paragraph_kh" rows="3">{{ $flowerStory->paragraph_kh }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update Story</button>
            </form>
        </div>
    </div>
</div>
@endsection