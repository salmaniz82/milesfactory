<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Milesfactory Search Result page</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/build.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>
<body class="bg-grey-light">
<header class="bg-white">
	<div class="header_inner max-w-5xl mx-auto py-10 d-flex justify-space-between">
	<div id="logo flex-basis-1/4">
		<a href="#">
			<img src="images/milesfactory_logo.png" alt="">
		</a>
	</div>

	<div class="menu-right flex-basis-3/4 d-flex justify-end">
		<div class="icons_wrapper d-flex align-center">
			<a href="#"><img src="images/icons/bell_icon.jpg" alt=""><span>Nofification</span></a>
			<a href="#"><img src="images/icons/globe_icon.jpg" alt=""><span>Language</span></a>
			<a href="#"><img src="images/icons/login_icon.jpg" alt=""><span>Login</span></a>
			<a href="#"><img src="images/icons/register_icon.jpg" alt=""><span>Sign up</span></a>
		</div>
	</div>
	</div>
</header>



<section id="search_parmeters" class="max-w-4xl mx-auto mt-20 floatable">

	<div class="fields justify-center">

		<div class="field_wrap flex-basis-1/4">
			<input type="text" value="Dubai (DXB)" class="form_field">
			<span class="field_label">Where From ?</span>
		</div>

		<div class="field_wrap flex-basis-1/4">
			<input type="text" value="Karachi (KHI)" class="form_field">
			<span class="field_label">Where To ?</span>
		</div>

		<div class="field_wrap flex-basis-30">
			<input type="text" value="12 Apr - 22 Apr" class="form_field">
			<span class="field_label">Dates</span>
		</div>

		<div class="field_wrap flex-basis-20">
			<select name="no_travelrs" value="1 Adult ECO" class="form_field">
				<option value="1 Adult ECO">1 Adult ECO</option>
				<option value="2 Adult ECO">1 Adult ECO</option>
				<option value="3 Adult ECO">1 Adult ECO</option>
				<option value="4 Adult ECO">1 Adult ECO</option>
				<option value="5 Adult ECO">1 Adult ECO</option>
			</select>

		<span class="field_label">Travelers</span>
			
		</div>

	</div>


	<div class="filters d-flex gap-10 pt-5 justify-center">


		<div class="filter-item">checked bagage included</div>
		<div class="filter-item">layovers < 3hrs</div>
		<div class="filter-item">directs</div>
		<div class="filter-item">Ecological</div>
		<div class="filter-item">All filters</div>

		
	</div>



</section>


<section class="bg-blue search-page-body mt-50 pt-50">


	<div class="search_inner max-w-5xl mx-auto">


	<div class="search_status bg-white d-flex justify-space-between p-10 mb-50">
		<p class="t-sm">The results are not good? <a href="#" class="static">Tell us!</a></p>
		<a href="#" id="search_status_close"> <img src="images/close_blue.png" alt=""></a>
	</div>


	<div class="row">

		<div class="col">one</div>
		<div class="col">one</div>
		<div class="col">one</div>
		
	</div>


	<div class="search_items row gap-10 mb-50">

		<?php for ($i=0; $i<= 2; $i++) : ?>


			<div class="search_item col bg-white py-20">
      <div class="item_inner px-30 py-10">


         <div class="depart d-flex flex-wrap justify-space-between pb-20 divider">
            <div class="flex-basis-1 item_header t-blue-light t-sm pb-20">Depart</div>
            <div class="airline_logo">
               <img src="images/airline-logo.png" alt="">
            </div>
            <div class="item_detail">
               <div class="timings">4:45 AM - 10:00 AM</div>
               <div class="flight_routes t-xs">
                  <span>CDJ</span>
                  <span class="t-red">JED</span>
                  <span>CDJ</span>
               </div>
            </div>
            <div class="item_meta t-sm">
               <p class="mb-0">14h10m</p>
               <p class="t-red">1 stop</p>
            </div>
         </div>
         <div class="return d-flex flex-wrap justify-space-between py-20 divider">
            <div class="flex-basis-1 item_header t-blue-light t-sm pb-20">Return</div>
            <div class="airline_logo">
               <img src="images/airline-logo.png" alt="">
            </div>
            <div class="item_detail">
               <div class="timings">4:45 AM - 10:00 AM</div>
               <div class="flight_routes t-xs">
                  <span>CDJ</span>
                  <span class="t-red">JED</span>
                  <span>CDJ</span>
               </div>
            </div>
            <div class="item_meta t-sm">
               <p class="mb-0">14h10m</p>
               <p class="t-red">1 stop</p>
            </div>
         </div>
         <div class="rates d-flex justify-space-between align-center pt-20">
            <div class="price_indicator">
               <img src="images/usd_circle.png" alt="">
               <span>Cheapest</span>
            </div>
            <div class="price t-blue-trans">
               <span class="amount t-lg">$534</span> 
               <span> / per</span>
            </div>
         </div>
      </div>
      <!-- items inner -->
   </div>
   <!-- search item -->



	<?php endfor; ?>

		<!-- end here.. -->
		
	</div>


	<div class="row justify-center">

		<div class="col-4 t-center">
			<div class="_btn t-white t-center bg-green d-block max-w-tiny mx-auto">more tickets</div>		
		</div>
		
	</div>

		
	</div>


	

</section>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>