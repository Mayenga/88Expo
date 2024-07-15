<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Attenders - NANENANE EXPO 2024</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'>

</script><script  src="{{ asset('admin/script.js') }}"></script>
</body>
</html>
