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
    <h1>Student List</h1>
    <table border="1px">
        <tr>
            <td>Id</td>
            <td>Student Name</td>
            <td>Student Contact</td>
            <td>Student Email</td>
            <td>Student Registration Form</td>
            <td>Course Taken List</td>
            <td>Profile</td>
        </tr>
        @foreach($student as $std)
            <tr>
                <td>{{$std->id}}</td>
                <td>{{$std->studentName}}</td>
                <td>{{$std->studentContact}}</td>
                <td>{{$std->studentEmail}}</td>
                <td>{{$std->studentRegistrationNo}}</td>
                <td>
                    <a href="{{url('/student-Course-List/'.$std->id)}}">View Courses </a>
                </td>
                <td>
                    <a href="{{url('/student-Profile-view/'.$std->id)}}">Student Details </a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
