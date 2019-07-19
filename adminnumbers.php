<?php
echo"<head>
<link rel='stylesheet' href='adminnumbers.css'>
</head>
<body>
<h1>Select A Number To Change It's Sound</h1>
<br>

<div class='spinner' >

    <div class='1' onmousedown='click1(this),audio(this)'>1</div>
    <div class='2' onmousedown='click1(this),audio(this)' >2</div>
    <div class='3' onmousedown='click1(this),audio(this)' >3</div>
    <div class='4' onmousedown='click1(this),audio(this)' >4</div>
    <div class='5' onmousedown='click1(this),audio(this)' >5</div>
    <div class='6' onmousedown='click1(this),audio(this)' >6</div>
    <div class='7' onmousedown='click1(this),audio(this)' >7</div>
    <div class='8' onmousedown='click1(this),audio(this)' >8</div>
    <div class='9' onmousedown='click1(this),audio(this)' >9</div>
    <div class='10' onmousedown='click1(this),audio(this)' >10</div>
    <div class='11' onmousedown='click1(this),audio(this)' >11</div>
    <div class='12' onmousedown='click1(this),audio(this)' >12</div>
    <div class='13' onmousedown='click1(this),audio(this)' >13</div>
    <div class='14' onmousedown='click1(this),audio(this)' >14</div>
    <div class='15' onmousedown='click1(this),audio(this)' >15</div>
    <div class='16' onmousedown='click1(this),audio(this)' >16</div>
    <div class='17' onmousedown='click1(this),audio(this)' >17</div>
    <div class='18' onmousedown='click1(this),audio(this)' >18</div>
    <div class='19' onmousedown='click1(this),audio(this)' >19</div>
    <div class='20' onmousedown='click1(this),audio(this)' >20</div>

</div>


<script>
var e;


function audio(r)
 {
var g=r.getAttribute('class');
e=g;
     var a=new Audio('uploadN/numbers/'+g+'.mp3');
    a.play();
}

function click1(x)
{
   x.style.animation ='sk-scaleout ease-in-out 1.5s';
   setTimeout(click2,1400,x);
}
function click2(y)
{
   y.style.animation ='none';
   setTimeout(click3,1400);
}
function click3()
{
    window.location = 'uploadN/'+e+'.html';
}
</script>"
?>
