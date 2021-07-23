@include('layouts.navbar')
@include('layouts.about')

@include('layouts.footer')

<style >

#btn-abt {
    border-bottom: none;

}

#about {
	background-color: #f4f4f4;
	padding: 80px 0px;
}

#about .section-heading {
	margin-bottom: 60px;
}

.service-item {
	cursor: pointer;
	background-color: #fff;
	text-align: center;
	padding: 30px 20px;
	transition: all 0.7s;
	box-shadow: 0px 0px 15px #cdcdcd;
}

.service-item:hover {
	background-color: #249ad4;
}

.service-item h4 {
	font-size: 16px;
	font-weight: 700;
	letter-spacing: 0.5px;
	margin-bottom: 15px;
	margin-top: 25px;
}

.service-item:hover h4 {
	color: #fff;
}

.service-item:hover p {
	color: #fff;
}

.first-service .icon {
	height: 32px;
	width: 32px;
	display: inline-block;
    color: black;
}



.second-service .icon {
	height: 32px;
	width: 22px;
	display: inline-block;
}


.third-service .icon {
	height: 32px;
	width: 32px;
	display: inline-block;
}


.fourth-service .icon {
	height: 32px;
	width: 32px;
	display: inline-block;
}

#what-we-do {
	background-image: url('https://images.unsplash.com/photo-1487875961445-47a00398c267?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
	width: 100%;
	background-size: cover;
	background-repeat: no-repeat;
	padding: 80px 0px;
    background-position: center;

	color: #fff;
}

#what-we-do .right-image img {
	width: 100%;
	overflow: hidden;
}

#what-we-do h4 {
	font-size: 24px;
	font-weight: 700;
	letter-spacing: 0.5px;
	line-height: 30px;
	margin-bottom: 25px;
}

#what-we-do p {
	margin-bottom: 30px;
	color: #fff;
}

#what-we-do ul li {
	display: inline-block;
	margin-right: 15px;
	margin-bottom: 15px;
}



</style>
