﻿<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="style.css">
	
	<link rel="icon" href="logo32.png" type="image/png" />
	<link rel="shortcut icon" href="logo32.png" type="image/png" />
	
    <title>Oberfläche Schoolallroundsystem</title>	
	
<style>
body {
    font-family: Arial;
	}
.page-title {
	position: absolute;
	font-size: 20px;
	top: 12px;
	left: 10px;
	}
.page-title span {
	position: absolute;
	margin-left: 10px;
}
.menu {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 50px;
	/* background-color: rgb(127,0,0); */
	/*background-color: rgb(1,38,250); */
	background-color: rgb(0,109,33);
	}
.menu ul {
	float: right;
	list-style: none;
	}
.menu li {
	float: left;
	margin-right: 20px;
	}
.menu a {
	color: grey;
	text-decoration: none;
	transition: 0.5s;
	}
.menu a:hover {color: white;}
.nav {
	position: absolute;
	top: 50px;
	left: 0px;
	width: 200px;
	height: calc(100% - 49px);
	background-color: white;
	box-shadow: 10px 0px 5px #888888;
	z-index: 10;
	}
.nav ul {
	list-style: none;
	padding: 0px;
	box-shadow: 0px 2px 1px #888888;
	}
.nav li {
	width: 100%;
	height: 50px;
	transition: 0.5s;
	}
.nav li:hover {
	background-color: grey;
	}
.nav a {
	position: relative;
	left: 20px;
	text-decoration: none;
	top: 15px;
	width: 100%;
	height: 100%;
	transition: 0.5s;
	}
.nav li:hover a {color: black;}
iframe {
	position: absolute;
	top: 50px;
	right: 0px;
	width: calc(100% - 202px);
	height: calc(100% - 50px);
	border: 0px;
	}
</style>
	
</head>
<body>
	<div class="menu">
		<a href="inhalt/" target="inhalt" class="page-title">
			<img src="logo32.png"><span>Schoolallroundsystem</span>
		</a>
		<ul>
			<li><a href="inhalt/" target="inhalt">Übersicht</a></li>
			<li><a href="inhalt/" target="inhalt">Profil</a></li>
			<li><a href="inhalt/" target="inhalt">Über</a></li>
			<li><a href="inhalt/" target="inhalt">Hilfe</a></li>
			<li><a href="login.html" target="inhalt">Abmelden</a></li>
		</ul>
	</div>
	
	<div class="nav">
		<ul>
			<li><a href="inhalt/" target="inhalt">Übersicht</a></li>
		</ul>
		<ul>
			<li><a href="inhalt/vertretung.html" target="inhalt">Vertretungsplan</a></li>
			<li><a href="inhalt/noten.html" target="inhalt">Notenstand</a></li>
		</ul>
		<ul>
			<li><a href="inhalt/krankschreiben.html" target="inhalt">Krankschreiben</a></li>
			<li><a href="inhalt/" target="inhalt">Chat</a></li>
		<ul>
	</div>
	<iframe src="inhalt/vertretung.html" name="inhalt"></iframe> 
</body>
</html>