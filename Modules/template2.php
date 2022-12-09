
<?php 
define('Token','HGsZOXpfNC');
$skills = [];
$skill_levels = [];
$schoolName = [];
$schoolLocation = [];
$degree = [];
$schoolStart = [];
$schoolEnd = [];
$field = [];
if(Token == $_POST['token'] )
{
    // for personal information
    $temp_profile = $_FILES['profile_image']['tmp_name'];
    $profile = $_FILES['profile_image']['name'];
    move_uploaded_file($temp_profile,'images/'.$profile);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['lname'];
    $job = $_POST['job'];
    $address = $_POST['address'];
    $phone = $_POST['not_robot'];
    $gmail = $_POST['gmail'];
    // for education
    array_push($schoolName,$_POST['schoolName1']);
    array_push($schoolLocation,$_POST['schoolLocation1']);
    array_push($degree,$_POST['degree1']);
    array_push($field,$_POST['field1']);
    array_push($schoolStart,$_POST['schoolStart1']);
    array_push($schoolEnd,$_POST['schoolEnd1']);
        // for summary
        $content = $_POST['con'];
        // Skills
    array_push($skills,$_POST['skill1']);
    array_push($skill_levels,intval($_POST['skill_level1']));
        // for work history
        $companyPosition = $_POST['companyposition'];
        $companyname = $_POST['companyname'];
        $companyaddress = $_POST['companyaddress'];
        $decription = $_POST['decription'];
        $jobstart = $_POST['jobstart'];
        $jobend = $_POST['jobend'];

     // skills
     if(isset($_POST['skill2']) && !empty($_POST['skill2']))
     {
       if(isset($_POST['skill_level2']) && !empty($_POST['skill_level2']))
       {
         array_push($skills,$_POST['skill2']);
         array_push($skill_levels,intval($_POST['skill_level2']));
       }
     }
     if(isset($_POST['skill3']) && !empty($_POST['skill3']))
     {
       if(isset($_POST['skill_level3']) && !empty($_POST['skill_level3']))
       {
         array_push($skills,$_POST['skill3']);
         array_push($skill_levels,intval($_POST['skill_level3']));
       }
     }
     if(isset($_POST['skill4']) && !empty($_POST['skill4']))
     {
       if(isset($_POST['skill_level4']) && !empty($_POST['skill_level4']))
       {
         array_push($skills,$_POST['skill4']);
         array_push($skill_levels,intval($_POST['skill_level4']));
       }
     }
     if(isset($_POST['skill5']) && !empty($_POST['skill5']))
     {
       if(isset($_POST['skill_level5']) && !empty($_POST['skill_level5']))
       {
         array_push($skills,$_POST['skill5']);
         array_push($skill_levels,intval($_POST['skill_level5']));
       }
     }
    // for education
    if(isset($_POST['schoolName2']) && !empty($_POST['schoolName2']))
    {
      if(isset($_POST['schoolLocation2']) && !empty($_POST['schoolLocation2']))
      {
      if(isset($_POST['degree2']) && !empty($_POST['degree2']))
      {
        if(isset($_POST['schoolStart2']) && !empty($_POST['schoolStart2']))
        {
          if(isset($_POST['schoolEnd2']) && !empty($_POST['schoolEnd2']))
          {
            if(isset($_POST['field2']) && !empty($_POST['field2']))
            {
                array_push($schoolName,$_POST['schoolName2']);
                array_push($schoolLocation,$_POST['schoolLocation2']);
                array_push($degree,$_POST['degree2']);
                array_push($field,$_POST['field2']);
                array_push($schoolStart,$_POST['schoolStart2']);
                array_push($schoolEnd,$_POST['schoolEnd2']);
            }
          }
        } 
      }
    }
   }
    if(isset($_POST['schoolName3']) && !empty($_POST['schoolName3']))
    {
      if(isset($_POST['schoolLocation3']) && !empty($_POST['schoolLocation3']))
      {
        if(isset($_POST['degree3']) && !empty($_POST['degree3']))
        {
          if(isset($_POST['schoolStart3']) && !empty($_POST['schoolStart3']))
          {
            if(isset($_POST['schoolEnd3']) && !empty($_POST['schoolEnd3']))
            {
                if(isset($_POST['field3']) && !empty($_POST['field3']))
            {
                array_push($schoolName,$_POST['schoolName2']);
                array_push($schoolLocation,$_POST['schoolLocation2']);
                array_push($degree,$_POST['degree2']);
                array_push($field,$_POST['field2']);
                array_push($schoolStart,$_POST['schoolStart2']);
                array_push($schoolEnd,$_POST['schoolEnd2']);
            }
        }
          }
        } 
      }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $first_name." " .$last_name;?></title>
    <link rel = "icon" href = "images/title_icon.png" type = "image/x-icon">
    <link rel="stylesheet" href="resume.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:'Poppins'
}

body{
    background: #96805d; 
    display: flex;
    /* justify-content: center;
    align-items: center; */
    min-height: 100vh;
}

.container{
    position: relative;
    width: 100%;
    max-width:700px;
    min-height:100px;
    background: #fff;
    margin: 50px;
    display: grid;
    grid-template-columns: 1.5fr 1.5fr;
    box-shadow: 0 35px 55px rgba(0,0,0,0.1);
}
 
.container .left_Side{
    position: relative;
    background: #f5ca7f;
    padding: 40px;
    width:100%;
}

.profileText{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 1px solid;
    margin-top: 10px;
    text-transform: uppercase;
}

.profileText .imgBx{
    position: relative;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
}

.profileText .imgBx img{
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.name{
    color:#fff;
    font-size:2.0rem;
    margin-top:15px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 600;
    line-height:1.4em;  
}

.contactInfo{
    padding-top: 40px;
}

.title{
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

.contactInfo ul{
    position:relative;

}

.contactInfo ul li{
    position:relative;
    list-style: none;
    margin:10px 0;
    cursor:pointer;
}

.contactInfo ul li .icon{
    display:inline-block;
    width: 30px;
    font-size:18px;
    color: #6a5634;
}

.contactInfo ul li span{
    color:#fff;
    font-weight: 300;
}

.contactInfo .education li{
    margin-bottom: 15px;
}

.contactInfo.education h5{
    color: #967746;
    font-weight: 500;
}

.contactInfo.education h4:nth-child(2){
    color: #967746;
    font-weight: 500;
}

.contactInfo.education h4{
    color: #967746;
    font-weight: 500;
}

.text{
    display:inline-block;
    width: 10px;
    font-weight:300;
    color: #fff;
}

.contactInfo.language .percent{
    position: relative;
    width:100%;
    height:6px;
    background:rgb(255, 255, 255);
    display:block;
    margin-top: 5px;
}

.contactInfo.language .percent div{
    position:absolute;
    top:0;
    left:0;
    height:100%;
    background:#866023;
}

.container .right_Side{
    position: relative;
    background: #fff;
    padding: 40px;
}

.about{
    margin-bottom:50px;
}

.about:last-child{
    margin-bottom:0;
}

.title2{
    color:#866023;
    letter-spacing: 1px;
    margin-bottom:10px;
}

p{
    color:black;
}
.skill-1{
    padding: 5px;
}
.progress{
        /* display: flex; */
        padding:5px;
        /* justify-content: space-between; */
        /* text-align:center; */
        margin-left:30px;
    }
    .color1 {
    width: 75px;
    height: 59px;
    background: rgba(0, 0, 0, 1);
    opacity: 1;
    position: absolute;
    top: 280px;
    left: 800px;
    border-radius: 20%;
    transition-duration: 1000ms;
    transition-property: all;
  }
  .color1:hover{
    background: black;
    transform: rotate(180deg);
  }
  .color2 {
    width: 75px;
    height: 59px;
    background: rgba(23, 39, 116, 1);
    opacity: 1;
    position: absolute;
    top: 280px;
    left: 900px;
    border-radius: 20%;
    transition-duration: 1000ms;
    transition-property: all;
  }
  .color2:hover{
    background: rgba(23, 39, 116, 1);
    transform: rotate(180deg);
  }
  .color3 {
    width: 75px;
    height: 59px;
    background: rgba(79, 160, 149, 1);
    opacity: 1;
    position: absolute;
    top: 280px;
    left: 1000px;
    border-radius: 20%;
    transition-duration: 1000ms;
    transition-property: all;
  }
  .color3:hover{
    background: rgba(79, 160, 149, 1);
    transform: rotate(180deg);
  }
  
  .color4 {
    width: 75px;
    height: 59px;
    background: #FF8674;
    opacity: 1;
    position: absolute;
    top: 280px;
    left: 1100px;
    border-radius: 20%;
    transition-duration: 1000ms;
    transition-property: all;
  }
  .color4:hover{
    background: #FF8674;
    transform: rotate(180deg);
  }
  .color5 {
    width: 75px;
    height: 59px;
    background: #CD6C4B;
    opacity: 1;
    position: absolute;
    top: 280px;
    left: 1200px;
    border-radius: 20%;
    transition-duration: 1000ms;
    transition-property: all;
  }
  .color5:hover{
    background: #CD6C4B;
    transform: rotate(180deg);
  }
  .popup {
    display: none;
    border: 1px solid black;
    height: 200px;
    width: 300px;
    background-color: white;
    position: absolute;
    top: 50%;
    left: 38%;
    text-align: center;  
  }
  .download {
    width: 245px;
    color: black;
    position:absolute;
    top: 418px;
    left: 920px;
    font-family: Inter;
    font-weight: Bold;
    font-size: 25px;
    opacity: 1;
    cursor: pointer;
    /* background: red; */
  }
  .back {
    width: 145px;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    top: 515px;
    left: 988px;
    font-family: Arial;
    font-weight: Bold;
    font-size: 35px;
    opacity: 1;
    text-align: left;
  }
   button{
    margin-top: 5%;
    padding: 8px 12px;
  }
  .backbox {
    width: 150px;
    height: 70px;
    background: rgb(182, 180, 180);
    opacity: 1;
    position: absolute;
    top: 505px;
    left: 960px;
    overflow: hidden;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
  }
  .pdfback {
    width: 350px;
    height: 60px;
    background: rgb(196, 5, 5);
    opacity: 1;
    position: absolute;
    top: 400px;
    left: 865px;
    border-top-left-radius: 35px;
    border-top-right-radius: 35px;
    border-bottom-left-radius: 35px;
    border-bottom-right-radius: 35px;
    overflow: hidden;
    transition-duration: 1000ms;
    transition-property: all;
    cursor: pointer;
  }
  .pdfback:hover{
    background: rgb(165, 164, 163);
    transform: rotate(180deg);
  }

</style>
<body>
    <div class="container" >

        <div class="left_Side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="./images/<?php echo $profile;?>" alt="image">
                </div>
                <h1 class="name"><br><?php echo $first_name." " .$last_name;?> </h1>
                <h2 class="job"><?php echo $job;?> </h2>
                
            </div>

            <div class="contactInfo">
                <h3 class="title">Contact Info</h3>

                <ul>
                    <h4 class="address"><i class="fas fa-map-marker"></i> <?php echo $address;?> </h4>
                    <h4 class="email"><i class="fas fa-envelope "></i> <?php echo $gmail;?> </h4>
                    <h4 class="contact"><i class="fas fa-phone-alt"></i> <?php echo $phone;?>  </h4>
                </ul>
            </div>

            <div class="contactInfo education">
                <h3 class="title">EDUCATIONAL BACKGROUND</h3>

                <table>
                <?php 
                    for($i=0; $i<count($schoolName);$i++)
                    {
                        echo "
                        <div class='education'>
                        <div class='msg-1' style =' font-weight: bold;'>" . $schoolStart[$i] . " to " . $schoolEnd[$i]."
                        
                        <div style =' font-weight: bold;'>".ucwords($schoolName[$i]) ."</div>
                        <div style =' font-weight: bold;'>". $schoolLocation[$i] ."</div>
                        </div>
                        <div class='msg-2' style =' font-weight: bold;'>" .ucwords($degree[$i]) . "
                        <div style =' font-weight: bold;'>". $field[$i]."</div>
                        </div>
                        </div>
                        <br>
                        ";
                    }
                    ?>

                </table>

            </div>


        </div>

        <div class="right_Side">

            <div class="about">
                <h2 class="title2">PROFESSIONAL SUMMARY</h2>
                <p class="summary"><?php echo $content;?></p>
            </div>
            <hr>

            
            <div class="about">
                <h2 class="title2">PROFESSIONAL SKILLS</h2>
                
                <table>
                <?php 
                    for($j=0; $j<count($skills); $j++){
                        echo "<div class='skill-1'>
                                <p><strong>" . strtoupper($skills[$j]) . "</strong></p>
                                <div class='progress'>";
                            for($i=0;$i<$skill_levels[$j];$i++){
                                if($skill_levels[$j]<3){
                                    echo '<div class="fas fa-star active" style = "color:silver;"></div>';
                                }else{
                                    
                                    echo '<div class="fas fa-star active" style = "color:orange;"></div>';
                                }
                            }
                            echo '</div></div>';
                        }
                    ?>
                
                </table>

            </div>
            <hr>

            <div class="about">
                <h2 class="title2">WORK HISTORY</h2>
                <div class="experience" >
                <ul>
                    <div><?php echo $jobstart." - " . $jobend?> </div>
                    <div><?php echo $companyPosition?></b></div>
                    <div><?php echo $companyname?></div>
                    <div><?php echo $companyaddress?></div>
                    <div><?php echo $decription?></div>
                </ul>

                    
                </div>
            </div>
            <hr>

        </div>
            <div class="chooser">
                    <div class="color1" onclick="changeColor1()"></div>
                    <div class="color2" onclick="changeColor2()"></div>
                    <div class="color3" onclick="changeColor3()"></div>
                    <div class="color4" onclick="changeColor4()"></div>
                    <div class="color5" onclick="changeColor5()"></div>
                    <div class="backbox"></div>
                <div class="pdfback"></div>
                <span class="download" onclick="confirm()">DOWNLOAD AS PDF</span>
                <div class="back">
                    <a href="back">BACK</a>
                </div>
                <div class="popup" id="popup">
                    <h2 onclick="exit()">X</h2>
                    <h3>Do you already have an account?</h3>
                    <a href="https://code.tutsplus.com/tutorials/confirm-yes-or-no-with-javascript--cms-37532"><button>Yes</button></a>
                    <button>No</button>
                </div>
         </div>
    </div>
</body>
</html>