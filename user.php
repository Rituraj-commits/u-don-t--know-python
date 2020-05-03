<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="newstyle.css"

<meta name="viewport" content="device=device-width initial-scale=1.0">
<title>Birth Calculator</title>


</head>
<body>

<?php
    require 'header.php';
?>
<div id="user_image">
<h1 style="text-align: center"><i>Birth Calculator</i></h1>
<form>
  <div class="row">
    <div class="col-xs-4">
        <input  id="date" placeholder="Date" max="31"  min="1">
    </div>
    <div class="col-xs-4">
        <input  id="month" placeholder="Month" max="11" min="0" >
    </div>
      <div class="col-xs-4">
          <input id="year"  placeholder="Year" max="2020" >
    </div>
  </div>
</form>
<br>
<br>

<p style="text-align: center" id='click'>Click to calculate the time elapsed since your birth</p>


     
     
<div class="abc">       
<button ype="button" class="btn btn-primary" onclick="document.getElementById('click').innerhtml=Birth()">Click</button>
</div>
</div>
        


<script>

function Birth(){
    
    var m=document.getElementById("month").value;
     var y=document.getElementById("year").value;
      var d=document.getElementById("date").value;
     
   if(!m || !y ||!d){
       alert("Oops something went wrong!!");
   }
   else if(isNaN(m)){
       alert("Not a number");
   }
   else if(isNaN(y)){
       alert("Not a number");
   }
    else if(isNaN(d)){
       alert("Not a number");
   }
    else if(d<=0 || d>31){
       alert("Input Wrong!!");
   }
     else if(m<1 || m>12){
       alert("Input Wrong!!");
   }
    else if(y>2020){
       alert("Input Wrong!!");
   }
   else{
    var present=new Date();
    var past=new Date();
    past.setFullYear(y,m,d);
    
    function seconds(){
    var diff=present-past;
    
    diff/=1000;
    console.log(diff);
    document.write(diff+" seconds");
    
    }


    function hours(){
    var diff=present-past;
   
    
    diff/=3600000;
    console.log(diff);
    document.write(diff+" hours<br>or<br>");
    }


    function days(){
    var diff=present-past;
    
    diff/=86400000;
    console.log(diff);
    document.write(diff+" days<br>or<br>");
    }


    function months(){
    var diff=present-past;
   
    
    diff/=2678400000;
    month=Math.round(diff);
    console.log(diff);
    document.write(month+" months<br>or<br>");
    }


    function years(){
    var diff=present-past;
    
    
    diff/=32140800000;
    year=Math.round(diff);
    console.log(diff);
    document.write(year+" years<br>or<br>");
    }


   
     alert("Computed Data are relative to your timezones")
     years();
     months();
     days();
     hours();
     seconds();
 }
 }
 



</script>



</body>
</html>
