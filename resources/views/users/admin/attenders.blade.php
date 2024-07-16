<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Attenders - NANENANE EXPO 2024</title>
  <link rel='stylesheet' href='https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.css'>
  <link rel="stylesheet" href="{{ asset('admin/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<a class="btn btn-success" style="float:left;margin-right:20px;" href="dashboard">GO BACK</a>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
    <tr>
      <th>#</th>
      <th>Full Name</th>
      <th>Organization</th>
      <th>County</th>
      <th>Email(s)</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Booth</th>
      <th>Products</th>
    </tr>
	</thead>
	<tbody>
    <?php $no = 1; ?>
  @foreach ($attendees as $attendee)
  <?php 
    if($attendee->organizationType == 'GI'){
      $organizationType = 'Government Institution';
    }elseif($attendee->organizationType == 'RE'){
      $organizationType = 'Research';
    }elseif($attendee->organizationType == 'NG'){
      $organizationType = 'NGO’s';
    }elseif($attendee->organizationType == 'PS'){
      $organizationType = 'Private Sector';
    }elseif($attendee->organizationType == 'FI'){
      $organizationType = 'Financial Institution';
    }elseif($attendee->organizationType == 'SP'){
      $organizationType = 'Service Provider';
    }
  ?>
  <tr>
      <td>{{$no}}</td>
      <td>{{$attendee->fname}} {{$attendee->mname}} {{$attendee->lname}}</td>
      <td>{{$attendee->organization}} - {{$organizationType}}</td>
      <td>{{$attendee->country}}</td>
      <td>{{$attendee->bemail}} / {{$attendee->email}}</td>
      <td>{{$attendee->phone}}</td>
      <td>{{$attendee->address}}</td>
      <td>{{$attendee->booth}}</td>
      <td>{{$attendee->products}}</td>
  </tr>
  <?php $no++; ?>
  @endforeach
	</tbody>
</table>
<!-- partial -->
<script src='https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js'></script>
<script  src="{{ asset('admin/script.js') }}"></script>
</body>
</html>