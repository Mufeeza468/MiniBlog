<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../update-post" method='get'>
        @csrf

        <label> <b> Title </b></label>
        <input type="text" name="title" id="">
        <br>
        <br>
        <label> <b> Body </b> </label>
        <input type="text" name="body" id="">
        <br>
        <br>
        <input type=submit  value='SUBMIT'/>

    </form>
</body>
</html>
</x-app-layout>