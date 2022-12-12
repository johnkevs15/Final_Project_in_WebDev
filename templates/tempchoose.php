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
    }
    .temp_menu{
        border: solid #C7BCA1 5px;
        display:grid;
        grid-template-columns: 33.3% 33.3% 33.3%;
        padding:20px;
         /* width: 100%; */
         height: 100%;
         text-align:center;
         margin-bottom:-50px;
         margin-top:-20px;
       
         
       
        
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
        background:#C7BCA1;
        padding:5px;
    }

    .title h3{
        margin-bottom: -8px;
        margin-top:-2px;
    }

</style>

<body>
    <div class="container">

        <div class="head">
            <img src="DCSM.png" alt="" class="logo">
            <span><p style="font-size:24px; color:#222222">DCSM RESUME BUILDER</p></span>
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