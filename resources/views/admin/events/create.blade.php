@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')
<div class="card">
    <div class="card-body">
        <h4 class="card-header">Add Event</h4>
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row col-12 mb-3">
                <div class="col-md-4 mb-3">
                    <label for="title" class="form-label"><strong>Title:</strong></label>
                    <input type="text"
                        name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        placeholder="Enter The Title"
                        value="{{ old('title') }}">
                    @error('title')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="col-md-4 mb-3">
                    <label for="image" class="form-label"><strong>Image </strong></label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="image_two" class="form-label"><strong>Event Type</strong></label>
                    <input type="text" name="event_type" class="form-control @error('event_type') is-invalid @enderror" id="event_type">
                    @error('event_type')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
            <label class="form-label" for="customFile"><strong>Location:</strong></label>
           <input type="text"  name="location" class="form-control mb-2 @error('location') is-invalid @enderror" id="customFile" />      
                    @error('location')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
            <label class="form-label" for="customFile"><strong>Date:</strong></label>
           <input type="date"  name="date" class="form-control mb-2 @error('date') is-invalid @enderror" id="customFile" />      
                    @error('date')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
            <label class="form-label" for="customFile"><strong>Time:</strong></label>
           <input type="time"  name="time" class="form-control mb-2 @error('time') is-invalid @enderror" id="customFile" />      
                    @error('time')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                
             
                
            </div>
            <div class="d-grid gap-5 d-md-flex justify-content-md-end mt-3">
                    <a class="btn btn-primary px-3" href="{{ route('blogs.index') }}"><i class="fa fa-exit"></i> Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
                </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor on the textareas
    const editors = ['content'];
    editors.forEach(editor => {
        CKEDITOR.replace(editor, {
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
            // Additional configuration can be set here
        });
    });

    // JavaScript for dynamically adding tags
    document.getElementById('add-tag').addEventListener('click', function() {
        const tagContainer = document.getElementById('tag-container');
        const newTagInput = document.createElement('input');
        newTagInput.type = 'text';
        newTagInput.name = 'tags[]';
        newTagInput.className = 'form-control mb-2';
        newTagInput.placeholder = 'Add another tag';
        tagContainer.appendChild(newTagInput);
    });

    // JavaScript for dynamically adding categories
    document.getElementById('add-category').addEventListener('click', function() {
        const categoryContainer = document.getElementById('category-container');
        const newCategoryInput = document.createElement('input');
        newCategoryInput.type = 'text';
        newCategoryInput.name = 'categories[]';
        newCategoryInput.className = 'form-control mb-2';
        newCategoryInput.placeholder = 'Add another category';
        categoryContainer.appendChild(newCategoryInput);
    });
</script>
@endsection
