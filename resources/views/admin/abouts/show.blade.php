@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
    <div class="card-body">
        <h5 class="card-header">Show About</h5>
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-primary btn-sm" href="{{ route('abouts.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="row mb-3">
            <!-- Title One and Description One -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Title One:</strong><br/>
                    {{ $about->title_one }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Description One:</strong><br/>
                    {{ $about->description_one }}
                </div>
            </div>
            <!-- Image One -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Image One:</strong><br/>
                    @if($about->image_one)
                        <img src="{{ asset('storage/' . $about->image_one) }}" alt="Image One" class="img-fluid" style="max-width: 100px;">
                    @else
                        <span>No Image Uploaded</span>
                    @endif
                </div>
            </div>

            <!-- Title Two and Description Two -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Title Two:</strong><br/>
                    {{ $about->title_two }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Description Two:</strong><br/>
                    {{ $about->description_two }}
                </div>
            </div>
            <!-- Image Two -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Image Two:</strong><br/>
                    @if($about->image_two)
                        <img src="{{ asset('storage/' . $about->image_two) }}" alt="Image Two" class="img-fluid" style="max-width: 100px;">
                    @else
                        <span>No Image Uploaded</span>
                    @endif
                </div>
            </div>

            <!-- Title Three and Description Three -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Title Three:</strong><br/>
                    {{ $about->title_three }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Description Three:</strong><br/>
                    {{ $about->description_three }}
                </div>
            </div>
            <!-- Image Three -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Image Three:</strong><br/>
                    @if($about->image_three)
                        <img src="{{ asset('storage/' . $about->image_three) }}" alt="Image Three" class="img-fluid" style="max-width: 100px;">
                    @else
                        <span>No Image Uploaded</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
