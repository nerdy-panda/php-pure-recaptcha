<?php session_start(); ?>
<?php
    $hasFailCaptchaMessage = isset($_SESSION['messages']['fail']['captcha']);
    $hasOkCaptchaMessage = isset($_SESSION['messages']['ok']['captcha']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/Application.css" type="text/css">
    <script src="js/Program.js" type="module" async></script>
</head>
<body>
    <?php if($hasOkCaptchaMessage) : ?>
        <p class="ok_message">
            <?php echo $_SESSION['messages']['ok']['captcha'] ; ?>
        </p>
    <?php endif ?>
    <section id="captcha-container">
        <img src="captcha.php" alt="" id="captcha-image">
        <section>
            <svg id="captcha-reloader" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="42px" height="42px"><linearGradient id="mYc2VTE5eD8N6QIZhX1dba" x1="31.999" x2="31.999" y1="7.249" y2="57.273" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"/><stop offset="1" stop-color="#c822ff"/></linearGradient><path fill="url(#mYc2VTE5eD8N6QIZhX1dba)" d="M57.645,31.864C57.289,31.323,56.706,31,56.087,31h-2.111C53.449,18,42.898,7.999,30,7.999 C16.766,7.999,5.999,18.766,5.999,32S16.766,56.001,30,56.001c6.267,0,12.196-2.4,16.696-6.759l-1.391-1.438 C41.18,51.8,35.744,54.001,30,54.001C17.869,54.001,7.999,44.131,7.999,32S17.869,9.999,30,9.999C41.796,9.999,51.45,20,51.975,31 h-2.061c-0.619,0-1.202,0.323-1.559,0.864c-0.397,0.605-0.466,1.397-0.177,2.069l2.268,5.283c0.472,1.1,1.45,1.783,2.554,1.783 c1.104,0,2.082-0.684,2.554-1.783l2.268-5.283C58.111,33.262,58.043,32.469,57.645,31.864z M55.984,33.145l-2.268,5.283 c-0.313,0.727-1.119,0.727-1.432,0l-2.268-5.283C49.993,33.089,50,33.035,50.01,33h5.981C56.002,33.035,56.008,33.089,55.984,33.145 z"/><linearGradient id="mYc2VTE5eD8N6QIZhX1dbb" x1="30" x2="30" y1="7.249" y2="57.273" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"/><stop offset="1" stop-color="#c822ff"/></linearGradient><path fill="url(#mYc2VTE5eD8N6QIZhX1dbb)" d="M29.864,24.644c0.355,0.234,0.776,0.354,1.199,0.354c0.296,0,0.593-0.058,0.869-0.177 l5.284-2.268C38.317,22.082,39,21.103,39,20s-0.684-2.082-1.783-2.554l-5.284-2.268c-0.671-0.288-1.464-0.221-2.068,0.177 C29.323,15.711,29,16.293,29,16.913v2.138C22,19.564,17,25.169,17,32c0,7.168,5.832,13,13,13s13-6,13-13h-2c0,6-4.935,11-11,11 s-11-4.935-11-11c0-5.728,4-10.442,10-10.95v2.036C29,23.706,29.323,24.288,29.864,24.644z M31,17.009 c0-0.012,0.087-0.017,0.144,0.007l5.284,2.268C36.791,19.44,37,19.701,37,20c0,0.299-0.209,0.56-0.572,0.716l-5.284,2.268 C31.087,23.007,31,23.002,31,22.99V17.009z"/><linearGradient id="mYc2VTE5eD8N6QIZhX1dbc" x1="30" x2="30" y1="27" y2="37.762" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#mYc2VTE5eD8N6QIZhX1dbc)" d="M30 28A4 4 0 1 0 30 36A4 4 0 1 0 30 28Z"/></svg>
        </section>
    </section>
    <form action="form-processor.php" method="post">
        <?php if($hasFailCaptchaMessage) : ?>
            <p class="fail_message">
                <?php echo $_SESSION['messages']['fail']['captcha'] ; ?>
            </p>
        <?php endif ?>
        <input type="text" name="captcha">
        <input type="submit">
    </form>
</body>
</html>
<?php unset($_SESSION['messages']); ?>