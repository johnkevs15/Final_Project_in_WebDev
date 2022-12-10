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
    $content = $_POST['con'];
    // education
    array_push($schoolName,$_POST['schoolName1']);
    array_push($schoolLocation,$_POST['schoolLocation1']);
    array_push($degree,$_POST['degree1']);
    array_push($field,$_POST['field1']);
    array_push($schoolStart,$_POST['schoolStart1']);
    array_push($schoolEnd,$_POST['schoolEnd1']);
    // for work history
    $companyPosition = $_POST['companyposition'];
    $companyname = $_POST['companyname'];
    $companyaddress = $_POST['companyaddress'];
    $decription = $_POST['decription'];
    $jobstart = $_POST['jobstart'];
    $jobend = $_POST['jobend'];
    // Skills
    array_push($skills,$_POST['skill1']);
    array_push($skill_levels,intval($_POST['skill_level1']));
        // Education
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
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title><?php echo strtoupper($first_name)." " .strtoupper($last_name);?></title>
</head>
<style>
    .res_temp3{
        margin:10px 10px 10px 10px;
        padding:10px;
        margin-left: 10%;
        margin-right: 10%;
    }
    .imgBx{
        width: 200px;
        height: 180px;
       
        background-repeat: no-repeat;
        background-position: center;
        object-fit: cover;
        /* margin-top: 0px; */
        padding: 10px;
    }
    .resume{
        border-radius:10px;
        border: solid black 0.5px;
        padding: 10px;
    }
    .resume_head{
        display:flex;
    }
    .rec{
        height: auto;
        width: 100%;
        background-color: rgba(85, 85, 85, 0.309);
        display: flex;
    }
    .candidate{
        margin-left: 20px;
    }
    .title{
        margin-top:5px;
        border: 1px solid black;
        height: auto;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.618);
        display: flex;
        align-items: center;
    }
    .icon{
        height:70px;
        width:70px;
        margin-left:10px;
    }
    .prof_content{
        border: 0.5px solid black;
        margin-left:20px;
        padding: 10px;

    }
    hr{
        margin-left:10px;

    }
    .education{
        display: grid;
        grid-template-columns: 30% 70%;
        margin-top: 10px;

    }
    
.work_content{
     display: grid;
        grid-template-columns: 30% 70%;
        border: 0.5px solid black;
        margin-left:20px;
        padding: 10px;
}
.skill-1{
        display: flex;
        /* letter-spacing: 5px; */
        
    }
