<!DOCTYPE html>
<html>
<head>
<title>Hello/Index</title>        
<style>
h1{font-size:100pt; text-align: right; color:#f6f6f6;}
body{font-size:16pt; color:#999;}
</style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>{{$msg}}</p>
    <form method="POST" action="/hello">
        {{csrf_field()}}
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>

</html>