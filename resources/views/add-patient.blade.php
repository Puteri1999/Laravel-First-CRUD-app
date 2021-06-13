<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
</head>
<body>
@if(Session::has('patient_add'))
<span>{{Session::get('patient_add')}} </span>
@endif
    <form method="post" action="{{route('save.patient')}}">
        @csrf
        Name : <br><input type="text" name="name" value=""><br>
        Gender : <br><select id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option> 
                     </select>

        <input type="submit" value="Submit">
    </form?>
</body>
</html>