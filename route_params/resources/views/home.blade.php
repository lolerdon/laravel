<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<h1>Select an Offerte</h1>

<form method="get" id="orderForm">
    <span>Offerte ID: </span>
    <select name="order" id="order">
        @foreach($offertes as $offerte)
            <option value="{{ $offerte['offertenummer'] }}">
                {{ $offerte['offertenummer'] }}
            </option>
        @endforeach
    </select>
    <button type="submit">Verstuur</button>
</form>

<script>
    document.getElementById('orderForm').addEventListener('submit', function(e) {
        e.preventDefault();
        let selected = document.getElementById('order').value;
        window.location.href = '/order/' + selected;
    });
</script>
</body>
</html>
