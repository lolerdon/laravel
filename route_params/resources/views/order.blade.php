<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
<h1>Order Info</h1>
<p>Order Number: {{ $order['offertenummer'] }}</p>
<p>Customer: {{ $order['klant'] }}</p>
<p>&euro;: {{ $order['bedrag'] }}</p>
</body>
</html>
