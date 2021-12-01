<?php 
session_start();
?>
<html>

<head>


<link rel ="stylesheet" href = "css/tharinducss1/nhometharindu.css">

<style>
 .mySlides {
        display: none
		
		
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 800px;
        position: relative;
        margin: auto;
		align :center;
		top: 0px;
		left :40%;
      }
h1 {
    color: #ffffff;
}
h1 {
    color: #000000;
}
</style>

<title> Teens Got Talent </title>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body background="web images/background2.jpg">
<div class="topic">

  <img src="web images/star.png" alt="Snow" style="width:15%">
  <h1 class="heading" style="color:white"> &nbsp; &nbsp; &nbsp; &nbsp; TEENS GOT TALENT&nbsp; </h1>
  <button class = "rbutto"> <a href = "logout.php"> logout </button>
  
  <a href ="useraccountdetails.php">
  <img src ="lady.png "  width ="50" height = "50" class ="rbutto2"> </a>
  
  </div>
  
  <hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="News Loged.php"class="active">News</a>
  <a  href="homepage after login.php">Home</a>
  <a href="voting page.php">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php">Highlights</a>
  <a href="contact-us-logged-in.php">Contact us</a>
  <a href="Terms and ConditionsLogin.php">Terms and conditions</a>
</div>





		
<div  align="center" class="vertical-menu">
		
  <video width="100%" height="20%" controls>
  
  <source src="web images/final.mp4" type="video/mp4">
  
  <source src="web images/final.ogg" type="video/ogg">
  
</video>

</br> </br>

</br></br>
<a href="results.php">View Results</a>
 <a href="schedule after login.php">Schedule</a> 
 <a href="how to vote.php">How to Vote</a>
 <a href="Image gallery loged.php">Image Gallery</a>
 <a href="previousvideos.php">Previous Videos</a></div>

<table border="0.1" width="88%" height="60%">
  <tr>
     <td width="10%" height="8%" align="center" style="color:blue;font-size:25px;"><a href="Headline loged.php">
    <img src="web images/high top.jpg" onmouseover="this.src='web images/high top.jpg' ;" onmouseout="this.src='web images/si.jpg'  ;" width="190" height="386" />
    </a>
    <td><center>
      <p>      
      <blockquote>
        <blockquote>
          <h1><em><a href="Headline loged.php">HEADLINE</a></em></h1>
        </blockquote>
      </blockquote>
      </p>
      <a href="#"></a><video width="720" height="400" controls><a href="#"></a>
  
  <source src="web images/final.mp4" type="video/mp4">
  
  <source src="web images/final.ogg" type="video/ogg"><a href="#"></a>
    </center></td>
    <td align="right" style="color:red;font-size:25px;"><table width="237" height="303" border='1' align=right cellpadding='2' cellspacing='1'  bordercolor='#bee5eb' class="active">
      <tr>
        <td><body >
		
	<center>
		
	<div  class="calendar"  >
	<p id="monthName"></p>
	<p id="dayName"</p>
	<p id="dayNumber"</p>
	<p id="year"</p>
	<style> *{
	margin: 0;
	padding: 0;
	box-sizing:border-box;
	font-family: 'Poppins',sans-serif;
	
}
body
{
	display: flex;
	justifly-content:center;
	align-items: center;
	min-height: 100vh;
	background: #111;
	background-size: cover;
	background-position: center;
}</style>	
		
	</div>
	<script>
		const lang= navigator.language;
		let date = new Date();
		
		
		
		let dayNumber =date.getDate();
		let month=date.getMonth();
		let dayName=date.toLocaleDateString(lang,{weekday:'long'})
		let monthName=date.toLocaleDateString(lang,{month:'long'})
		let year =date.getFullYear();
		
		document.getElementById('monthName').innerHTML=monthName;
		document.getElementById('dayName').innerHTML=dayName;
		document.getElementById('dayNumber').innerHTML=dayNumber;
		document.getElementById('year').innerHTML=year;
	</script>
			</center></td>
      </tr>
    </table></td>
  </tr>
  <tr></tr>
    </td>
  
    </tr>
  
  <tr></tr>
  <tr>
   <tr>
    <td width="10%" height="8%" align="center" style="color:red;font-size:25px;">    <a href="Headline loged.php">
    <img src="web images/le.jpg"
       onmouseover="this.src='web images/mic.jpg' ;"
       onmouseout="this.src='web images/le.jpg'  ;" alt=""width="190" height="200"  >
    </img  ></a>          </td>
     <td align="center" style="color:red;font-size:25px;">    <a href="Headline loged.php">
    <img src="web images/wide.jpg"
       onmouseover="this.src='web images/ulo.jpg' ;"
       onmouseout="this.src='web images/wide.jpg'  ;"    alt="" width="730" height="180"  /></a></td>

    <td  align="center" style="color:red;font-size:25px;">    <a href="Headline loged.php">
    <img src="web images/under top.jpg"
       onmouseover="this.src='web images/ri.jpg' ;"
       onmouseout="this.src='web images/under top.jpg'  ;"    alt="" width="220" height="240"  /></a>
		
      <center>
        <a href="#"></a><a href="#"></a>
    </center></td>
</table>
<div> </div>

<footer  height = "50">
	<a href="www.facebook.com"> <img src = "web images/facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="www.twitter.com"><img src = "web images/twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="www.instagram.com"><img src = "web images/instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides">
  
        <img src="web images/coke.jpg" width = "272" height = "80" >
       
      </div>
      <div class="mySlides">
       
   <img src="web images/mac.jpg"width = "272" height = "80">
        
      </div>
</footer>
<script src="slide.js"></script>

</body>
