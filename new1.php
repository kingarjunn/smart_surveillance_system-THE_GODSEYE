<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: new1.php");
}

?>



<!DOCTYPE html>
<html>
<title>E4EYE</title>
<div class="bg">
<head>
    <p style="text-align:center;color:yellow">This site is on for offical use only.cookies,Internet-Protocal Address and other user informations are stored in the servers so please,dont login with out proper...............,<h3 style="color:yellow;">YOU KHOW THAT RIGHT............!</h3> </p>
    <div>
    <?php echo "<h2>Welcome " . $_SESSION['username'] . "</h2>"; ?>
</div>
    <!--<div class="image-container">
    <img src="650.png" alt="alternatetext">
    </div>-->
    <div>
    <h1 style="text-align:center;background-color: rgba(0,0,0, 0.4);">WeLcOmE to "THE GODS EYE"</h1> </div>
    <div>
    <p *class="textt" style="text-align:right;color:white">Here you can see various pictures captured by our cameras over public palces that includes pictures of People ,Objects and Licance plates of vechicles</p>
    </div>
    
</head>
<body>

<h4 class="text">Please Select the below options to view the pictures of....!</h4>

<div>
    <button onclick="myFunction()" ID="four"> PERSONS </button>
    </div>
    <div>
    <button onclick="myFunction1()"ID="five" >VECHICLES</button>
    </div>
    <div>
    <button onclick="myFunction2()"ID="five" >LIVE_FEED</button>
</div>



<div>
    <h2 style="text-align:center;color:red">God's Eye</h2>
    <p style="text-align:center;color:yellow">GOD'S EYE is an image processing technology which may/can be used to create artificial intelligence. 
        This is a promising technology that revolutionises the way of tracking object or a person. 
        To stay smart by knowing what we see and secure the world from crime we are introducing GOD'S EYE. 
        It makes use of detection, recognition and tracking techniques using OPENCV and SURF. 
        THE GOD'S EYE can be used in intelligent agencies, military and security forces. 
        This will do a quick cross check in the provided and in result gives information and relevant data as accurate as possible provided by database.</p>

</div>


    <p><h4>This Project is contributed by a team "THE4VIPERS"<h4></p>
        <p>The team include following persons,who contributed there afferts for completing the project...! </p>
        <div>
        <img src="650.png" alt="one"  style="align:center;padding:20px;">
        <h5><br>A.HEMANTH
            
            <br>hemanthabburi@gmail.com
                </h5>
        </div>
        <div>
        <img src="699.png" alt="two"  style="align:center;padding:20px;">
        <h5><br>G.PRAVEEN YADAV
            <br>g.pravven@gmail.com</h5>
        </div>
        <div>
        <img src="700.png" alt="three"  style="align:center;padding:20px;">
        <h5><br>MD.LIYAQATH
            <br>liyaqathmd@gmail.com</h5>
        </div>
        <div>
        <img src="701.png" alt="four"  style="align:center;padding:20px;">
        <h5><br>N.ARJUN
            <br>n.arjunsainath@gmail.com</h5>
        </div>


        <footer>
<button onclick="mylogout()"ID="xx">LOGOUT</button>
</footer>
</body>
</div>


<style type="text/css">
    h5,br{
        text-align:center;
        color:yellow;
    }

    diV{
        padding:15px;
    }
    button{
    background-color:#EF7C8E;
    border-radius:25px;
    padding:25px;
    border-color:#FFA384;
    width:100%;
    
    }
    /*h2{
        text-align:right;
        color:#FF0000;
        background-color:#926AA6;
        border-radius:25px;
    }*/
    h1,h2{
        text-align:right;
        color:white;
        font-family: "Lucida Console", "Courier New", monospace;
    }
    #xx{
        float:right;
        padding:10px;
        border-radius:35px;
        background-color:#EF7C8E;

        width:7%;
    }
    .text{
        color:#EFC050;
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4);
        font-family: "Lucida Console", "Courier New", monospace;
    }
    html{
        /*background: linear-gradient(to left, #ccff15 50%, #0FFF50 50%);*/
        padding:20px;
        object-fit:cover;

        /*background-image: linear-gradient(to right, #FF6F61 40%,#B565A7 30%,#34568B 30%);*/
        /*background-image: linear-gradient(to right, #696969 40%,#0A0708 30%,#3B3B3B 30%);*/
        background-image: linear-gradient(to right, #01949A 40%,#0A0708 30%,#004369 30%);
        margin:auto;
        

    }
    *{
        box-sizing:border-box;
    }
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width:15%;
    }
    body{
        display:block;
        margin:auto;
        position: relative;
        background-image: url('3540038.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width:100%;
        min-width:900x;
        height:auto;
        

    }
    p,h4{
        color:red;
        font-family: "Lucida Console", "Courier New", monospace;
    }
    p{
        color:red;
        font-family: "Lucida Console", "Courier New", monospace;
    }



</style>






<script>
function myFunction() {
  location.replace("welcome.php")
}
function myFunction1() {
  location.replace("welcome1.php")
}
function myFunction2() {
  location.replace("video.html")
}
function mylogout() {
  location.replace("logout.php")
}

</script>


</html>