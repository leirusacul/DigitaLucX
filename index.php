<?php
$date = date("d/m/Y H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>DigitaLucX</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#000000;
    color:#FFFFFF;
    min-height:100vh;
    overflow:hidden;
    position:relative;
}

/* GRID */

.grid{
    position:absolute;
    width:100%;
    height:100%;
    background:
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);

    background-size:40px 40px;
    z-index:0;
}

/* GLOW */

.glow{
    position:absolute;
    width:500px;
    height:500px;
    background:radial-gradient(circle, rgba(44,147,100,0.25), transparent 70%);
    top:-150px;
    right:-100px;
    filter:blur(60px);
}

.glow2{
    position:absolute;
    width:450px;
    height:450px;
    background:radial-gradient(circle, rgba(44,147,100,0.18), transparent 70%);
    bottom:-150px;
    left:-100px;
    filter:blur(60px);
}

/* MAIN */

.container{
    position:relative;
    z-index:2;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.card{
    width:100%;
    max-width:1200px;

    background:rgba(10,10,10,0.82);

    border:1px solid rgba(255,255,255,0.06);

    backdrop-filter:blur(10px);

    border-radius:30px;

    padding:60px;

    display:flex;
    align-items:center;
    justify-content:space-between;

    gap:60px;

    box-shadow:
        0 0 40px rgba(0,0,0,0.6),
        0 0 80px rgba(44,147,100,0.08);
}

/* LEFT */

.left{
    flex:1;
}

.logo{
    width:180px;
    margin-bottom:30px;
}

h1{
    font-size:68px;
    line-height:1.1;
    margin-bottom:20px;
}

.green{
    color:#2C9364;
}

.description{
    color:#DDDDD4;
    font-size:20px;
    line-height:1.8;
    margin-bottom:40px;
    max-width:650px;
}

.buttons{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.btn{
    text-decoration:none;
    padding:15px 28px;
    border-radius:14px;
    font-weight:bold;
    transition:0.3s;
}

.btn-primary{
    background:#2C9364;
    color:#FFFFFF;
    box-shadow:0 0 20px rgba(44,147,100,0.35);
}

.btn-primary:hover{
    transform:translateY(-3px);
    background:#36ad76;
}

.btn-secondary{
    border:1px solid rgba(255,255,255,0.12);
    color:#FFFFFF;
    background:rgba(255,255,255,0.03);
}

.btn-secondary:hover{
    background:rgba(255,255,255,0.06);
}

/* RIGHT */

.right{
    flex:1;
    display:flex;
    justify-content:center;
}

/* TERMINAL */

.terminal{
    width:100%;
    max-width:480px;
    background:#050505;
    border-radius:22px;
    overflow:hidden;
    border:1px solid rgba(255,255,255,0.06);

    box-shadow:
        0 0 35px rgba(0,0,0,0.7),
        0 0 50px rgba(44,147,100,0.08);
}

.terminal-top{
    background:#111111;
    padding:14px 18px;
    display:flex;
    align-items:center;
    gap:10px;
}

.dot{
    width:12px;
    height:12px;
    border-radius:50%;
}

.red{
    background:#ff5f56;
}

.yellow{
    background:#ffbd2e;
}

.green-dot{
    background:#27c93f;
}

.terminal-body{
    padding:35px;
    font-family:monospace;
    font-size:16px;
    line-height:2.2;
    color:#DDDDD4;
}

.command{
    color:#2C9364;
}

.status{
    color:#2C9364;
    font-weight:bold;
}

/* TYPING CURSOR */

.cursor{
    display:inline-block;
    width:10px;
    animation:blink 1s infinite;
}

@keyframes blink{
    0%{opacity:1;}
    50%{opacity:0;}
    100%{opacity:1;}
}

/* FOOTER */

.footer{
    margin-top:35px;
    color:#777777;
    font-size:14px;
}

/* RESPONSIVE */

@media(max-width:950px){

    .card{
        flex-direction:column;
        text-align:center;
    }

    .buttons{
        justify-content:center;
    }

    h1{
        font-size:48px;
    }

}

</style>
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
            <img src="public/assets/img/logo.png" class="logo" alt="DigitaLucX">

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
                    <?php echo $date; ?><br><br>

                    <span class="command">$ DLX Systems</span><br>
                    System initialized<span class="cursor">_</span>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
