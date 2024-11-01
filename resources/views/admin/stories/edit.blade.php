@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
 
  <div class="card-body">

  <h4 class="card-header">Edit storie</h4>
    <form action="{{ route('stories.update',$storie->id) }}" method="POST">
        @csrf
        @method('PUT')

       
<div class="row col-12 mb-3">
        <div class="col-md-6 mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input 
                type="text" 
                name="name" 
                value="{{ $storie->fullName }}"
                class="form-control @error('name') is-invalid @enderror" 
                id="inputName" 
                placeholder="Enter The Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="inputEmail" class="form-label"><strong>Email:</strong></label>
            <input 
                type="email" 
                name="email" 
                value="{{ $storie->email }}"
                class="form-control @error('email') is-invalid @enderror" 
                id="inputEmail" 
                placeholder="Enter The Email">
            @error('email')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="inputPhone" class="form-label"><strong>Phone Number:</strong></label>
            <input 
                type="text" 
                name="mobile" 
                value="{{ $storie->mobile }}"
                class="form-control @error('mobile') is-invalid @enderror" 
                id="inputPhone" 
                placeholder="Enter The Phone">
            @error('mobile')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

       

        <div class="col-md-6 mb-3">
            <label for="inputPhone" class="form-label"><strong>Prefered Study Destination:</strong></label>
            <input 
                type="text" 
                name="preferedStudyDestination" 
                 value="{{ $storie->preferedStudyDestination }}"
                class="form-control @error('preferedStudyDestination') is-invalid @enderror" 
                id="inputPhone" 
                placeholder="Enter The Phone">
            @error('preferedStudyDestination')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="inputPhone" class="form-label"><strong>Course Interest :</strong></label>
            <input 
                type="text" 
                name="courseInterest" 
                value="{{ $storie->courseInterest }}"
                class="form-control @error('courseInterest') is-invalid @enderror" 
                id="inputPhone" 
                placeholder="Enter The Course Interest">
            @error('courseInterest')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="inputPhone" class="form-label"><strong>Prefered Intake:</strong></label>
            <input 
                type="text" 
                name="preferedIntake" 
                value="{{ $storie->preferedIntake }}"
                class="form-control @error('preferedIntake') is-invalid @enderror" 
                id="inputPhone" 
                placeholder="Enter The Prefered Intake">
            @error('preferedIntake')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-md-6 mb-3">
            <label for="inputPhone" class="form-label"><strong>Prefered Year:</strong></label>
            <input 
                type="text" 
                name="preferedYear" 
                value="{{ $storie->preferedYear }}"
                class="form-control @error('preferedYear') is-invalid @enderror" 
                id="inputPhone" 
                placeholder="Enter The Prefered Year">
            @error('preferedYear')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
</div>
        <div class="d-grid gap-5 d-md-flex justify-content-md-end mt-3 ">
        <a class="btn btn-primary px-3 " href="{{ route('stories.index') }}"><i class="fa fa-exit"></i>Cencel</a>
        <button type="submit" class="btn btn-success"><i class="fa-solid  fa-floppy-disk"></i>Update</button>

    </div>       
    </form>

  </div>
</div>
@endsection