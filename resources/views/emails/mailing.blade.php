<!DOCTYPE html>

<html>

<head>

    <title>Richy</title>

</head>

<body>

    <div>
        <!-- <strong>{{ $details['title'] }}</strong> -->
        <p>Message</p>{{ $details['body'] }}
        <p>Email Address :{{ $details['from'] }} </p>
        <p>Phone Number: {{ $details['phone'] }} </p>
    </div>
    
</body>

</html>