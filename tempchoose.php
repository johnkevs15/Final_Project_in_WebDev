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
        font-size: 1.2rem;
    }
    .temp_menu{
        border: solid #CE7777 5px;
        display:grid;
        grid-template-columns: 1.5fr 1.5fr 1fr;
        padding:20px;
    }
    .container{
        margin: 2% 2% 2% 2%; 
    }
    .logo{
        width:150px;
        height:100px;
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

</style>

<body>
    <div class="container">

        <div class="head">
            <img src="images/DCSM.png" alt="" class="logo">
            <span><h1>DCSM Resume Builder</h1></span>
        </div>

        <div class="menu">

            <div class="title">
                <h3>CHOOSE A TEMPLATE</h3>
            </div>

            <div class="temp_menu">

                <div class="temp1">
                    <a href=" "><img src="images/temp1.png" alt="temp1"></a>
                </div>

                <div class="temp2">
                    <a href=" "><img src="images/temp2.png" alt="temp1"></a>
                </div>

                <div class="temp3">
                    <a href=" "><img src="images/temp3.png" alt="temp1"></a>
                </div>

            </div>

        </div>

    </div>
    
    


</body>
</html>