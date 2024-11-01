@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')
<div class="card">
    <div class="card-body">
        <h4 class="card-header">Add Event</h4>
        <form action="{{ route('stories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row col-12 mb-3">
                <div class="col-md-4 mb-3">
                    <label for="name" class="form-label"><strong>Name:</strong></label>
                    <input type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name"
                        placeholder="Enter The Title"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="col-md-4 mb-3">
                    <label for="photo" class="form-label"><strong>Photo </strong></label>
                    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" id="photo">
                    @error('photo')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="photo_two" class="form-label"><strong>Rating</strong></label>
                    <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror" id="rating">
                    @error('rating')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="review" class="form-label"><strong>Review</strong></label>
                    <textarea 
                        name="review" 
                        class="form-control @error('review') is-invalid @enderror" 
                        id="review" 
                        placeholder="Start writing your review here..." 
                        rows="4">{{ old('review') }}</textarea>
                    @error('review')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
               
                  

                
             
                
            </div>
            <div class="d-grid gap-5 d-md-flex justify-review-md-end mt-3">
                    <a class="btn btn-primary px-3" href="{{ route('blogs.index') }}"><i class="fa fa-exit"></i> Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
                </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor on the textareas
    const editors = ['review'];
    editors.forEach(editor => {
        CKEDITOR.replace(editor, {
            toolbar: [
                { name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates'] },
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
                { name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'photoButton', 'HiddenField'] },
                '/',
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl'] },
                { name: 'insert', items: ['photo', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe'] },
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
