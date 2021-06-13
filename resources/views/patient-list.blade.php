<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%
        }
        td,th{
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
@if(Session::has('patient_delete'))
<span>{{Session::get('patient_delete')}} </span>
@endif
<a style="float:right" href = "{{route('patient.add')}}"> Add Patient </a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>
    @foreach($patients as $patient)
    <tr>
        <td>{{$patient->id}}</td>
        <td>{{$patient->name}}</td>
        <td>{{$patient->gender}}</td>
        <td>
            <a href="/patient/update/:{{$patient->id}}">Edit</a>
            <a href="/patient/delete/:{{$patient->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>