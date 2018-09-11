<head>
    <title>Inicio | SINDOJUS-AC</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" />
    <meta http-equiv="refresh" content=5;url="<?= base_url('main'); ?>">
    
    <style>
        .loadpage{
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
        }
        .preloadlogo{
            width: 300px;
            height: 70px;
            margin: 150px auto 20px auto;
            font-family: cambria;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
        }
        .preloadframe{
            width: 70px;
            height: 70px;
            margin: auto;
            position: relative;
        }
        .loader1, .loader2{
            position: absolute;
            border: 5px solid transparent;
            border-radius: 50%;
        }
        .loader1{
            width: 70px;
            height: 70px;
            border-top: 5px solid green;
            border-bottom: 5px solid green;
            animation: clockwisespin 2s linear 3;
        }
        .loader2{
            width: 60px;
            height: 60px;
            border-left: 5px solid darkgreen;
            border-right: 5px solid darkgreen;
            top: 5px;
            left: 5px;
            animation: anclockwisespin 2s linear 3;
        }
        @keyframes clockwisespin{
            from{transform: rotate(0deg);}
            to{transform: rotate(360deg);}
        }
        @keyframes anclockwisespin{
            from{transform: rotate(0deg);}
            to{transform: rotate(-360deg);}
        }
    </style>
</head>
<div class="loadpage">
    <div class="preloadlogo">
        SIND<span style="color:#8B0000;">OJ</span>US-AC
    </div>
    <div class="preloadframe">
        <div class="loader1" id="loader1"></div>
        <div class="loader2" id="loader2"></div>
    </div>
</div>
