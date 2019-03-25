<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="jquery-1.9.1.js"></script>
  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>. -->
	<link rel="stylesheet" href="style.css">
 
</head>
<body>
	<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
	<script>
		  // Initialize Firebase
		  var config = {
		    apiKey: "AIzaSyCspIDJz-M82jCFShayNGfIpXFyrlz9ry4",
		    authDomain: "quizbca.firebaseapp.com",
		    databaseURL: "https://quizbca.firebaseio.com",
		    projectId: "quizbca",
		    storageBucket: "quizbca.appspot.com",
		    messagingSenderId: "110288190354"
		  };
		  firebase.initializeApp(config);
	</script>

	<script src="index.js"></script>

	<script>
		// function submitClick(){
		// 	var firebaseRef = firebase.database();
		// 	var inputNickname = document.getElementById("inputNickname").value;
		// 	var checkNick = firebase.database().ref("users");

		// 	checkNick.once("value")
		// 	.then(function(snapshot){
		// 		if(snapshot.hasChild(inputNickname)){
		// 			// window.location.href = "main_quiz1.php"
		// 		}
		// 		else{
		// 			firebaseRef.ref('users/'+inputNickname).set({
		// 			quiz1 : '',
		// 			quiz2 : '',
		// 			quiz3 : '',
		// 			quiz4 : '',
		// 			quiz5 : '',
		// 			quiz6 : '',
		// 			quiz7 : '',
		// 			quiz8 : ''
		// 			},function(error){
		// 				if(error){
		// 					// window.alert("Error");
		// 				}
		// 				else{
		// 					// window.alert("Success");
		// 					// window.location.href = "main_quiz1.php";
		// 				}
		// 			});
		// 		}
		// 	});

			// window.alert(inputNickname);
			// window.alert("asd");
			// return true;
		// }

		// function writeUserData(userId, name, email, imageUrl) {
		//   firebase.database().ref('users/' + userId).set({
		//     username: name,
		//     email: email,
		//     profile_picture : imageUrl
		//   });
		// }

	</script>
	
	<div class="container">
		<h1>Quiz Bca</h1>
		<form onsubmit="return submitClick();" method="POST" action="#" >	
			<div class="nickbox">
				<input type="text" id="inputNickname" placeholder="masukan nickname" name="nickname" required> <br>
			</div>
			<input id="btn" type="submit" value="submit">
		</form>
		
	</div>
</body>
</html>