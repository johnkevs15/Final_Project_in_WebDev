<!DOCTYPE html>
        <html lang="en">
        <head> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Poppins&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <title>DCSM Resume Builder</title>
            <link rel="shortcut icon" href="site-images/DCSM.png">
       
        </head>
        <style>
            body{
                margin-top:5px;
            }
            .header{
                background:white;
                display:flex;
                align-items:center;
                margin-bottom:-20px;
                margin-top:-10px;
            }
            .logo{
                width:80px;
                /* margin-left:20px;
                */
                /* background-repeat:no-repeat;
                background-position:center;
                background-size:cover; */

            }
            
            .title{
                font-size:24px; 
                text-transform: uppercase;
            }
        </style>
        <body> 
        
            <div class="header">
                <img class="logo" src="./images/DCSM.png">
                <span class="title" style="margin-top:10px; color:#222222; font-family: Poppins; font-size:24px">DCSM Resume Builder</span>
            </div>   

    
                <form action="template3.php" method="POST" enctype="multipart/form-data">
            
                <input type="hidden" name="token" value="HGsZOXpfNC">
                <div class="form first" style="margin-top: 23px; padding: 30px;">
                    <span class="title" >  Personal Information</span>
                    <div class="box" >
                        <div class="picture" >
                            <!-- <label for="addimage"  aria-required="file"><i class="fa fa-plus" style="border: 1px solid; padding:50px; cursor: pointer; font-size: 50px; margin-top: 50px;"></i></label>  -->
                            <!-- <input type="file" name="" id="addimage" style="display: none; visibility:none;" onchange="imagePreview(this)" onchange="getImage(this.value)"> -->
                            <img src="./images/images.png" alt="" width="150" height="200" style="margin-top: 30px;">
                            <!-- <input type="file" name="" id="addimage" style="display: none; visibility:none;" onchange="imagePreview(this)" required > -->
                            <br>
                            <br>
                            <!-- <label for="addimage" aria-required="file"><i class="fa fa-download" style="border: 1px solid; padding: 10px; background-color: white; " class="download" > Choose A Image</i></label> -->
                            <input  name="profile_image" type="file" required>
                            <br>
                            <img src="" id="out-put" width="300px"  style="position: absolute; margin-top: -240px; margin-left: -125px;"> 
                        
                            
                        <button class="btnback" style="float: left; margin-top: 155px;">
                            
                            <i class='fa fa-angle-left' style="font-size: 30px;"></i>
                            <span class="btntext"  style="text-transform: uppercase; font-size: 30px;  "> back
                            
                            </span>
                        
                        
                        </button>
                        </div>
                        <div class="userInput" >
                            <div class="field" style=" grid-gap: 30%;">
                                <div class="input-field" >
                                    <input type="text" placeholder="e.g. John" style="width: 250%; height: 50px;" id="fname"  name="first_name">
                                  
                                    <label class="input-level" >First Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="e.g. Doe" style="width: 250%; height: 50px;" id="lname"  name="lname">
                                    <label class="input-level" >SurName</label>
                                </div>  
                            
                            
                            </div>
                            <div class="field-1">
                                <div class="input-field-1">
                                    <input type="text" placeholder="e.g. Sr. Web Developer" style="width: 890px; height: 50px;" id="job" name="job" >
                                    <label class="input-level" >JOB TITLE</label>
                                </div>
                                <div class="input-field-1">
                                    <input type="text" placeholder="e.g. Cebu City" style="width:  890px; height: 50px;" id="address" name="address" >
                                    <label class="input-level" >ADDRESS</label>
                                </div>  
                            
                            </div>
                            <div class="field" style=" grid-gap: 30%;">
                                <div class="input-field">
                                    <input type="tel" placeholder="e.g +92343145678" name="not_robot" style="width: 250%; height: 50px;" id="contact"  pattern="[0-9]{11}" title="please input 11 number" required >
                                    <label  class="input-level">Contact </i></label>
                                </div>
                                <div class="input-field">
                                    <input type="email" placeholder="e@gmail.com" style="width: 250%; height: 50px;" id="email" required name="gmail">
                                    <label class="input-level" >Email</label>
                                </div>  
                            
                            
                            </div>
                        
                            
                        <button class="btnnext" style="margin-left:790px;  margin-top: 95px;" id="nextButton">
                            
                            <span class="btntext"  style="text-transform: uppercase; font-size: 30px; background-color: rgb(196, 5, 5); ">next
                                <i class='fa fa-angle-right'></i>
                            </span>
                        
                        
                        </button>
                            </div>   
                        </div>
                    </div>
                    
                </div>
                <div class="form second" >
                    <div class="Education Background" style="padding: 25px; margin-top: 28px;">
                        <span class="title">Education Background</span>
                        <div class="field" style="grid-gap:11% ;margin-top:30px;">
                            <div class="input-field">
                                <input type="text" placeholder="e.g. USC" style="width: 560px; height: 50px;" id="school" required name="schoolName1">
                                <label >School name</label>
                            </div>
                            <div class="input-field">
                                <input type="text" placeholder="e.g. Talamban Cebu City" style="width: 560px; height: 50px;" id="schooll"required name="schoolLocation1">
                                <label >school Address</label>
                            </div>  
                        </div>
                        <div class="field-1">
                            <div class="input-field-1">
                                <input type="text" placeholder="degree" style="width: 1259px; height: 50px;" id="deg" required name="degree1">
                                <label >degree</label>
                            </div>
                            <div class="input-field-1">
                                <input type="text" placeholder="field of study" style="width: 1259px; height: 50px;" id="field" required name="field1">
                                <label >field of study</label>
                            </div>      
                        </div>
                        <div class="field"style="grid-gap:11%">
                            <div class="input-field">
                                <input type="date" placeholder="school start" style="width: 560px; height: 50px;" id="start" required name="schoolStart1">
                                <label >school start</label>
                            </div>
                            <div class="input-field">
                                <input type="date" placeholder="school end" style="width: 560px; height: 50px;" id="end" required name="schoolEnd1">
                                <label >school end</label>
                            </div>  
                        </div>
                        <div id="addEducation"></div>
                        <div class="mb-3">
                            <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()"  style="padding: 5px; font-size:20px; width: 100px; ">+</button>
                        </div>
                        <div class="buttons">
                            <button class="backbtn1" style="margin-left: 35px; margin-top: 59px;" id="prevButton">
                            
                            <i class='fa fa-angle-left' style="font-size: 30px;"></i>
                            <span class="btntext"  style="text-transform: uppercase; font-size: 30px;  "> back
                            
                            </span>
                            <button class="nextbtn1" style="margin-left: 1070px; margin-top: -39px; display: flex;">
                            
                                <span class="btntext"  style="text-transform: uppercase; font-size: 30px; background-color: rgb(196, 5, 5); ">next
                                    <i class='fa fa-angle-right'></i>
                                </span>
                            </button>
                        </div>
                    </div>
            </div>
            <div class="form third" style=" margin-top:45px; width: 100%; padding: 10px; height: 419px; margin-left: 15px;">
                <span class="title">Professional Skills</span> 
                <div class="Professional Skills" >
                    
                    <div class="skills" >
                    
                        <div class="border border-dark p-3 mb-3" style="display: grid; padding: 5px;">    
                            <h2>Skills (Max:4)</h2>
                            <div class="mb-3" style="display: grid; padding:10px;">
                                <label for="exampleInputEmail1" class="form-label">Your Skills</label>
                                <input type="text" class="input" name="skill1" style="height: 30px; margin-bottom: 5px;" id="skills" required>
                                <select id="select" name="skill_level1" style="height: 30px;" required >
                                    <option value=""  selected="selected">Select stars based upon your skill level</option>
                                    <option  class="input"value="1">1 - Novice</option>
                                    <option  class="input"value="2">2 - Advanced Beginner</option>
                                    <option  class="input" value="3">3 - Competent</option>
                                    <option  class="input" value="4">4 - Proficient</option>
                                    <option  class="input" value="5">5 - Expert</option>
                                </select>
                                
                            </div>
                            
                            <div id="addSkill"></div>
                            <button type="button" id="skill_hide" class="btn1" onclick="addSkill()" style="margin-left:10px">+</button>
                            <div class="mb-3" style="text-align: center;">
                            
                                <!-- <button class="btn1" id="skilladd">Add</button> -->
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="display1">
                        <center>
                            <span class="title">Hard and soft Skills Sample</span>
                            <div class="professional">
                                <img src="./images/resized.png"  alt="" height="100%"  width=100% style="height: 100px;
                            height: 88%;
                                object-fit: cover;
                                object-position: top;">
                            </div>
                        </center>
                        
                    </div>
                
                
                </div>
                <div class="buttons">
                    <button class="backbtn2" style="margin-left: 35px; margin-top: 57px;" id="prevButton">
                    
                    <i class='fa fa-angle-left' style="font-size: 30px;"></i>
                    <span class="btntext"  style="text-transform: uppercase; font-size: 30px;  "> back
                    
                    </span>
                    <button class="nextbtn2" style="margin-left: 1070px; margin-top: -39px; display: flex;">
                    
                        <span class="btntext"  style="text-transform: uppercase; font-size: 30px; background-color: rgb(196, 5, 5); ">next
                            <i class='fa fa-angle-right'></i>
                        </span>
                    </button>
                </div> 
        </div>
        <div class="form fourth">
            <div class="Work History" style="padding: 25px; margin-top: 28px;">
                <span class="title">Work History</span>
                <div class="field" style="grid-gap:11% ;margin-top:30px;"   >
                    <div class="input-field">
                        <input type="text" placeholder="POSITION" style="width: 560px; height: 50px;" id="position" required name="companyposition" >
                        <label >POSITION</label>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="  COMPANY NAME" style="width: 560px; height: 50px;"   required name="companyname"> 
                        <label >COMPANY NAME</label>
                    </div>  
                
                
                </div>
                <div class="field-1">
                    <div class="input-field-1">
                        <input type="text" placeholder="Description" style="width: 1260px; height: 50px;"  required name="decription">
                        <label >Job Description</label>
                    </div>
                    <div class="input-field-1">
                        <input type="text" placeholder="e.g 1234 Main Street" style="width: 1260px; height: 50px;"  required name="companyaddress">
                        <label >ADDRESS</label>
                    </div>  
                
                </div>
                <div class="field" style="grid-gap:11%; ">
                    <div class="input-field">
                        <input type="date" placeholder="START DATE" style="width: 560px; height: 50px;" id="st" required name="jobstart">
                        <label >START DATE</label>
                    </div>
                    <div class="input-field">
                        <input type="date" placeholder="END DATE" style="width: 560px; height: 50px;" id="ed" required name="jobend">
                        <label >END DATE</label>
                    </div>  
                
                
                </div>
                <div class="buttons">
                    <button class="backbtn3" style="margin-left: 35px; margin-top: 95px;" id="prevButton">
                    
                    <i class='fa fa-angle-left' style="font-size: 30px;"></i>
                    <span class="btntext"  style="text-transform: uppercase; font-size: 30px;  "> back
                    
                    </span>
                    <button class="nextbtn3" style="margin-left: 1070px; margin-top: -37px; display: flex;">
                    
                        <span class="btntext"  style="text-transform: uppercase; font-size: 30px; background-color: rgb(196, 5, 5); ">next
                            <i class='fa fa-angle-right'></i>
                        </span>
                    </button>
                </div> 
            
            </div>
    </div>
    <div class="form fifth" style=" margin-top:42px; width: 100%; padding: 10px; height: 419px;" >
        <span class="title">Professional Summary</span> 
        <div class="Summary" >
            <div class="container">
                <div class="toolbar">
                
                    <div class="btn-toolbar">
                        <button onclick="formatDoc('undo')"><i class='bx bx-undo' ></i></button>
                        <button onclick="formatDoc('redo')"><i class='bx bx-redo' ></i></button>
                        <!-- <button onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left' ></i></button>
                        <button onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle' ></i></button>
                        <button onclick="formatDoc('justifyRight')"><i class='bx bx-align-right' ></i></button> -->
                    </div>
                </div>
                <textarea name="con" id="con"  cols="168" rows="18" spellcheck="true" required style="margin-left:10px;"></textarea>
                <!-- <div id="con" contenteditable="true" spellcheck="true" required name ="con">sdsdsdssd -->
                  
                </div>
            </div>
            <div class="buttons" style=" margin-top: -35px; justify-content: space-between; display: flex;" >
                <button class="backbtn4" style=" margin-top: 95px; margin-left: 50px;" id="prevButton">
                
                <i class='fa fa-angle-left' style="font-size: 30px;"></i>
                <span class="btntext"  style="text-transform: uppercase; font-size: 30px;  "> back
                
                </span>
                <button class="previewbtn4" style=" margin-top: 95px;  margin-right: 75px; " name="preview">
                
                    <span class="btntext"  style="text-transform: uppercase; font-size: 30px; background-color: rgb(196, 5, 5); ">preview
                        <i class='fa fa-angle-right'></i>
                    </span>
                </button>
            </div> 
        </div> 
        
        </div>
    </div>

                </form>
                <script src="style.js">
                
                </script>
        
        
        </body>
        </html>
