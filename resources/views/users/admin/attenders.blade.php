<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  
  <title>Attenders - NANENANE EXPO 2024</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('77assets/img/logos/88EXPO.png') }}" rel="icon">
  <link href="{{ asset('77assets/img/logos/88EXPO.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

  <!-- Datatables -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard" class="logo d-flex align-items-center">
        <img src="{{ asset('77assets/img/logos/88EXPO.png') }}" alt="">
        <span class="d-none d-lg-block">NaneNane Expo</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <!-- <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form> -->
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a> -->
          <!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 3 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>New attendees registered</h4>
                <p>22 new attendees registered in last 2 hours</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>New attendees registered</h4>
                <p>22 new attendees registered in last 2 hours</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>New attendees registered</h4>
                <p>22 new attendees registered in last 2 hours</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('admin/assets/img/person.jpg') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name ?? 'None'}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->name ?? 'None'}}</h6>
              <span>Administrator</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>
            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                <a class="dropdown-item d-flex align-items-center" href="#">
                    @csrf
                    <i class="bi bi-box-arrow-right"></i>
                    <button class="btn btn-light" type="submit">Sign Out</button>
                    </a>
                </form>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Upcoming Event</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="createvent">
              <i class="bi bi-circle"></i><span>Create Event</span>
            </a>
          </li>
          <li>
            <a href="events">
              <i class="bi bi-circle"></i><span>Event List</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Forms Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="getschedule">
          <i class="bi bi-calendar-check"></i>
          <span>Schedule List</span>
        </a>
      </li> -->
      <!-- End Profile Page Nav -->
      
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="getexhibitors">
          <i class="bi bi-people"></i>
          <span>Exhibitor List</span>
        </a>
      </li> -->
      <!-- End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="getspeakers">
          <i class="bi bi-person-badge"></i>
          <span>Speaker List</span>
        </a>
      </li> -->
      <!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="getattendees">
          <i class="bi bi-people"></i>
          <span>Attendant List</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="getsponsors">
          <i class="bi bi-people"></i>
          <span>Sponsor List</span>
        </a>
      </li> -->
      <!-- End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="getvenues">
          <i class="bi bi-card-list"></i>
          <span>Venue</span>
        </a>
      </li> -->
      <!-- End Register Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Attenders</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Attenders</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-12 col-md-12 col-sm-12 card info-card customers-card recent-sales overflow-auto">
                @if (isset($attendees))
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Organization</th>
                            <th>County</th>
                            <th>Email(s)</th>
                            <th>Mobile</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($attendees as $attendee)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{ $attendee->fname}} {{$attendee->mname}} {{$attendee->lname}}</td>
                            <td>{{$attendee->organization}} - {{$attendee->organizationType}}</td>
                            <td>{{$attendee->country}}</td>
                            <td>{{$attendee->bemail}} / {{$attendee->email}}</td>
                            <td>{{$attendee->phone}}</td>
                            <td>{{$attendee->address}}</td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Full Name</th>
                            <th>Organization</th>
                            <th>County</th>
                            <th>Email(s)</th>
                            <th>Mobile</th>
                            <th>Address</th>
                        </tr>
                    </tfoot>
                </table>
                @endif
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <!-- <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Total Speakers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-badge-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>64</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div> -->
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <!-- <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Total Exhibitors</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>44</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div> -->
            <!-- End Customers Card -->

            <!-- Recent Sales -->
            <!-- <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Event Attendees</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Organization</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">ICT Commission</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">TCRA</a></td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#3</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">NSSF</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#4</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">TNBC</a></td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#5</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">TTCL</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div> -->
            <!-- End Recent Sales -->

            <!-- Top Selling -->
            <!-- <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Event Speakers</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Occupation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="{{ asset('77assets/img/team/88/bashe.jpg') }}" alt=""></a></th>
                        <td><span class="text-primary fw-bold">HON. HUSSEIN MOHAMED BASHE (MP)</span></td>
                        <td>MINISTER - MINISTRY OF AGRICULTURE</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="{{ asset('77assets/img/team/88/waziri.jpg') }}" alt=""></a></th>
                        <td><span class="text-primary fw-bold">HON. ABDALLAH HAMIS ULEGA (MP)</span></td>
                        <td>MINISTER - MINISTRY OF LIVESTOCK AND FISHERIES</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="{{ asset('77assets/img/team/88/gerlad.jpeg') }}" alt=""></a></th>
                        <td><span class="text-primary fw-bold">GERALD GEOFREY MWELI</span></td>
                        <td>PERMANENT SECRETARY - MINISTRY OF AGRICULTURE</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="{{ asset('77assets/img/team/88/katibuMkuu.jpeg') }}" alt=""></a></th>
                        <td><span class="text-primary fw-bold">PROF. RIZIKI S SHEMDOE</span></td>
                        <td>PERMANENT SECRETARY - MINISTRY OF LIVESTOCK AND FISHERIES</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="{{ asset('77assets/img/team/88/zuberi.jpeg') }}" alt=""></a></th>
                        <td><span class="text-primary fw-bold">MHE. JUMA ZUBERI HOMERA</span></td>
                        <td>REGIONAL COMMISSIONER, MBEYA REGION</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div> -->
            <!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- <div class="col-lg-4">
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Event <span>Schedule</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                  Registration / Check In - 7:30 AM
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                  Exhibitor Move In & Set Up - 8:30 to 10:30 AM
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                  Breakfast - 8:00 to 9:00 AM
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                  Opening General Session - 9:15 to 10:15 AM
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                  Education - 10:30 to 11:30 AM
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                  Lunch, Exhibits, and Demonstrations - 11:30 AM to 2:30 PM
                  </div>
                </div>

              </div>

            </div>
          </div>

        </div> -->
        <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Ministry of Agriculture</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Powered by <a href="https://smartclic.co.tz" target="_blank">Smartclic</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- datatables -->

  <!-- Template Main JS File -->
  <script src="{{ asset('admin/assets/js/main.js') }}"></script>

</body>

</html>