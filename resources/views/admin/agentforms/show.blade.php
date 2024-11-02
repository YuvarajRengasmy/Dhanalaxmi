@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
 
    <div class="card-body">
    <h5 class="card-header">Show Partner</h5>
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-primary btn-sm" href="{{ route('agentforms.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Name:</strong><br/>
                    {{ $agentform->name }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Email:</strong><br/>
                    {{ $agentform->email }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Phone Number:</strong><br/>
                    {{ $agentform->mobile }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Support:</strong><br/>
                    {{ $agentform->support }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Message:</strong><br/>
                    {{ $agentform->message }}
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection
