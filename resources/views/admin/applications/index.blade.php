@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')

@if(session('success'))
    <div class="alert alert-primary alert-dismissible fade show custom-alert" role="alert">
        {{ session('success') }}
      
    </div>
@endif

<style>
    /* CSS to position the alert at the top-right corner */
    .custom-alert {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050; /* Ensures the alert appears on top */
        width: auto;
        max-width: 300px; /* Adjust width as needed */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a shadow effect */
    }
</style>

<script>
    // JavaScript to auto-close the alert after 5 seconds
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(() => {
            const alert = document.querySelector('.custom-alert');
            if (alert) {
                alert.classList.remove('show'); // Hides the alert
                alert.addEventListener('transitionend', () => alert.remove()); // Removes from DOM after transition
            }
        }, 5000); // 5000 ms = 5 seconds
    });
</script>



<div class="card ">
    <div class="card-body">
        <h4 class="card-header mb-3">
        <div class=" card-header-actions d-flex justify-content-end mb-2 ">
            <a class="btn btn-success btn-sm" href="{{ route('applications.create') }}">
                <i class="fa fa-plus"></i> Add Application
            </a>
        </div>
        Application List
        </h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th class="text-capitalize">Name</th>
                        <th class="text-capitalize">Email</th>
                        <th class="text-capitalize">Phone Number</th>
                        <th class="text-capitalize">Preferred Study Destination</th>
                        <th class="text-capitalize">Course Interest</th>
                        <th class="text-capitalize">Preferred Intake</th>
                        <th class="text-capitalize">Preferred Year</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($applications as $index => $application)
                        <tr>
                            <td class="text-capitalize">{{ $index + 1 }}</td>
                            <td class="text-capitalize">{{ $application->fullName }}</td>
                            <td class="text-capitalize">{{ $application->email }}</td>
                            <td class="text-capitalize">{{ $application->mobile }}</td>
                            <td class="text-capitalize">{{ $application->preferedStudyDestination }}</td>
                            <td class="text-capitalize">{{ $application->courseInterest }}</td>
                            <td class="text-capitalize">{{ $application->preferedIntake }}</td>
                            <td class="text-capitalize">{{ $application->preferedYear }}</td>
                            <td>
                                <form action="{{ route('applications.destroy', $application->id) }}" method="POST">
                                    <a class="btn btn-info btn-sm" href="{{ route('applications.show', $application->id) }}">
                                        <i class="fa fa-eye"></i> 
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('applications.edit', $application->id) }}">
                                        <i class="fa fa-pen"></i> 
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center">No data available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {!! $applications->links() !!}
        </div>
    </div>
</div>
@endsection
