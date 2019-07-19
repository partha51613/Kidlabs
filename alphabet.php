<?php
echo"<head>
<link rel='stylesheet' href='alphabet.css'>
</head>
<body>
<br>

<div class='spinner' >

    <div class='a' onmousedown='click1(this),audio(this)'>Aa</div>
    <div class='b' onmousedown='click1(this),audio(this)' >Bb</div>
    <div class='c' onmousedown='click1(this),audio(this)' >Cc</div>
    <div class='d' onmousedown='click1(this),audio(this)' >Dd</div>
    <div class='e' onmousedown='click1(this),audio(this)' >Ee</div>
    <div class='f' onmousedown='click1(this),audio(this)' >Ff</div>
    <div class='g' onmousedown='click1(this),audio(this)' >Gg</div>
    <div class='h' onmousedown='click1(this),audio(this)' >Hh</div>
    <div class='i' onmousedown='click1(this),audio(this)' >Ii</div>
    <div class='j' onmousedown='click1(this),audio(this)' >Jj</div>
    <div class='k' onmousedown='click1(this),audio(this)' >Kk</div>
    <div class='l' onmousedown='click1(this),audio(this)' >Ll</div>
    <div class='m' onmousedown='click1(this),audio(this)' >Mm</div>
    <div class='n' onmousedown='click1(this),audio(this)' >Nn</div>
    <div class='o' onmousedown='click1(this),audio(this)' >Oo</div>
    <div class='p' onmousedown='click1(this),audio(this)' >Pp</div>
    <div class='q' onmousedown='click1(this),audio(this)' >Qq</div>
    <div class='r' onmousedown='click1(this),audio(this)' >Rr</div>
    <div class='s' onmousedown='click1(this),audio(this)' >Ss</div>
    <div class='t' onmousedown='click1(this),audio(this)' >Tt</div>
    <div class='u' onmousedown='click1(this),audio(this)' >Uu</div>
    <div class='v' onmousedown='click1(this),audio(this)' >Vv</div>
    <div class='w' onmousedown='click1(this),audio(this)' >Ww</div>
    <div class='x' onmousedown='click1(this),audio(this)' >Xx</div>
    <div class='y' onmousedown='click1(this),audio(this)' >Yy</div>
    <div class='z' onmousedown='click1(this),audio(this)' >Zz</div>
</div>
<a href='numbers.php'>Numbers</a><br>
<a href='view.php'><-Back</a><br>
<a href='index.php'>Quit</a>

<script>
var e;


function audio(r)
 {
var g=r.getAttribute('class');
     var a=new Audio('uploadA/sound/'+g+'.mp3');
    a.play();
}

function click1(x)
{	e=x;
   x.style.animation ='sk-scaleout ease-in-out 1.5s';
   setTimeout(click2,1400,x);
}
function click2(y)
{
   y.style.animation ='none';
}
</script>"
?>
