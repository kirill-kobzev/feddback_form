<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <script type="text/javascript" src="js/vue.js"></script>
</head>
<body>
<div id="app">
	<header>
		<img src="img/logo.svg" class="logo-ma">
		
<!-- 		<div class="menu"> -->
			<img src="img/man.svg" class="logo-man" v-on:click="menuVisible">
			<ul v-if="this.menuflag==true">
				<a href="profile.html">
				<li>Профиль</li>
				</a>
				<li>Выйти</li>
			</ul>
<!-- 		</div> -->
	</header>
	<div class="main">
		<div class="col1"></div>
		<div class="col2"></div>
		<div class="col3"></div>
	</div>
	<footer></footer>
</div>
</body>
<script>
	let vueApp = new Vue({
		el: '#app',
		data:{
			menuflag: false,
		},
		methods:{
			menuVisible: function(){
				console.log('qwe');
				this.menuflag = !this.menuflag;
			}
		}
	})
</script>
</html>

body{
	margin: 0px;
	/*background-image: linear-gradient(65.68358490396565deg, rgba(248, 198, 215,1) 6.7859375%,rgba(164, 227, 245,1) 95.72343749999999%);*/
	/*background-image:linear-gradient(111.51067342624901deg, rgba(236, 236, 236,1) 5.4125%,rgba(190, 228, 250,1) 96.9125%);*/
}

header{
	width: auto;
	height: 10vh;
	display: flex;
	justify-content: space-between;
	/*background-image:linear-gradient(111.51067342624901deg, rgba(236, 236, 236,1) 5.4125%,rgba(190, 228, 250,1) 96.9125%);*/


}

footer{
	width: auto;
	height:10vh;
	background-color: #4663AE;
}

.main{
/*	width: 1000px;
	height: 600px;*/
	margin: 0 auto;
	min-height: calc(100vh - 20vh);
	border-radius: 15px;
	background-color: white;
	display: flex;
}

.title-profile{
	margin: 0 auto;
	font-family: Open Sans,Helvetica,Arial,sans-serif;
	font-size: 28px;
/*	font-weight: 400;
	font-size: 32px;*/
	/*font-weight: 400;*/
	margin-left: 15px;
	color: #4663AE;
}

.logo-ma{
	width: 200px;
	margin-left: 40px;
	margin-top: 25px;
}

.logo-man{
	width: 50px;
	margin-right: 170px;
	margin-top: 25px;
	cursor: pointer;
}

ul{
	margin: 0;
	padding: 0;
	top: 80px;
	right: 80px;
	position: fixed;
	/*display: none;*/
}
li{
	display: block;
	width: 200px;
	height: 30px;
	background: #4663AE;
	cursor: pointer;
	color: white;
	padding: 0 20px;
	line-height: 30px;
	font-family: Open Sans,Helvetica,Arial,sans-serif;
	font-size: 14px;
	font-weight: 400;
	border: 1px solid #ebeef5;
	border-radius: 4px;
	box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);

}

li:hover{
	background: #89D73E;
}

a{
	text-decoration: none;
}

.block-profile{

/*	width: 1000px;
	height: 300px;
	border: 1px solid grey;*/
	margin-top: 20px; 
	height: 75vh;
	border-top: 2px solid #003b93;
	width: 96%;
	margin: auto;
	/*border-radius: 3px;*/
}

