@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
  <div class="card-body">
    <h4 class="card-header">Edit University</h4>
    <form action="{{ route('universities.update', $university->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row col-12 mb-3">
            <div class="col-md-6 mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input 
                    type="text" 
                    name="name" 
                    value="{{ $university->name }}"
                    class="form-control @error('name') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Enter The Name">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="inputEmail" class="form-label"><strong>Logo:</strong></label>

                @if($university->image)
                    <!-- Display the current image if it exists -->
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $university->image) }}" alt="Current Logo" style="max-width: 300px;">
                    </div>
                @endif

                <!-- Input field for uploading a new image -->
                <input 
                    type="file" 
                    name="image" 
                    class="form-control @error('image') is-invalid @enderror" 
                    id="inputEmail">
                @error('image')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="inputPhone" class="form-label"><strong>Location:</strong></label>
                <input 
                    type="text" 
                    name="location" 
                    value="{{ $university->location }}"
                    class="form-control @error('location') is-invalid @enderror" 
                    id="inputPhone" 
                    placeholder="Enter The location">
                @error('location')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="d-grid gap-5 d-md-flex justify-content-md-end mt-3">
            <a class="btn btn-primary px-3" href="{{ route('universities.index') }}"><i class="fa fa-exit"></i> Cancel</a>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </div>       
    </form>
  </div>
</div>
@endsection
