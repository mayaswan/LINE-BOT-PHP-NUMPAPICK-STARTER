<!DOCTYPE html>
<html lang="en">
<head>
  <title>@BaanPakr</title>
  <meta charset="utf-8"> 
</head>
<body>

<h1 id="bigOne"></h1>

<script src="https://www.gstatic.com/firebasejs/5.9.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBQPtYMWRKqohvVp3Rx_utju2qotiYJxjQ",
    authDomain: "webapp-bf8f5.firebaseapp.com",
    databaseURL: "https://webapp-bf8f5.firebaseio.com",
    projectId: "webapp-bf8f5",
    storageBucket: "webapp-bf8f5.appspot.com",
    messagingSenderId: "995463764163"
  };
  firebase.initializeApp(config);
  var bigOne = document.getElemrntById('bigOne');
  var dbRef = firebase.database().ref().child('text');
  dbRef.on('value',snap => bigOne.innerText = snap.val());
</script>


</body>
</html>
