<?php
$date = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>DigitaLucX</title>

<link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
<link rel="icon" type="image/png" href="assets/img/logo.png">

</head>

<body>

<div class="grid"></div>
<div class="glow"></div>
<div class="glow2"></div>

<div class="container">

    <div class="card">

        <!-- LEFT -->

        <div class="left">

            <!-- LOGO -->
           <div class="logo-box">
                <img src="assets/img/logo.png" class="logo" alt="DigitaLucX">
           </div>

            <h1>
                Digita<span class="green">LucX</span>
            </h1>

            <div class="description">
                Soluciones digitales, desarrollo web,
                automatización de procesos y sistemas modernos
                enfocados en tecnología, rendimiento y escalabilidad.
            </div>

            <div class="buttons">

                <a href="#" class="btn btn-primary">
                    Ver proyectos
                </a>

                <a href="#" class="btn btn-secondary">
                    Contacto
                </a>

            </div>

            <div class="footer">
                © <?php echo date("Y"); ?> DigitaLucX
            </div>

        </div>

        <!-- RIGHT -->

        <div class="right">

            <div class="terminal">

                <div class="terminal-top">

                    <div class="dot red"></div>
                    <div class="dot yellow"></div>
                    <div class="dot green-dot"></div>

                </div>

                <div class="terminal-body">

                    <span class="command">$ server status</span><br>
                    <span class="status">ONLINE</span><br><br>

                    <span class="command">$ last update</span><br>
                    <?php echo $date; ?> <div class="command"><span id="clock">
                    <?php echo date('h:i:s A'); ?></span></div><br><br>

                    <span class="command">$ DLX Systems</span><br>
                    System initialized<span class="cursor">_</span>

                </div>

            </div>

        </div>

    </div>

</div>
<script>
let clockOffset = 0;
let clockTimerID = null;

function initClock(serverTime) {
    const localTime = new Date().getTime();
    clockOffset = serverTime - localTime;
    updateClock();
}

function updateClock() {
    const now = new Date().getTime();
    const serverNow = new Date(now + clockOffset);

    let horas = serverNow.getHours();
    const minutos = serverNow.getMinutes().toString().padStart(2, '0');
    const segundos = serverNow.getSeconds().toString().padStart(2, '0');

    const ampm = horas < 12 ? 'AM' : 'PM';
    horas = horas % 12 || 12;

    document.getElementById("clock").innerHTML = `${horas}:${minutos}:${segundos} ${ampm}`;

    clockTimerID = setTimeout(updateClock, 1000);
}

function stopClock() {
    if (clockTimerID) {
        clearTimeout(clockTimerID);
    }
}
</script>

</body>
</html>
