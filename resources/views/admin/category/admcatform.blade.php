<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h3>Update Category</h3>
    <form action="{{route('categories.update',$categories->id)}}" method="post">
    @method('PUT')
    @csrf
    Name : <input type="text" name="name" id="" value="{{old("name")}}">
    <input type="submit" value="Submit" name="submit">
    </form>
    @if (session('message'))
            <strong style="font-size: 15px">{{session("message")}}</strong><br>
    @endif
</body>
</html>
