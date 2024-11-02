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
            <a class="btn btn-success btn-sm" href="{{ route('agents.create') }}">
                <i class="fa fa-plus"></i> Add agent
            </a>
        </div>
        agent List
        </h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th class="text-capitalize">Date</th>
                        <th class="text-capitalize">Name</th>
                        <th class="text-capitalize">Logo</th>
                      
                    
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($universityforms as $index => $agent)
                        <tr>
                            <td class="text-capitalize">{{ $index + 1 }}</td>
                            <td class="text-capitalize">{{ $agent->created_at->format('d-m-Y') }}</td>
                            <td class="text-capitalize">{{ $agent->name }}</td>
                            <td class="text-capitalize"><img src="{{ asset('storage/' . $agent->image) }}" alt="Logo" width="100" height="100"></td>
                           
                           
                            <td>
                                <form action="{{ route('universityforms.destroy', $agent->id) }}" method="POST">
                                    <a class="btn btn-info btn-sm" href="{{ route('universityforms.show', $agent->id) }}">
                                        <i class="fa fa-eye"></i> 
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('universityforms.edit', $agent->id) }}">
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
            {!! $agents->links() !!}
        </div>
    </div>
</div>

@endsection
