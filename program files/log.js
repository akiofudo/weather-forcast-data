
//from1
function logfun(){
    var email=document.forms["form1"]["email"].value;
    var password=document.forms["form1"]["password"].value;

if (email==null || email=="") {
    document.getElementById("errormess").innerHTML = "enter the email";
     return false;

}
if (password==null || password=="") {
    document.getElementById("errormess").innerHTML = "enter the password";
     return false;
}



}
//form2
function sigfun(){
    var email=document.forms["form2"]["email"].value;
    var uname=document.forms["form2"]["uname"].value;
    var password=document.forms["form2"]["password"].value;

if (email==null || email=="") {
    document.getElementById("errors").innerHTML = "enter the email";
     return false;

}
if (uname==null || uname=="") {
    document.getElementById("errors").innerHTML = "enter the username";
     return false;

}
if (password==null || password=="") {
    document.getElementById("errors").innerHTML = "enter the password";
     return false;

}
if (email !="" && uname!="" && password !="") {
    alert("signin  is successfull");
}

}

//form3
function forfun(){
    var newpassword=document.forms["form3"]["newpassword"].value;
    var conpassword=document.forms["form3"]["conpassword"].value;

if (newpassword==null || newpassword=="") {
    document.getElementById("error").innerHTML = "enter the newpassword";
     return false;

}
if (conpassword==null || conpassword=="") {
    document.getElementById("error").innerHTML = "enter the conpassword";
     return false;

}
if (newpassword !="" && conpassword !="") {
    alert("password changed successfully");
}

}
