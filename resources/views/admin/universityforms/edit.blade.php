@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
  <div class="card-body">
    <h4 class="card-header">Edit UniversityForm</h4>
    <form action="{{ route('universityforms.update', $universityform->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row col-12 mb-3">
            <!-- Name Field -->
            <div class="col-md-6 mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input 
                    type="text" 
                    name="name" 
                    value="{{ old('name', $universityform->name) }}"
                    class="form-control @error('name') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Enter The Name">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Logo/Image Field -->
            <div class="col-md-6 mb-3">
                <label for="inputImage" class="form-label"><strong>Logo:</strong></label>

                @if($universityform->image)
                    <!-- Display the current image if it exists -->
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $universityform->image) }}" alt="Current Logo" style="max-width: 300px;">
                    </div>
                @endif

                <!-- Input field for uploading a new image -->
                <input 
                    type="file" 
                    name="image" 
                    class="form-control @error('image') is-invalid @enderror" 
                    id="inputImage">
                @error('image')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Content Field -->
            <div class="col-md-6 mb-3">
                <label for="content" class="form-label"><strong>Content:</strong></label>
                <textarea 
                    name="content" 
                    class="form-control @error('content') is-invalid @enderror" 
                    id="content" 
                    placeholder="Start writing your content here..." 
                    rows="4">{{ old('content', $universityform->content) }}</textarea>
                @error('content')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="d-grid gap-5 d-md-flex justify-content-md-end mt-3">
            <a class="btn btn-primary px-3" href="{{ route('universityforms.index') }}"><i class="fa fa-exit"></i> Cancel</a>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </div>       
    </form>
  </div>
</div>

<!-- CKEditor Script -->
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor on the content textarea
    CKEDITOR.replace('content', {
        toolbar: [
            { name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
            { name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe'] },
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] }
        ],
        height: 200,
    });
</script>

@endsection
