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
            width: 500px;
            height: 70px;
            margin: 150px auto 30px auto;
            font-family: cambria;
            font-size: 60px;
            font-weight: bold;
            text-align: center;
        }
        div#preload{
            width: 70px;
            height: 70px;
            margin: auto;
            position: relative;
            background-color:#fff;
            z-index:9999999;
            display:flex;
            align-content:center;
            justify-content:center
        }
        .sk-folding-cube{
            top:50%;
            left:50%;
            margin-left:-40px;
            margin-top:-40px;
            width:80px;
            height:80px;
            position:absolute;
        }
        .sk-folding-cube .sk-cube{
            float:left;
            width:50%;
            height:50%;
            position:relative;
            -webkit-transform:scale(1.1);
            -ms-transform:scale(1.1);
            transform:scale(1.1);
        }
        .sk-folding-cube .sk-cube:before{
            content:'';
            position:absolute;
            top:-0.9;
            left:-0.9;
            width:97%;
            height:97%;
            -webkit-animation:sk-foldCubeAngle 2.4s infinite linear both;
            animation:sk-foldCubeAngle 2.4s infinite linear both;
            -webkit-transform-origin:100% 100%;
            -ms-transform-origin:100% 100%;
            transform-origin:100% 100%;
            background: url(assets/img/sk-cube1.png);
        }
        .sk-folding-cube .sk-cube2{
            -webkit-transform:scale(1.1) rotateZ(90deg);
            transform:scale(1.1) rotateZ(90deg)
        }
        .sk-folding-cube .sk-cube3{
            -webkit-transform:scale(1.1) rotateZ(180deg);
            transform:scale(1.1) rotateZ(180deg)
        }
        .sk-folding-cube .sk-cube4{
            -webkit-transform:scale(1.1) rotateZ(270deg);
            transform:scale(1.1) rotateZ(270deg)
        }
        .sk-folding-cube .sk-cube2:before{
            background: url(assets/img/sk-cube2.png);
            -webkit-animation-delay:.3s;
            animation-delay:.3s
        }
        .sk-folding-cube .sk-cube3:before{
            background: url(assets/img/sk-cube3.png);
            -webkit-animation-delay:.6s;
            animation-delay:.6s
        }
        .sk-folding-cube .sk-cube4:before{
            background: url(assets/img/sk-cube4.png);
            -webkit-animation-delay:.9s;
            animation-delay:.9s
        }
        @-webkit-keyframes sk-foldCubeAngle{
            0%,10%{
                -webkit-transform:perspective(140px) rotateX(-180deg);
                transform:perspective(140px) rotateX(-180deg);
                opacity:0
            }
            25%,75%{
                -webkit-transform:perspective(140px) rotateX(0);
                transform:perspective(140px) rotateX(0);
                opacity:1
            }
            100%,90%{
                -webkit-transform:perspective(140px) rotateY(180deg);
                transform:perspective(140px) rotateY(180deg);
                opacity:0
            }
        }
        @keyframes sk-foldCubeAngle{
            0%,10%{
                -webkit-transform:perspective(140px) rotateX(-180deg);
                transform:perspective(140px) rotateX(-180deg);
                opacity:0
            }
            25%,75%{
                -webkit-transform:perspective(140px) rotateX(0);
                transform:perspective(140px) rotateX(0);
                opacity:1
            }
            100%,90%{
                -webkit-transform:perspective(140px) rotateY(180deg);
                transform:perspective(140px) rotateY(180deg);
                opacity:0
            }
        }
    </style>
</head>
<div class="loadpage">
    <div class="preloadlogo">
        SIND<span style="color:#8B0000;">OJ</span>US-AC
    </div>
    <div id="preload">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>
<script data-cfasync="false" type="text/javascript">
    window.onload = function () {
        var thim_preload = document.getElementById("preload");
        if (thim_preload) {
            setTimeout(function () {
                var body = document.getElementById("thim-body"),
                        len = body.childNodes.length,
                        class_name = body.className.replace(/(?:^|\s)thim-body-preload(?!\S)/, '').replace(/(?:^|\s)thim-body-load-overlay(?!\S)/, '');

                body.className = class_name;
                if (typeof thim_preload !== 'undefined' && thim_preload !== null) {
                    for (var i = 0; i < len; i++) {
                        if (body.childNodes[i].id !== 'undefined' && body.childNodes[i].id == "preload") {
                            body.removeChild(body.childNodes[i]);
                            break;
                        }
                    }
                }
            }, 5000);
        }
    };
</script> 