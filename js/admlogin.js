	function log(){
var username=(document.getElementById("username").value);
var password=(document.getElementById("password").value);
		var noa=1;
	if(username=="adm" && password=="adm"){
		alert("Login Successful");
		window.location="dashboard.php";
		
	}
		else{
			noa--;
			alert("Incorrect Details");
			alert("Refresh Page");
		}
	if(noa==0){
		
		document.getElementById("password").disabled=true;
		document.getElementById("username").disabled=true;
		
	}
	
	
	
	}
	