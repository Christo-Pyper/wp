/* Insert your javascript here */


function autoFill(){
  document.getElementById("email").setAttribute('value', localStorage.getItem('email'));
  document.getElementById("name").setAttribute('value', localStorage.getItem('name'));
  document.getElementById("mobile").setAttribute('value', localStorage.getItem('mobile'));
}

function saveDetails(){
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var mobile = document.getElementById('mobile');

  localStorage.setItem('name', name.value);
  localStorage.setItem('email', email.value);
  localStorage.setItem('mobile', mobile.value);
}

function deleteDetails(){
  localStorage.clear();
}

function changeButton(){
  if(document.getElementById("remember").value === "Remember Me"){
    document.getElementById("remember").setAttribute('value', "Forget");
    saveDetails();
  }else{
    document.getElementById("remember").setAttribute('value', "Remember Me");
    deleteDetails();
  }
}
