let cnt=0;
function checkStrength()
{
    cnt++;
    
    let pass = document.getElementById("pass").value;
    let msg = document.querySelector("#msg");
    
    if (pass.length<6) {
        msg.innerHTML="Minimum 6 characters are needed";
        document.getElementById("pass").value="";
        return;
    }

    let point = 0;

    exChars = pass.length-6;
    exChars = Math.floor(exChars/2);
    point += exChars*10;

    if (/[A-Z]/.test(pass)) point+=15;
    if (/[a-z]/.test(pass)) point+=15;
    // if (/[0-9]/.test(pass)) point+=20;
    if (/[!@#$%^&*]/.test(pass)) point+=25;

    for (let i=0; i<pass.length; i++) {
        if (pass[i]>='0' && pass[i]<='9'){
            point +=20;
            break;
        }
    }

    if (point >=0 && point<31) {
        msg.innerHTML="Very Weak!"
    }

    else if (point >=31 && point<51) {
        msg.innerHTML="Weak!"
    }

    if (point >=51 && point<71) {
        msg.innerHTML="Medium!"
    }
    else if (point >=71 && point<91) {
        msg.innerHTML="Strong"
    }
    else if (point >=91 && point<100) {
        msg.innerHTML="Strong"
    }
    else if (point >= 100) {
        msg.style.color='green';
        msg.innerHTML="Perfect Password"
    }
    if (cnt>=8 && point<71) {
        msg.style.color = "red";
        msg.innerHTML="Need Practice!";
        return;
    }
    
}