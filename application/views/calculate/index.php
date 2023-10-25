<!DOCTYPE html>
<html lang="en">
<head>
    <title>CodeIgniter Calculator Program</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <div class="list-group">
            <a href="<?= base_url("calculate/add"); ?>" class="list-group-item">Addition</a>
            <a href="<?= base_url("calculate/subtraction"); ?>" class="list-group-item">Subtraction</a>
            <a href="<?= base_url("calculate/multiplication"); ?>" class="list-group-item">Multiplication</a>
            <a href="<?= base_url("calculate/division"); ?>" class="list-group-item">Division</a>
        </div>       
    </div>
</body>
</html>