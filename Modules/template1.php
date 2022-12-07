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
    // for work history
    $companyPosition = $_POST['companyposition'];
    $companyname = $_POST['companyname'];
    $companyaddress = $_POST['companyaddress'];
    $decription = $_POST['decription'];
    $jobstart = $_POST['jobstart'];
    $jobend = $_POST['jobend'];
    // for summary
    $content = $_POST['con'];
    // Skills
    array_push($skills,$_POST['skill1']);
    array_push($skill_levels,intval($_POST['skill_level1']));
    // education
    array_push($schoolName,$_POST['schoolName1']);
    array_push($schoolLocation,$_POST['schoolLocation1']);
    array_push($degree,$_POST['degree1']);
    array_push($field,$_POST['field1']);
    array_push($schoolStart,$_POST['schoolStart1']);
    array_push($schoolEnd,$_POST['schoolEnd1']);

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
}


?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title><?php echo $first_name." " .$last_name;?></title>
</head>

<style>
    
    .res_temp1{
        font-family: Arial, Helvetica, sans-serif;
        margin:10px 10px 10px 10px;
        border: solid black;
        border-radius: 5px;
        padding:10px;
    }
    .imgBx{
        width: 210px;
        height: 250px;
        /* background:url("./images/"); */
        background-repeat: no-repeat;
        background-position: center;
        object-fit: cover;
        margin-top: 5px;
    }
    .resume_head{
        display:flex;
        padding: 10px;
    }
    tr, td {
        align-items: center;
        display: block;
    }
    .candidate{
      
        margin-left:15px;
        /* display: block; */
        margin-bottom: -20px;
       
    }
    .name, .job, .contact, .address{
        text-transform: uppercase;
    }
    .contact, .address, .email{
        margin-top: -20px;
        line-height: 0px;
    }
    .companyname{
        font-size: 25px;
    
    }
    .companyposiotion{
        font-size: 20px;
    }
    .companyadd{
        font-size: 18px;
        padding: 10px;
    }
    .experience, .education{
        display: grid;
        grid-template-columns: 30% 70%;

    }
    .ms-1{
        display: block;
    }
    .skill-1{
        display: flex;
    }
    .fas {
       padding: 15px;
    }
</style>

<body>
    <div class="res_temp1">
        <div class="resume">
            <hr>
            <div class="resume_head">
                
                <img src="./images/<?php echo $profile;?>" class="imgBx">

                
                <div class="candidate">

                    <h1 class="name"><?php echo $first_name." " .$last_name;?><b></b></h1>
                    <h2 class="job"><?php echo $job;?> </h2>
                    <h4 class="contact"><i class="fas fa-phone-alt"></i> <?php echo $phone;?> </h4>
                    <h4 class="address"><i class="fas fa-map-marker"></i> <?php echo $address;?> </h4>
                    <h4 class="email"><i class="fas fa-envelope "></i> <?php echo $gmail;?> </h4>   
                 
                </div>
            </div>
            <hr>
            <div class="resume_content1">
                <h3>PROFESSIONAL SUMMARY</h3>
                <h4><?php echo $content;?> </h4>
            </div>
            <hr>
            <div class="resume_content2">
                <h3>WORK HISTORY</h3>
                <div class="experience">
                <table>
                    
                    <tr >
                        <th class="year"><?php echo $jobstart." - " . $jobend?> </th>
                        <td class="companyposiotion"><b><?php echo $companyPosition?></b></td>  
                    </tr> 
                </table>
                <table>
                <tr>          
                         <td class="companyname"><b><?php echo $companyname?></b></td>
                        <td class="companyadd"><?php echo $companyaddress?></td>
                        <td class="companydes"><?php echo $decription?></td>
                    </tr>
                </table>
                </div>
              
            </div>
            <hr>
            <div class="resume_content3">
                <h3>PROFESSIONAL SKILLS</h3>

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
            <div class="resume_content4">
                <h3>EDUCATIONAL BACKGROUND</h3><br>

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
    </div>
</body>
</html>


