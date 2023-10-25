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
   <style>
    .text-success{
        font-size: xx-large;
        font-weight: 700;
    }
    </style>

    <div class="container col-md-3 col-md-offset-4 well">
        <h2>Multiply of two numbers</h2>
        <form action ="<?= base_url("calculate/multiplication"); ?>" method="post">
        <div class="form-group">
            <label for="number1">Enter Number:</label>
            <input type="number" class="form-control" id="number1" placeholder="Enter Number" name="number1">
    </div>
        <div class="form-group">
            <label for="number2">Enter Number:</label>
            <input type="number" class="form-control" id="number2" placeholder="Enter Number" name="number2">
        </div>
        <div class="form-group">
            <label for="answer">Answer</label>
            <p class="text-success"><?= $answer; ?></p>
        </div>
        <button type="submit" class="btn btn-default" name="multiply">Submit</button>
    </form>
    </div>
</body>
</html>