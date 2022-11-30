// js code for bootstrap animated toggle
document.querySelector(".first-button").addEventListener("click", function () {
    document.querySelector(".animated-icon1").classList.toggle("open");
  });
  //
  
  // form validation for registration
  var firstName = document.getElementById("fname");
  var lastName = document.getElementById("lname");
  var userName = document.getElementById("username");
  var phoneNumber = document.getElementById("phone");
  var password = document.getElementById("password");
  var cpassword = document.getElementById("cpassword");
  var showErr = document.getElementById("err");
  var form = document.getElementById("form");
  
  // apply function on submit
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    checkInputs();
  });
  
  // checking input feilds
  function checkInputs() {
    const userNameValue = userName.value.trim();
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const phoneNumberValue = phoneNumber.value.trim();
    const passwordValue = password.value.trim();
    const cpasswordValue = cpassword.value.trim();
    const passw=  new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    const uservalid = /^[0-9a-zA-Z]+$/;
  
    if (firstNameValue === "" || firstNameValue.length < 1) {
      setErrorFor(firstName, "first name cannot be blank");
    } else {
      setSuccessFor(firstName);
    }
//
  
    if (lastNameValue === "") {
      setErrorFor(lastName, "last name cannot be blank");
    } else {
      setSuccessFor(lastName);
    }
//   
    if (phoneNumberValue === "") {
      setErrorFor(phoneNumber, "phone name cannot be blank");
    }else if(phoneNumberValue.length<11){ 
        setErrorFor(phoneNumber,"phone number shoud be 11 digit")
    }else if(phoneNumberValue.length >11){
      setErrorFor(phoneNumber,"phone number shoud be 11 digit")

    }
    else {
      setSuccessFor(phoneNumber);
    }
//   
    if (userNameValue === "") {
      setErrorFor(userName, "Username cannot be blank");
    } else if (userNameValue.match(uservalid)){
      setSuccessFor(userName);
    }else {
      setErrorFor(userName,"username can contain only letter and number");

    }
//   
    if (passwordValue === "") {
      setErrorFor(password, "password cannot be blank");
    }else if(passwordValue.match(passw)){
 setSuccessFor(password);
} 
    
    else {
     
 setErrorFor(password,"password must be minimum 8 characters which contain only characters, numeric digits, underscore and capital latter]")

    }
//   
    if (cpasswordValue === "") {
      setErrorFor(cpassword, "password cannot be blank");
    } else if (passwordValue !== cpasswordValue) {
      setErrorFor(cpassword, "password not matched");
    } else {
      setSuccessFor(cpassword);
    }
  }
//   set error
  function setErrorFor(input, message) {
    input.parentElement.querySelector("small").innerHTML = message;
    input.classList.remove("border-success");
  }
//  set success  
  function setSuccessFor(input) {
    input.classList.add("border-success");
    input.parentElement.querySelector("small").innerHTML = " ";
  }
  