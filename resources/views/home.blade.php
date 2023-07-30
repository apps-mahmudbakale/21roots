@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Users Card -->
                        <div class="col-xxl-3 col-md-3">

                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Site Visits</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-globe"></i>
                                        </div>
                                        <div class="ps-3">
                                            {{-- <h6>{{number_format($analytics['total_requests'])}}</h6> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Users Card -->
                        <!-- Users Card -->
                        <div class="col-xxl-3 col-md-3">

                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Users</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            {{-- <h6>{{number_format($users)}}</h6> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Users Card -->
                        <!-- Jobs Card -->
                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Jobs</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-briefcase"></i>
                                        </div>
                                        <div class="ps-3">
                                            {{-- <h6>{{number_format($jobs)}}</h6> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Jobs Card -->

                        <!-- Recruites Card -->
                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Recruites</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            {{-- <h6>{{number_format($recruites)}}</h6> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Recruites Card -->
                        <!-- Right side columns -->
                        <div class="col-lg-12">

                            <!-- Recent Activity -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Recent Activity</h5>

                                    <div class="activity">
                                        {{-- @foreach ($recents as $key => $recent)
                  <div class="activity-item d-flex">
                    <div class="activite-label">{{$recent->created_at->diffForHumans()}}</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      {{$recent->title}} {{$recent->firstname}} {{$recent->lastname}} Applied for <a href="{{route('admin.recruites.show', $recent->id)}}" class="fw-bold text-dark">{{ optional($recent->job)->getJobTitle() ?? ''}}</a> {{$recent->job_type}}
                    </div>
                  </div><!-- End activity item-->
                  @endforeach --}}
                                    </div>

                                </div>
                            </div><!-- End Recent Activity -->
                        </div><!-- End Right side columns -->
                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling">
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Recruites Statistics</h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Medevolt Division</th>
                                                <th scope="col">Numbers</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Medevolt Doctors</td>
                                                {{-- <td class="fw-bold"><span class="badge bg-success">{{number_format($doctors)}}</span></td> --}}
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Medevolt Nursing</td>
                                                {{-- <td class="fw-bold"><span class="badge bg-warning">{{number_format($nursing)}}</span></td> --}}
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Medevolt Allied Health</td>
                                                {{-- <td class="fw-bold"><span class="badge bg-primary">{{number_format($allied)}}</span></td> --}}
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->



            </div>
        </section>

    </main><!-- End #main -->
@endsection
