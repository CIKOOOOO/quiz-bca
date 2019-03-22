<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
</head>
<body>

	<div class="mainDiv" align="right">
		<h1>Firebase Web App</h1>
		<input type="text" name="" id="inputNickname" placeholder="Input Nickname">
		<button id="submitBtn" onclick="submitClick()"><i class="fa fa-arrow-right" aria-hidden="true">Button</i></button>
	</div>


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
</body>
</html>