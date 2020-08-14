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
    <h1>Registered for Student List</h1>
    <table border="1px">
        <tr>
            <td>Student Name</td>
            <td>Contact Number</td>
            <td>Email</td>
            <td>Registration No</td>
            <td>About Student </td>
        </tr>
        @foreach($studentsList as $sl)
            <tr>
                <td>{{$sl->studentName}}</td>
                <td>{{$sl->studentContact}}</td>
                <td>{{$sl->studentEmail}}</td>
                <td>{{$sl->studentRegistrationNo}}</td>
                <td>{{$sl->aboutStudent}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