.progress{
    margin-top: 15px;
    margin-left: 10px;
}
.container{
    display: grid;
    grid-template-columns: 1fr 1fr;
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
    top: 500px;
    left: 965px;
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
    <div class="container">
    <div class="res_temp3">
        <div class="resume">
            <div class="resume_head">
                <div class="imgBx">
                <img src="./images/<?php echo $profile;?>" class="imgBx">
                </div>
                <div class="candidate">
                    <h1 class="name"><b><?php echo strtoupper($first_name)." ".strtoupper($last_name);?> </b></h1>
                    <h2 class="job"><?php echo $job;?>  </h2>
                    <div class="rec">

                        <table>

                            <tr>
                                <td>
                                    <b>Adress: </i> <?php echo $address;?></b>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <b>Email: <?php echo $gmail;?> </b>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <b>Phone: </i> <?php echo $phone;?>  </b>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>

            <div class="prof_summary">
                <div class="title">
                    <img src="images/profile icon.png" alt="" class="icon">
                    <span><h3 style="font-size:2rem; margin-left:10px;" id="summa">PROFESSIONAL SUMMARY</h3></span>
                </div>
                <div class="prof_content">
                    <h4><?php echo $content;?> </h4>
                </div>
            </div>

            <div class="educ_back">
                <div class="title">
                    <img src="images/education.png" alt="" class="icon">
                    <span><h3 style="font-size:30px; margin-left:10px;" id="edu">EDUCATIONAL BACKGROUND</h3></span>
                </div>

                <!-- start -->
                <div class="prof_content">
                <?php 
                    for($i=0; $i<count($schoolName);$i++)
                    {
                        echo "
                        <div class='education'>
                        <div class='msg-1' style =' font-weight: bold;'>" . $schoolStart[$i] . " to " . $schoolEnd[$i]."
                        
                        <div style =' font-weight: bold;'>".ucwords($schoolName[$i]) ."</div>
                        <div style =' font-weight: bold;'>". $schoolLocation[$i] ."</div>
                        </div>
                        <div class='msg-2' style =' font-weight: bold; margin-left:50px;'>" .ucwords($degree[$i]) . "
                        <div style =' font-weight: bold;'>". $field[$i]."</div>
                        </div>
                        </div>
                        <br>
                        ";
                    }
                    ?>
                </div>
                <!-- end -->
            </div>

            <div class="work_history">
                <div class="title">
                    <img src="images/workhistory.png" alt="" class="icon">
                    <span><h3 style="font-size: 30px; margin-left:10px;" id="work">WORK HISTORY</h3></span>
                </div>
                <!-- work history start -->
                <div class="work_content">
                    <div class="left">
                        <h3 class="year"><?php echo $jobstart." - " . $jobend?> </h3>
                        <h4 class="companyposiotion"><?php echo $companyPosition?></h4>
                        

                    </div>
                    
                    <div class="right">
                       
                        <h4 class="companyname"><?php echo $companyname?> </h4>
                        <h4 class="companyadd"><?php echo $companyaddress?></h4>
                        <h4 class="job_desc"><?php echo $decription?> </h4>
                       
                    </div>

                    
                </div>
                <!-- work history end -->
            </div>

            <div class="professional_skills">
                <div class="title">
                    <img src="images/workhistory.png" alt="" class="icon">
                    <span><h3 style="font-size:2rem; margin-left:10px;" id="skl">PROFESSIONAL SKILLS</h3></span>
                </div>
                <!-- start -->
                <div class="prof_content">
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
                </div>
                <!-- end -->
            </div>

        </div>
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
 <script>
    function changeColor1() {
     
      document.getElementById("summa").style.color = "black";
      document.getElementById("work").style.color = "black";
      document.getElementById( "skl").style.color = "black";
      document.getElementById( "edu").style.color = "black";
    }

    function changeColor2() {
     
      document.getElementById("summa").style.color = "rgba(23, 39, 116, 1)";
      document.getElementById("edu").style.color =  "rgba(23, 39, 116, 1)";
      document.getElementById("skl").style.color = "rgba(23, 39, 116, 1)";
      document.getElementById("work").style.color = "rgba(23, 39, 116, 1)";
      // document.getElementById("res_temp1").style.border = "rgba(23, 39, 116, 1)";
    }

    function changeColor3() {
     
      document.getElementById("skl").style.color = "rgba(79, 160, 149, 1)";
      document.getElementById("summa").style.color = "rgba(79, 160, 149, 1)";
      document.getElementById("edu").style.color = "rgba(79, 160, 149, 1)";
      document.getElementById("work").style.color = "rgba(79, 160, 149, 1)";
    }

    function changeColor4() {
    
      document.getElementById("skl").style.color = "#FF8674";
      document.getElementById("summa").style.color = "#FF8674";
      document.getElementById("edu").style.color = "#FF8674";
      document.getElementById("work").style.color = "#FF8674";
    }

    function changeColor5() {
      
      document.getElementById("skl").style.color = "#CD6C4B";
      document.getElementById("summa").style.color = "#CD6C4B";
      document.getElementById("edu").style.color = "#CD6C4B";
      document.getElementById("work").style.color = "#CD6C4B";
    }

    function confirm() {
      document.getElementById("popup").style.display = "block";
    }

    function exit() {
      document.getElementById("popup").style.display = "none";
    }
  </script>
</body>
</html>
