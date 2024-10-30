@extends('layouts.adminlayout')

@section('meta_title', 'Edit Album | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Edit Album Details')

@section('admincontent')
<div class="card">
    <div class="card-body">
        <h4 class="card-header">Edit Album</h4>
        <form action="{{ route('albums.update', $album->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row col-12 mb-3">
                
                <!-- Title Input -->
                <div class="col-md-4 mb-3">
                    <label for="title" class="form-label"><strong>Title:</strong></label>
                    <input type="text"
                        name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        placeholder="Enter The Title"
                        value="{{ old('title', $album->title) }}">
                    @error('title')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Input with Current Image Preview -->
                <div class="col-md-4 mb-3">
                    <label for="image" class="form-label"><strong>Image:</strong></label><br>

                    <!-- Display Current Image -->
                    @if ($album->image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $album->image) }}" alt="Current Image" class="img-fluid" style="max-width: 200px;">
                        </div>
                    @endif

                    <!-- File Input for New Image -->
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Buttons -->
            <div class="d-grid gap-5 d-md-flex justify-content-md-end mt-3">
                <a class="btn btn-primary px-3" href="{{ route('albums.index') }}"><i class="fa fa-exit"></i> Cancel</a>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

@endsection
