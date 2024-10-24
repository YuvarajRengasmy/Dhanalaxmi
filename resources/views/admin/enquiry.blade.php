@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('admincontent')
<div class="container">
    <div class="row mt-4">
        <!-- Enquiry Types in a Single Card on the Left -->
        <div class="col-md-3">
            <div class="card mb-3 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Enquiry Types</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills flex-column" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#contact" data-toggle="tab" role="tab">Contact Enquiry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#typeEnquiry" data-toggle="tab" role="tab">Type of Enquiry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#generalEnquiry" data-toggle="tab" role="tab">General Enquiry</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Enquiry Tables on the Right -->
        <div class="col-md-9">
            <div class="tab-content">
                <!-- Contact Enquiry Tab -->
                <div class="tab-pane fade show active" id="contact" role="tabpanel">
                    <h4>Contact Enquiries</h4>
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
                            <tr>
                                <td>John Doe</td>
                                <td>john.doe@example.com</td>
                                <td>+1234567890</td>
                                <td>Need more information about courses.</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>jane.smith@example.com</td>
                                <td>+0987654321</td>
                                <td>Interested in study abroad programs.</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Type of Enquiry Tab -->
                <div class="tab-pane fade" id="typeEnquiry" role="tabpanel">
                    <h4>Type of Enquiry</h4>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type of Enquiry</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Michael Brown</td>
                                <td>michael.brown@example.com</td>
                                <td>Admission Inquiry</td>
                                <td>+1234567891</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Emily White</td>
                                <td>emily.white@example.com</td>
                                <td>Visa Inquiry</td>
                                <td>+0987654322</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- General Enquiry Tab -->
                <div class="tab-pane fade" id="generalEnquiry" role="tabpanel">
                    <h4>General Enquiries</h4>
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
                            <tr>
                                <td>Anna Lee</td>
                                <td>anna.lee@example.com</td>
                                <td>+1234567893</td>
                                <td>Student Visa</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Mark Wilson</td>
                                <td>mark.wilson@example.com</td>
                                <td>+0987654324</td>
                                <td>Visitor Visa</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">View</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 <style></style>

@endsection