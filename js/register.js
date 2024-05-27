
const form = document.querySelector('.form form'),
        submitbtn= form.querySelector('.submit button'),
        errortxt= form.querySelector('.error-text');

form.onsubmit = (e)=>{
    e.preventDeafault();
};

submitbtn.onclick = () =>{
    
    let xhr =new XMLHttpRequesst();
    xhr.open("POST","./Php/otp.php" ,true);
    xhr.onload =() =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data =xhr.response;
                if(data === "success"){
                    location.href="./Admin.php";
                }
                else{
                    errortxt.textContent=data;
                    errortxt.style.display = "block";
                }
            }
        }    
    };
    let formData=new formData(form);
    xhr.send(formData);
};





function send(){
    const email = document.getElementById('email');

let otp=Math.floor(Math.random()*10000);

let emailbody='<h1>Your otp code is:</h1>${otp}';

    Email.send({
        SecureToken :"aeef7ee8-4d5e-9e8c-b42923bfd3e5",
        To:  email.value,
        From:"CNHSAdmin@gmail.com", 
        Subject:"From CNHS Admin",
        Body: emailbody
    

    }).then(message=> {

        if (message==="OK") {
         alert("OTP sent tou your email"+email);

         windows.location.assign("location: ../Verify.php");
     }
    });
}