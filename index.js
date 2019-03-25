// var submitBtn = document.getElementById("submitBtn");

function submitClick(){
	var firebaseRef = firebase.database();
	var inputNickname = document.getElementById("inputNickname").value;
	var checkNick = firebase.database().ref("users");

	checkNick.once("value")
	.then(function(snapshot){
		if(snapshot.hasChild(inputNickname)){
			// window.location.href = "main_quiz1.php"
		}
		else{
			firebaseRef.ref('users/'+inputNickname).set({
			quiz1 : '',
			quiz2 : '',
			quiz3 : '',
			quiz4 : '',
			quiz5 : '',
			quiz6 : '',
			quiz7 : '',
			quiz8 : ''
			},function(error){
				if(error){
					// window.alert("Error");
				}
				else{
					// window.alert("Success");
					// window.location.href = "main_quiz1.php";
					
				}
			});
		}
	});
	// if(){

	// }

	// checkNick.once(inputNickname,function(snapshot){
	// 	if(snapshot.exists()){
	// 		alert('exists');
	// 	}
	// 	else{
	// 		
	// 	}
	// });

	// window.alert(inputNickname);
	// window.alert("asd");
	// return true;
}

// function writeUserData(userId, name, email, imageUrl) {
//   firebase.database().ref('users/' + userId).set({
//     username: name,
//     email: email,
//     profile_picture : imageUrl
//   });
// }