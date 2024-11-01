@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
    <div class="card-body">
        <h5 class="card-header">Show Photo</h5>
        
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-primary btn-sm" href="{{ route('albums.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="row mb-3">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <strong>Image:</strong><br/>
                    <!-- Full-size image display -->
                    <img src="{{ asset('storage/' . $album->image) }}" alt="image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
