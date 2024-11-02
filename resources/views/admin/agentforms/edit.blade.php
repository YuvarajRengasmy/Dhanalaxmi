@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

<div class="card mt-5">
 
  <div class="card-body">

  <h4 class="card-header">Edit Partner</h4>
    <form action="{{ route('agentforms.update', $agentform->id) }}" method="POST">
        @csrf
        @method('PUT')

       
<div class="row col-12 mb-3">
        <div class="col-md-6 mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input 
                type="text" 
                name="fullName" 
                value="{{ $agentform->name }}"
                class="form-control @error('fullName') is-invalid @enderror" 
                id="inputName" 
                placeholder="Enter The Name">
            @error('fullName')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="inputEmail" class="form-label"><strong>Email:</strong></label>
            <input 
                type="email" 
                name="email" 
                value="{{ $agentform->email }}"
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
                value="{{ $agentform->mobile }}"
                class="form-control @error('mobile') is-invalid @enderror" 
                id="inputPhone" 
                placeholder="Enter The Phone">
            @error('mobile')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

       

        <div class="col-md-6 mb-3">
            <label for="inputPhone" class="form-label"><strong>Support:</strong></label>
            <input 
                type="text" 
                name="support" 
                 value="{{ $agentform->support }}"
                class="form-control @error('support') is-invalid @enderror" 
                id="inputPhone" 
                placeholder="Enter The Phone">
            @error('support')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="inputPhone" class="form-label"><strong>Message :</strong></label>
            <input 
                type="text" 
                name="message" 
                value="{{ $agentform->message }}"
                class="form-control @error('courseInterest') is-invalid @enderror" 
                id="inputPhone" 
                placeholder="Enter The Course Interest">
            @error('message')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

</div>
        <div class="d-grid gap-5 d-md-flex justify-content-md-end mt-3 ">
        <a class="btn btn-primary px-3 " href="{{ route('agentforms.index') }}"><i class="fa fa-exit"></i>Cencel</a>
        <button type="submit" class="btn btn-success"><i class="fa-solid  fa-floppy-disk"></i>Update</button>

    </div>       
    </form>

  </div>
</div>
@endsection