<!DOCTYPE html>
<html lang="en">
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
    body {
        color: #797979;
        background: #f1f2f7;
        font-family: 'Open Sans', sans-serif;
        padding: 0px !important;
        margin: 0px !important;
        font-size:13px;
    }
    .lock-screen {
        background:#02bac6;
        background-size: cover;
        background-repeat: repeat;
    }
    
.lock-wrapper {
    margin: 10% auto;
    max-width: 330px;
}

.lock-box {
    background: rgba(255,255,255,.3);
    padding: 20px;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    position: relative;
}

.lock-wrapper img {
    position: absolute;
    left: 40%;
    top: -40px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 5px solid #fff;
}

.lock-wrapper h1 {
    text-align: center;
    color: #fff;
    font-size: 18px;
    text-transform: uppercase;
    padding: 20px 0 0 0;
}

.lock-wrapper .locked {
    margin-bottom: 20px;
    display: inline-block;
    color: #026f7a;
}

.btn-lock,.btn-lock:hover {
    background: #02b5c2;
    color: #fff;
}

.lock-input {
    width: 83%;
    border: none;
    float: left;
    margin-right: 3px;
}

    </style>
  </head>

<body class="lock-screen">
    <div class="lock-wrapper">
        <div class="lock-box text-center">
            <h1>Revisar lugar de votación</h1>
            <span class="locked">Ingrese su cedula</span>
            <form role="form" class="form-inline">
                <div class="form-group col-lg-12">
                    <input type="text" id="cedula" placeholder="CEDULA" class="form-control lock-input">
                    
                    <button class="btn btn-lock solicitar" type="button">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
