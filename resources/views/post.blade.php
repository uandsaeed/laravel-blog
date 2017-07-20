<!DOCTYPE html>
<html>
<head>
    <style>
    body{
        background-color: #ECECEC;

    }
</style>
</head>
<body>
<form method="post" action="{{route('save')}}">
    <input type="text"  name="title" placeholder="Title"><br>
<textarea rows="6" cols="50"placeholder="Write Post" name="article">
</textarea >
    <input type="hidden"  name="user_id" value="1">
    <input id="image" name="image" type="file" class="file-loading" accept="image/*">
    <input type="submit" value="add a post"  name="submit">
    <input type="hidden"  name="_token" value="{{csrf_token()}}">
    </form>
<a href="{{URL::asset('home')}}">Home</a>
</body>
</html>