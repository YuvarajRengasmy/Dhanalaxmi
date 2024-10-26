@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')
<div class="card">
    <div class="card-body">
        <h4 class="card-header">Add About</h4>
        <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row col-12 mb-3">
                <!-- Title One -->
                <div class="col-md-6 mb-3">
                    <label for="title_one" class="form-label"><strong>Title One:</strong></label>
                    <input 
                        type="text" 
                        name="title_one" 
                        class="form-control @error('title_one') is-invalid @enderror" 
                        id="title_one" 
                        placeholder="Enter The Title" 
                        value="{{ old('title_one') }}">
                    @error('title_one')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image One -->
                <div class="col-md-6 mb-3">
                    <label for="image_one" class="form-label"><strong>Image One:</strong></label>
                    <input type="file" name="image_one" class="form-control @error('image_one') is-invalid @enderror" id="image_one">
                    @error('image_one')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description One -->
                <div class="col-md-6 mb-3">
                    <label for="description_one" class="form-label"><strong>Description One:</strong></label>
                    <textarea 
                        name="description_one" 
                        class="form-control @error('description_one') is-invalid @enderror" 
                        id="description_one" 
                        placeholder="Start writing your content here..." 
                        rows="4">{{ old('description_one') }}</textarea>
                    @error('description_one')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <!-- Title Two -->
                <div class="col-md-6 mb-3">
                    <label for="title_two" class="form-label"><strong>Title Two:</strong></label>
                    <input 
                        type="text" 
                        name="title_two" 
                        class="form-control @error('title_two') is-invalid @enderror" 
                        id="title_two" 
                        placeholder="Enter The Title" 
                        value="{{ old('title_two') }}">
                    @error('title_two')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Two -->
                <div class="col-md-6 mb-3">
                    <label for="image_two" class="form-label"><strong>Image Two:</strong></label>
                    <input type="file" name="image_two" class="form-control @error('image_two') is-invalid @enderror" id="image_two">
                    @error('image_two')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description Two -->
                <div class="col-md-6 mb-3">
                    <label for="description_two" class="form-label"><strong>Description Two:</strong></label>
                    <textarea 
                        name="description_two" 
                        class="form-control @error('description_two') is-invalid @enderror" 
                        id="description_two" 
                        placeholder="Start writing your content here..." 
                        rows="4">{{ old('description_two') }}</textarea>
                    @error('description_two')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <!-- Title Three -->
                <div class="col-md-6 mb-3">
                    <label for="title_three" class="form-label"><strong>Title Three:</strong></label>
                    <input 
                        type="text" 
                        name="title_three" 
                        class="form-control @error('title_three') is-invalid @enderror" 
                        id="title_three" 
                        placeholder="Enter The Title" 
                        value="{{ old('title_three') }}">
                    @error('title_three')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Three -->
                <div class="col-md-6 mb-3">
                    <label for="image_three" class="form-label"><strong>Image Three:</strong></label>
                    <input type="file" name="image_three" class="form-control @error('image_three') is-invalid @enderror" id="image_three">
                    @error('image_three')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description Three -->
                <div class="col-md-6 mb-3">
                    <label for="description_three" class="form-label"><strong>Description Three:</strong></label>
                    <textarea 
                        name="description_three" 
                        class="form-control @error('description_three') is-invalid @enderror" 
                        id="description_three" 
                        placeholder="Start writing your content here..." 
                        rows="4">{{ old('description_three') }}</textarea>
                    @error('description_three')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-grid gap-5 d-md-flex justify-content-md-end mt-3">
                <a class="btn btn-primary px-3" href="{{ route('applications.index') }}"><i class="fa fa-exit"></i> Cancel</a>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor on the textareas
    const editors = ['description_one', 'description_two', 'description_three'];
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
</script>
@endsection
