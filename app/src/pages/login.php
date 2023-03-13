<?php
if (Auth::isAuth()){
    header('Location: ' . '/');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nicname']) && strlen($_POST['nicname'])){
    Auth::login($_POST['nicname']);
    header('Location: ' . '/');
    exit();
}
?>


<?php require_once('_header_login.php') ?>

    <div class="input-nicname ui-widget-content">

        <form method="post" action="/login" id="login-form">
            <div class="error"></div>
            <label>Choose You NicName: </label>
            <div>
                <input type="text" name="nicname"/>
                <button>Choose</button>
            </div>
        </form>
        <div class="header ui-widget-header">
            <h1>Free chat without registration</h1>
        </div>
    </div>

    <script>
        if (!navigator.cookieEnabled) {
            alert( 'Включите cookie для комфортной работы с этим сайтом' );
        }
    </script>

<?php require_once('_footer.php')?>