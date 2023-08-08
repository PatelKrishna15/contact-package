<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} || Contact Us </title>
</head>
<body>
    <h1>Contact Us Any Time</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter your name...">
        <input type="email" name="email" id="email" placeholder="Enter your email...">
        <textarea name="message" id="30" cols="30" rows="10" placeholder="Enter your query..."></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
