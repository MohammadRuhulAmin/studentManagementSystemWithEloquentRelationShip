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
    <h1>Student Profile Information </h1>
    <table>
        <tr>
            <td>
                Id
            </td>
            <td>{{$profile->id}}</td>
        </tr>
        <tr>
            <td>Father Name</td>
            <td>{{$profile->fatherName}}</td>
        </tr>
        <tr>
            <td>Mother Name</td>
            <td>{{$profile->motherName}}</td>
        </tr>
        <tr>
            <td>parent Contact Number</td>
            <td>{{$profile->parentsContactNumber}}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{$profile->address}}</td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>{{$profile->dateOfBirth}}</td>
        </tr>
    </table>
</body>
</html>
