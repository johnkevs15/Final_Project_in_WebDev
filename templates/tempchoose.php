<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<style>
    body {
        font-family: 'Poppins';
        /* font-size: 1.2rem; */
    }
    .temp_menu{
        border: solid #CE7777 5px;
        display:grid;
        grid-template-columns: 33.3% 33.3% 33.3%;
        padding:20px;
         /* width: 100%; */
         height: 100%;
    }
    .container{
        margin: 2% 2% 2% 2%; 
        /* width: 100%; */
        
    }
    .logo{
        width:80px;
        /* height:100px; */
    }
    .head{
        display:flex;
        align-items:center;
        margin-bottom:5px;
        margin-top:-10px;
        
    }
    .title{
        background:#CE7777;
        padding:5px;
    }
    p{
        color:#1B1B1B;
    }

</style>

<body>
    <div class="container">

        <div class="head">
            <img src="DCSM.png" alt="" class="logo">
            <span><p style="font-size:24px;">DCSM RESUME BUILDER</p></h4></span>
        </div>

        <div class="menu">

            <div class="title">
                <h3>CHOOSE A TEMPLATE</h3>
            </div>

            <div class="temp_menu">

                <div class="temp1">
                    <a href=" "><img src="temp1.png" style="width:85%; height:80%; border:1px solid black; margin-top:50px;"></a>
                </div>

                <div class="temp2">
                    <a href=" "><img src="temp2.png" alt="temp1"  style="width:85%; height:80%; border:1px solid black; margin-top:50px;"></a>
                </div>

                <div class="temp3">
                    <a href=" "><img src="temp3.png" alt="temp1" style="width:85%; height:80%; border:1px solid black; margin-top:50px;"></a>
                </div>

            </div>

        </div>

    </div>
    
    


</body>
</html>