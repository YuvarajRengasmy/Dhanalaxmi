@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card">
  <div class="card-body">
    <h4 class="card-header">Add University</h4>
    <form action="{{ route('universities.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row col-12 mb-3">
            <div class="col-md-6 mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Enter The Name">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="image" class="form-label"><strong>Logo</strong></label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                @error('image')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="inputPhone" class="form-label"><strong>Location:</strong></label>
                <input 
                    type="text" 
                    name="location" 
                    class="form-control @error('location') is-invalid @enderror" 
                    id="inputPhone" 
                    placeholder="Enter The Location">
                @error('location')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div> 
        </div>
        <div class="d-grid gap-5 d-md-flex justify-content-md-end mt-3">
            <a class="btn btn-primary px-3" href="{{ route('universities.index') }}"><i class="fa fa-exit"></i> Cancel</a>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </div>
    </form>
  </div>
</div>
@endsection
