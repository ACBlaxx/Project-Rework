function validate(){
	var name=document.myform.name.value;
	var email=document.myform.email.value;

	if(name==""){
		alert("Please fill in the name");
	}

	if(email==""){
		alert("Please fill in the email");
	}

}