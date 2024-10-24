@extends('layouts.adminlayout')

@section('meta_title', 'Admin Dashboard | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')

@section('admincontent')
<div >
    <div class="container-fluid">
        <!-- Statistics Overview -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Applications Submitted</div>
                    <div class="card-body">
                        <h5 class="card-title">150</h5>
                        <p class="card-text">Total applications submitted this year.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Acceptance Rate</div>
                    <div class="card-body">
                        <h5 class="card-title">85%</h5>
                        <p class="card-text">Percentage of accepted applications.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Countries Available</div>
                    <div class="card-body">
                        <h5 class="card-title">10</h5>
                        <p class="card-text">Countries where you can apply.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Upcoming Events</div>
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                        <p class="card-text">Check out the upcoming events.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="card mb-4">
            <div class="card-header">Recent Activities</div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">Application submitted for University of XYZ (Oct 20, 2024)</li>
                    <li class="list-group-item">Visa application due (Oct 25, 2024)</li>
                    <li class="list-group-item">Test preparation webinar (Oct 30, 2024)</li>
                </ul>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Quick Links</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Visa Information</a></li>
                            <li class="list-group-item"><a href="#">Test Preparation Resources</a></li>
                            <li class="list-group-item"><a href="#">Scholarship Opportunities</a></li>
                            <li class="list-group-item"><a href="#">Accommodation Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Success Stories Carousel -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Success Stories</div>
                    <div id="successStoriesCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card-body">
                                    <p>"Thanks to the guidance provided, I secured my spot at XYZ University!"</p>
                                    <footer class="blockquote-footer">John Doe, <cite title="Source Title">Successful Student</cite></footer>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <p>"The application process was seamless, and I received excellent support!"</p>
                                    <footer class="blockquote-footer">Jane Smith, <cite title="Source Title">Successful Student</cite></footer>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-body">
                                    <p>"I couldn't have done it without the resources and support from this platform!"</p>
                                    <footer class="blockquote-footer">Emily Johnson, <cite title="Source Title">Successful Student</cite></footer>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#successStoriesCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#successStoriesCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection