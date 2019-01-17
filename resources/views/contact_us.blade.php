<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <a href="contact_us_listing">Go To Contacts Listing</a>
<a href="/">Go To Home</a>
    <form class=""action="contact_us"method="post">
    {{csrf_field()}}
    <input type="text"name="first_name"value=""placeholder="enter your first name" required><br>
    <input type="text"name="last_name"value=""placeholder="enter your last name" required><br>
    <input type="text"name="email"value=""placeholder="email address" required><br>
    <input type="text"name="phone"value=""placeholder="phone" required><br>
    <button type="submit">submit</button><br>

    </form>
    </div>    
</body>
</html>