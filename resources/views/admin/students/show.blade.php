@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
 
    <div class="card-body">
    <h5 class="card-header">Show Student</h5>
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-primary btn-sm" href="{{ route('students.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Name:</strong><br/>
                    {{ $student->fullName }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Email:</strong><br/>
                    {{ $student->email }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Phone Number:</strong><br/>
                    {{ $student->mobile }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Preferred Study Destination:</strong><br/>
                    {{ $student->preferedStudyDestination }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Course Interest:</strong><br/>
                    {{ $student->courseInterest }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Preferred Intake:</strong><br/>
                    {{ $student->preferedIntake }}
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <strong>Preferred Year:</strong><br/>
                    {{ $student->preferedYear }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
