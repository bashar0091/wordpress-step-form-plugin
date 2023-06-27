<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title();?></title>

    <?php require_once('assets/css/style.php');?>
</head>
<body>

    <!-- step form header  -->
    <?php require_once('step-form-header.php');?>

    <!-- step 1 -->
    <?php require_once('steps/step1.php');?>

    <!-- step 2 -->
    <?php require_once('steps/step2.php');?>

    <!-- step 3 -->
    <?php require_once('steps/step3.php');?>

    <!-- step 4 -->
    <?php require_once('steps/step4.php');?>

    <!-- step 5 -->
    <?php require_once('steps/step5.php');?>

    <!-- step 6 -->
    <?php require_once('steps/step6.php');?>

    <!-- step 7 -->
    <?php require_once('steps/step7.php');?>

    <!-- step 8 -->
    <?php require_once('steps/step8.php');?>

    <script src="https://use.fontawesome.com/3d704960f1.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <?php require_once('assets/js/step-js.php');?>
</body>
</html>