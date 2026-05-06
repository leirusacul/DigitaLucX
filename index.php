<?php
$date = date("d/m/Y H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalucX</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#050816;
            color:white;
            min-height:100vh;
            overflow:hidden;
            position:relative;
        }

        /* Fondo tecnológico */

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

        .glow{
            position:absolute;
            width:600px;
            height:600px;
            background:radial-gradient(circle, rgba(138,43,226,0.25), transparent 70%);
            top:-150px;
            right:-100px;
            filter:blur(50px);
            z-index:0;
        }

        .glow2{
            position:absolute;
            width:500px;
            height:500px;
            background:radial-gradient(circle, rgba(0,170,255,0.18), transparent 70%);
            bottom:-180px;
            left:-100px;
            filter:blur(50px);
            z-index:0;
        }

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
            max-width:1100px;
            background:rgba(10,15,35,0.78);
            border:1px solid rgba(255,255,255,0.08);
            backdrop-filter:blur(12px);
            border-radius:30px;
            padding:60px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:60px;
            box-shadow:0 0 60px rgba(0,0,0,0.45);
        }

        .left{
            flex:1;
        }

        .logo{
            width:180px;
            margin-bottom:25px;
        }

        h1{
            font-size:64px;
            line-height:1.1;
            margin-bottom:20px;
        }

        .gradient{
            background:linear-gradient(90deg,#8A2BE2,#00bfff);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        .description{
            font-size:20px;
            color:#cbd5e1;
            line-height:1.7;
            margin-bottom:35px;
            max-width:650px;
        }

        .buttons{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }

        .btn{
            padding:15px 28px;
            border-radius:14px;
            text-decoration:none;
            font-weight:bold;
            transition:0.3s;
        }

        .btn-primary{
            background:linear-gradient(90deg,#8A2BE2,#6d28d9);
            color:white;
            box-shadow:0 0 20px rgba(138,43,226,0.4);
        }

        .btn-primary:hover{
            transform:translateY(-3px);
        }

        .btn-secondary{
            border:1px solid rgba(255,255,255,0.15);
            color:white;
            background:rgba(255,255,255,0.04);
        }

        .btn-secondary:hover{
            background:rgba(255,255,255,0.08);
        }

        .right{
            flex:1;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .terminal{
            width:100%;
            max-width:480px;
            background:#020617;
            border-radius:20px;
            overflow:hidden;
            border:1px solid rgba(255,255,255,0.08);
            box-shadow:0 0 35px rgba(0,0,0,0.5);
        }

        .terminal-top{
            background:#0f172a;
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

        .red{ background:#ff5f56; }
        .yellow{ background:#ffbd2e; }
        .green{ background:#27c93f; }

        .terminal-body{
            padding:30px;
            font-family:monospace;
            color:#00ff95;
            line-height:2;
            font-size:15px;
        }

        .command{
            color:#38bdf8;
        }

        .status{
            color:#22c55e;
        }

        .footer{
            margin-top:35px;
            color:#64748b;
            font-size:14px;
        }

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

            <div class="left">

                <!-- LOGO -->
                <img src="assets/img/logo.png" class="logo" alt="DigitalucX Logo">

                <h1>
                    Tecnología,<br>
                    <span class="gradient">Desarrollo & Sistemas</span>
                </h1>

                <div class="description">
                    Desarrollo web moderno, automatizaciones,
                    sistemas personalizados y soluciones digitales
                    enfocadas en rendimiento, diseño y escalabilidad.
                </div>

                <div class="buttons">
                    <a href="#" class="btn btn-primary">
                        Ver Proyectos
                    </a>

                    <a href="#" class="btn btn-secondary">
                        Contacto
                    </a>
                </div>

                <div class="footer">
                    © <?php echo date("Y"); ?> DigitalucX — GitHub Deploy Active
                </div>

            </div>

            <div class="right">

                <div class="terminal">

                    <div class="terminal-top">
                        <div class="dot red"></div>
                        <div class="dot yellow"></div>
                        <div class="dot green"></div>
                    </div>

                    <div class="terminal-body">

<span class="command">$ git push origin main</span><br>
<span class="status">✓ Deploy successful</span><br><br>

<span class="command">$ php -v</span><br>
PHP <?php echo phpversion(); ?><br><br>

<span class="command">$ server status</span><br>
<span class="status">ONLINE</span><br><br>

<span class="command">$ last update</span><br>
<?php echo $date; ?><br><br>

<span class="command">$ DigitalucX</span><br>
System initialized...

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
