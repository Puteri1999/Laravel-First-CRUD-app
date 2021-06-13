<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
</head>
<body>
@if(Session::has('patient_update'))
<span>{{Session::get('patient_update')}} </span>
@endif
    <form method="post" action="{{route('done.patient')}}">
        @csrf
        <input type="hidden" name= "id" value="{{$patient->id}}">
        Name : <br><input type="text" name="name" value="{{$patient->name}}"><br>
        Gender : <br><select id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option> 
                     </select>

        <input type="submit" value="Submit">
    </form?>
</body>
</html>