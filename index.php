<?php require("helper.php");?>

<!DOCTYPE html>
<html>
<head>
    <title>Tip Calculator</title>
    <meta charset="utf-8"/>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="TipCalculator.css"/>
</head>
<body>
    <div class="container wrapper">
        <div class="text-center">
            <h1>Tip Calculator</h1>
        </div>
        <form method="GET">
            <div class="form-div">
                <label>Total Price</label>
                <input type="text" name="totalPrice"  id="totalPrice"/>
                <p>Required </p>
            </div>
            <div class="form-div">
                <label>Number of People</label>
                <input type="text" name="people" id="people"/>
                <p>Required </p>
            </div>
            <div class="form-div">
                <label>How was the Service</label>
                 <select name='service' autofocus>
                    <option value='15'>Excellent (15%)</option>
                    <option value='10'>Good (10%)</option>
                    <option value='5'>Poor (5%)</option>
                </select>
            </div>
            <div class="form-div">
                <label class="labelBox">Round Up?</label>
                <input class="ckBox" type="checkbox" name="roundBill" checked/>
            </div>
            <input class="submit" type="submit" value="Calculate"/>
        </form> 
        <?php if (!empty($errors)) : ?>
            <div class='alert alert-danger'>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?=$error?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <?php if ($form->isSubmitted() and empty($errors)) : ?>
            <div class='alert alert-success'>
                $<?= $split ?>
            </div>
        <?php endif ?>
    </div>
</body>
</html>