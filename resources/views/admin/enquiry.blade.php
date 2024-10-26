@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa Consultancy Services')
@section('meta_description', 'Study Abroad and Visa Consultancy Services')

@section('admincontent')
<div>
    <div class="container-fluid">


        <!-- Contacts Table -->


        <!-- Contacts Types in a Single Card on the Left -->
       
            <div class="collapse" id="studentFormSection">
                <div class="card mb-4">
                    <div class="card-header bg-transparent  mb-0">
                        <div class='d-flex justify-content-between align-items-center'>
                            Add/Edit Enquiry


                            <button class="btn btn-custom btn-sm ps-2" data-toggle="collapse" href="#studentFormSection"
                                role="button" aria-expanded="false" aria-controls="studentFormSection">Hide</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contact.store') }}" method="POST" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="studentName">Name</label>
                                <input type="text" class="form-control" id="studentName" name="studentName"
                                    placeholder="Enter name" required>
                                <div class="invalid-feedback">Name is required.</div>
                            </div>
                            <div class="form-group">
                                <label for="studentEmail">Email</label>
                                <input type="email" class="form-control" id="studentEmail" name="studentEmail"
                                    placeholder="Enter email" required>
                                <div class="invalid-feedback">Valid email is required.</div>
                            </div>
                            <div class="form-group">
                                <label for="studentPhone">Phone</label>
                                <input type="tel" class="form-control" id="studentPhone" name="studentPhone"
                                    placeholder="Enter phone number" required>
                                <div class="invalid-feedback">Phone number is required.</div>
                            </div>
                            <div class='d-flex justify-content-end '>

                                <button type="button" class="btn btn-danger btn-sm ps-2" data-toggle="collapse"
                                    href="#studentFormSection" role="button">Cancel</button>
                                <button type="submit" class="btn btn-success btn-sm pe-2 ">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="container-fluid">


                <div class="row">

                <div class="col-md-9">
                <div class="tab-content">
                    <!-- Contact Enquiries Tab -->
                    <div class="tab-pane fade show active" id="contact" role="tabpanel">

                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4>Contact Enquiries</h4>
                                <button class="btn btn-custom btn-sm ps-2" data-toggle="collapse"
                                    href="#studentFormSection" role="button" aria-expanded="false"
                                    aria-controls="studentFormSection">Add Contact</button>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Subject</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->fullname }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>
                                                <!-- <a href="{{ route('admin.enquiry.edit', [$contact->id, 'contact']) }}"
                                                    class="btn btn-warning btn-sm">Edit</a> -->
                                                    <button class="btn btn-warning btn-sm ps-2" data-toggle="collapse"
                                    href="#studentFormSection" role="button" aria-expanded="false"
                                    aria-controls="studentFormSection">Edit</button>
                                                <form
                                                    action="{{ route('admin.enquiry.destroy', [$contact->id, 'contact']) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- Type of Contacts Tab -->
                    <div class="tab-pane fade" id="typecontacts" role="tabpanel">

                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4>Type of Contacts</h4>
                                <button class="btn btn-custom btn-sm ps-2" data-toggle="collapse"
                                    href="#studentFormSection" role="button" aria-expanded="false"
                                    aria-controls="studentFormSection">Add Enquiry Type</button>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Type of Contacts</th>
                                            <th>Mobile No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($typeContacts as $typeContact)
                                        <tr>
                                            <td>{{ $typeContact->name }}</td>
                                            <td>{{ $typeContact->email }}</td>
                                            <td>{{ $typeContact->typeofenquiry }}</td>
                                            <td>{{ $typeContact->mobile }}</td>
                                            <td>
                                            <button class="btn btn-warning btn-sm ps-2" data-toggle="collapse"
                                    href="#studentFormSection" role="button" aria-expanded="false"
                                    aria-controls="studentFormSection">Edit</button>
                                                <!-- <a data-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="studentFormSection"
                                                    href="{{ route('admin.enquiry.edit', [$typeContact->id, 'enquiry']) }}"
                                                    class="btn btn-warning btn-sm">Edit</a> -->

                                                <form
                                                    action="{{ route('admin.enquiry.destroy', [$typeContact->id, 'enquiry']) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- General Contacts Tab -->
                    <div class="tab-pane fade" id="generalcontacts" role="tabpanel">

                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4>General Enquiries</h4>
                                <button class="btn btn-custom btn-sm ps-2" data-toggle="collapse"
                                    href="#studentFormSection" role="button" aria-expanded="false"
                                    aria-controls="studentFormSection">Add General Enquiry</button>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Visa Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($generalContacts as $generalContact)
                                        <tr>
                                            <td>{{ $generalContact->name }}</td>
                                            <td>{{ $generalContact->email }}</td>
                                            <td>{{ $generalContact->mobile }}</td>
                                            <td>{{ $generalContact->visa_type }}</td>
                                            <td>
                                            <button class="btn btn-warning btn-sm ps-2" data-toggle="collapse"
                                    href="#studentFormSection" role="button" aria-expanded="false"
                                    aria-controls="studentFormSection">Edit</button>
                                                <!-- <a data-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="studentFormSection"
                                                    href="{{ route('admin.enquiry.edit', [$generalContact->id, 'inquiry']) }}"
                                                    class="btn btn-warning btn-sm">Edit</a> -->
                                                <form
                                                    action="{{ route('admin.enquiry.destroy', [$generalContact->id, 'inquiry']) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Contacts Types</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#contact" data-toggle="tab" role="tab">Contact
                                    Enquiries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#typecontacts" data-toggle="tab" role="tab">Type of
                                    Contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#generalcontacts" data-toggle="tab" role="tab">General
                                    Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                </div>
            </div>

          

            <!-- Contacts Tables on the Right -->
           
        



        @endsection