<!DOCTYPE html>
<html>
<head>
	<title>Show attendance</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<h1>{{ $employee->name }}</h1>
@foreach($employeeAttendanceMonth as $attendanceMonth)
<label>Number of attendance in {{ $attendanceMonth->month }}-{{ $attendanceMonth->year }} is {{ $attendanceMonth->hours }} hours</label>
<a href="{{ url('admin/employee/details/'.$employee->id.'/month/'.$attendanceMonth->month.'/year/'.$attendanceMonth->year) }}" style="text-align: right;float: right;" class="btn btn-info">View Details</a><br><br>
@endforeach
</body>
</html>