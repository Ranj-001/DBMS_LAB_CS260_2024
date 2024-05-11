<?php
  include("./connectdb.php");

  if(isset($_POST['submit'])){
    header("Location: page7.php");
    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    body{
        background-image: url(https://cache.careers360.mobi/media/article_images/2022/9/29/iit-patna-featured-image.jpg);
        background-repeat: no-repeat;
        background-size: cover;

    }

    h1{
        text-align: center;
    }

    .first-row{
       
        padding: 3px;
        display: flex;
        justify-content: flex-end;
    }
    .button1{
        margin:5px;
        float: right;
    }
    .button2{
        margin:5px;
        float: right;
    }

    .Row1{
        width: 90%;
        margin: auto;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        text-align: center;
        padding:20px;
    }

    .grid-container1 {
    display: grid;
    
    grid-gap: 10px;
    }

    .grid-row1 {
        display: flex;
    }

    .grid-item1 {
        flex: 1;
        margin-right: 10px;
    }

    .grid-item-full1 {
        justify-content: left;
        flex: 2;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 50%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="date"] {
    width: 50%; 
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    color: #333;
}


input[type="date"]:focus {
    border-color: #007bff; 
    outline: none; 
}


#dropdown {
    width: 52%; 
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    color: #978888;
}


#dropdown::after {
    content: '\25BC'; 
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none; 
}


#dropdown option {
    background-color: #fff;
    color: #333;
}


#dropdown:focus,
#dropdown:hover {
    border-color: #007bff; 
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
    outline: none; 
}

.dotted-line {
    border-bottom: 1px dotted #000; 
    width: 100%;
}

.grid-container {
    display: grid;
 
    grid-gap: 15px;
}

.grid-row {
    display: flex;
}

.grid-item {
    flex: 1;
    margin-right: 10px;
}


label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 50%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.upload-label {
    display: inline-block;
    margin-bottom: 5px;
    color: #333;
}

.upload-input {
    
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    cursor: pointer;
}

.upload-input:hover {
    background-color: #e0e0e0;
}

.address-label {
    margin-bottom: 5px;
    color: #333;
}

.address-input {
  
    width: 50%;
    height: 100px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.address-input:focus {
    border-color: #007bff;
    outline: none;
}

.save{
    background-color: orange;
    border-width: 0px;
    height: 40px;
    margin-top: 50px;
    margin-right: 50px;
    margin-bottom: 50px;
    float: right;
}
.save:hover{
    background-color: rgb(228, 185, 103);
}

.back{
    background-color: orange;
    border-width: 0px;
    height: 40px;
    margin-top: 50px;
    margin-right: 50px;
    margin-bottom: 50px;
    float: left;
}
.back:hover{
    background-color: rgb(228, 185, 103);   
}



</style>


<body>

    <div>

        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/52/Indian_Institute_of_Technology%2C_Patna.svg/330px-Indian_Institute_of_Technology%2C_Patna.svg.png" style="padding-top: 5px; height: 120px; float: left;">

        <h1 style="font-size: 50px; color: white;" >INDIAN INSTITUTE OF TECHNOLOGY PATNA</h1>
        <h1 style="font-size: 50px; color: white;">भारतीय प्रौद्योगिकी संस्थान पटना</h1>


        <div class="Row1">
            
            <div class="first-row">
                
                <a href="./login_page.html">
                    <button class="button1">Logout</button> </a>
                
            </div>
            
            <p style="text-align: left;">Welcome : </p>

            <p style="text-align: center; font-size: large; text-decoration: underline;">MEMBERSHIP OF PROFESSIONAL SOCIETIES : </p>
            
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-item">Serial. No.</div>
                    <div class="grid-item">	Name of the Professional Society</div>
                    <div class="grid-item">	Membership Status (Lifetime/Annual)</div>
                   
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>

            </div>
        </div>

        <div class="dotted-line"></div>

        <div class="Row1">

            <p style="text-align: center; font-size: large;text-decoration: underline;">PROFESSIONAL TRAINING : </p>
                
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-item">S. No.</div>
                    <div class="grid-item">	Type of Training Received	</div>
                    <div class="grid-item">	Organisation</div>
                    <div class="grid-item">Year</div>
                    <div class="grid-item">Duration (in years & months)</div>
                    
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                  
                </div>

            </div>
        </div>

        <div class="dotted-line"></div>

        <div class="Row1">

            <p style="text-align: center; font-size: large;text-decoration: underline;">AWARDS AND RECOGNITION(S) : </p>
                
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-item">S. No.</div>
                    <div class="grid-item">	Name of Award</div>
                    <div class="grid-item">	Awarded By</div>
                    <div class="grid-item">Year</div>

                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
               
            </div>
        </div>

        <div class="dotted-line"></div>

        <div class="Row1">

            <p style="text-align: center; font-size: large;text-decoration: underline;">SPONSORED PROJECTS / CONSULTANCY DETAILS : </p>
            <p style="text-align: left;">Sponsered Projects : </p>
                
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-item">S. No.</div>
                    <div class="grid-item">Sponsoring Agency </div>
                    <div class="grid-item">	Title of Project</div>
                    <div class="grid-item">Sanctioned Amount (₹)</div>
                    <div class="grid-item">Period </div>
                    <div class="grid-item">	Role</div>
                    <div class="grid-item">Status (Completed/On-going)</div>

                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
               
            </div>
        </div>

        <div class="dotted-line"></div>

        <div class="Row1">

            <p style="text-align: center; font-size: large;text-decoration: underline;">SPONSORED PROJECTS / CONSULTANCY DETAILS : </p>
            <p style="text-align: left;">Consultancy Projects : </p>
                
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-item">S. No.</div>
                    <div class="grid-item">Organisation </div>
                    <div class="grid-item">	Title of Project</div>
                    <div class="grid-item">Amount of grant</div>
                    <div class="grid-item">Period </div>
                    <div class="grid-item">	Role</div>
                    <div class="grid-item">Status (Completed/On-going)</div>

                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
                <div class="grid-row">
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                    <div class="grid-item"><input type="text"></div>
                   
                </div>
               
            </div>
        </div>

        <div class="dotted-line"></div>



        <div class="dotted-line"></div>
        <a href="./page-4.html">
      <button class="back">BACK</button></a>
      <a href="./page-6.html">
      <button class="save">SAVE & NEXT</button> </a>



    </div>
    
</body>
</html>
