//toggle cpassword
	function Show() {
		var x = document.getElementsByName("password1")[0];
		if (x.type === "password") {x.type = "text";}
		else {x.type = "password";}
		}

//match cpassword
function cp()
{
  var a=document.getElementsByName('password')[0].value;
  var b=document.getElementsByName('password1')[0].value;
  if ( a==b) {document.getElementsByName('password1')[0].style.color = 'green';}
  else {document.getElementsByName('password1')[0].style.color = 'red';}
}

//email only for gmail & yahoo
function mail(event)
{
  var str=document.getElementsByName("email")[0].value;
  var x=event.which||event.keycode;
  if(x==110||x==190)
   {
     if(str.slice(str.length-6)=='gmail.'||str.slice(str.length-6)=='yahoo.')
     {document.getElementsByName("email")[0].value=str+'com';}
      else{alert('gmail & yahoo mail accounts only')}
    }
  }

function val(event) {
	var str = document.getElementsByName("name")[0].value;
  var x=event.which||event.keycode;
    if (x==8 || x==9||x==16||x==20||x>=32 && x<=34||x>=37 && x<=40||x==45||x==46||x>=65 && x<=90||x>=96 && x<=105||x==110)
    {document.getElementsByName("name")[0].value=str.trim().charAt(0).toUpperCase()+str.slice(1);}
    else
    {alert('Only alphabets are allowed');
    if(str.length==1){
        document.getElementsByName("name")[0].value="";}
      else{
    document.getElementsByName("name")[0].value=str.trim().charAt(0).toUpperCase()+str.slice(1,str.length-1);}
    }
	}
	//form validation
	function abc(){
		var name=document.getElementsByName('name')[0].value;
		var email=document.getElementsByName('email')[0].value;
		var password=document.getElementsByName('password')[0].value;
	  var confirmpass=document.getElementsByName('password1')[0].value;
		var pattern=/^[A-Za-z ]+$/;
		if(pattern.test(name))	{
				if(email.trim().slice(email.length-10)=='@gmail.com'||email.trim().slice(email.length-10)=='@yahoo.com'){
								if(password.trim()==confirmpass.trim()){return true;}
								else {alert("Passwords Doesn't Match");return false;}
							}
				else {alert("Email Should Be Gmail or Yahoo");return false;}
		}
		else {alert("Name Should Contain Alphabets only");return false;}
	}


//register pop & close
function rpop() { document.getElementById("register").style.display = "block"; }
function rclose() { document.getElementById("register").style.display = "none"; }

//login pop & close
function lpop() { document.getElementById("login").style.display = "block"; }
function lclose() { document.getElementById("login").style.display = "none"; }
