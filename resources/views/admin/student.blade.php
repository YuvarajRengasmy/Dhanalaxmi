@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')

@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')
<div class="container-fluid">
    <!-- Add/Edit Student Form (Initially Collapsed) -->
    <div class="collapse" id="studentFormSection">
        <div class="card mb-4">
            <div class="card-header bg-transparent mb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <span id="formTitle">Add/Edit Student</span>
                    <button class="btn btn-custom btn-sm ps-2" data-toggle="collapse" href="#studentFormSection" role="button" aria-expanded="false" aria-controls="studentFormSection">Hide</button>
                </div>
            </div>
            <div class="card-body">
                <form id="studentForm" action="{{ route('student.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <input type="hidden" id="studentId" name="student_id"> <!-- Hidden field for student ID -->
                    <div class="form-group">
                        <label for="studentName">Name</label>
                        <input type="text" class="form-control" id="studentName" name="name" placeholder="Enter name" required>
                        <div class="invalid-feedback">Name is required.</div>
                    </div>
                    <div class="form-group">
                        <label for="studentEmail">Email</label>
                        <input type="email" class="form-control" id="studentEmail" name="email" placeholder="Enter email" required>
                        <div class="invalid-feedback">Valid email is required.</div>
                    </div>
                    <div class="form-group">
                        <label for="studentPhone">Phone</label>
                        <input type="tel" class="form-control" id="studentPhone" name="phone" placeholder="Enter phone number" required>
                        <div class="invalid-feedback">Phone number is required.</div>
                    </div>
                                    <div class='d-flex justify-content-end '>
                  
                    <button type="button" class="btn btn-danger btn-sm ps-2" data-toggle="collapse" href="#studentFormSection" role="button">Cancel</button>
                    <button type="submit" class="btn btn-success pe-2 ">Save</button></div>
                </form>
            </div>
        </div>
    </div>

    <section class="student-table">
        <div class="container">
            <div class="card rounded border">
                <div class="card-header bg-transparent border-bottom-0 mb-0">
                    <div class="search-button-section">
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" class="form-control form-control-sm w-25 rounded" placeholder="Search...">
                            <div class='add-section'>
                                <button type="button" class="btn btn-primary btn-sm pe-2">Filter</button>
                                <button class="btn btn-custom btn-sm ps-2" data-toggle="collapse" href="#studentFormSection" role="button" aria-expanded="false" aria-controls="studentFormSection">Add Student</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body mt-0 py-1">
                    <div class="card-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-secondary">
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>S.No</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($students as $index => $student)
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $student->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td class="action-section">
                                            <button class="btn btn-primary btn-sm" onclick="editStudent({{ $student }})">Edit</button>
                                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0 mt-0 pt-0">
                    <div class="sort-section">
                        <div class="d-flex justify-content-between align-items-center p-3">
                            <p class="me-auto">
                                Show
                                <select class="form-select rounded d-inline mx-2" style="width: auto; display: inline-block; font-size: 12px;">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                                Entries out of {{ $students->total() }}
                            </p>
                            <nav aria-label="Page navigation example">
                                {{ $students->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function clearForm() {
            document.getElementById('studentForm').reset();
            document.getElementById('studentId').value = '';
            document.getElementById('formTitle').innerText = 'Add Student';
            document.getElementById('studentForm').action = '{{ route('student.store') }}';
        }

        function editStudent(student) {
            document.getElementById('studentId').value = student.id;
            document.getElementById('studentName').value = student.name;
            document.getElementById('studentEmail').value = student.email;
            document.getElementById('studentPhone').value = student.phone;

            document.getElementById('formTitle').innerText = 'Edit Student';
            document.getElementById('studentForm').action = `/student/update/${student.id}`;
            
            let studentFormSection = document.getElementById('studentFormSection');
            if (!studentFormSection.classList.contains('show')) {
                studentFormSection.classList.add('show');
            }
        }
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @elseif (session('error'))
                toastr.error("{{ session('error') }}");
            @endif

            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "3000" // Set timeOut to 3000 milliseconds
            };
        });
    </script>

    <section class='note-section'>
        <div class="container"> 
            <div class="card mt-3">
                <div class="card-header">Notes History for John Doe</div>
                <div class="card-body">
                    <div class="note mb-3">
                        <div class="border p-2">
                            <p><strong>Old Value:</strong> Needs improvement in math skills</p>
                            <p><strong>New Value:</strong> Improved in math skills</p>
                            <p><strong>Changed By:</strong> Admin</p>
                            <p><strong>Date & Time:</strong> 2024-10-24 10:45:23</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newNote">Add New Note</label>
                        <textarea class="form-control" id="newNote" rows="3" placeholder="Enter new note..."></textarea>
                    </div>
                    <button class="btn btn-primary btn-sm">Add Note</button>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
