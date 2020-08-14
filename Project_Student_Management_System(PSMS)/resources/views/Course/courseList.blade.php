<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student Course List </h1>
<table  border="1px">
    <tr>
        <td>Id</td>
        <td>Course Name</td>
        <td>Course Registration No</td>
        <td>Course Fee</td>
        <td>Course Description</td>
        <td>View Student Register List </td>
    </tr>
    @foreach($courses as $crs)
        <tr>
            <td>{{$crs->id}}</td>
            <td>{{$crs->courseName}}</td>
            <td>{{$crs->courseRegistrationNo}}</td>
            <td>{{$crs->courseFee}}</td>
            <td>{{$crs->courseDescription}}</td>
            <td><a href="{{url('/Course-taken-student-list/'.$crs->id)}}">View Student List</a></td>
        </tr>

    @endforeach
</table>
</body>
</html>
