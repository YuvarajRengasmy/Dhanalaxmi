@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
 
    <div class="card-body">
    <h5 class="card-header">Show Agents</h5>
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-primary btn-sm" href="{{ route('agents.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Name:</strong><br/>
                    {{ $agent->name }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Content:</strong><br/>
                    {!! $agent->content !!}
                </div>
            </div>
           
            <div class="col-md-6 mb-3">
                <div class="form-group">
                  <strong>Logo:</strong><br/>
                
                    <img src="{{ asset('storage/' . $agent->image) }}" alt="Logo" style="max-width: 300px;">
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
