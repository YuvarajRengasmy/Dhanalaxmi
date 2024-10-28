@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
 
    <div class="card-body">
    <h5 class="card-header">Show Event</h5>
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-primary btn-sm" href="{{ route('events.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Title:</strong><br/>
                    {{ $event->title }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Event_Type:</strong><br/>
                    {{ $event->event_type }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Location:</strong><br/>
                    {{ $event->location }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Date :</strong><br/>
                    {{ $event->date }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Time:</strong><br/>
                    {{ $event->time }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Image:</strong><br/>
                    <img src="{{ asset('storage/' . $event->image) }}" alt="image" class="img-fluid" style="max-width: 100px;">
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
