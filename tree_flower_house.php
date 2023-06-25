<?php 

 //Start of Header Section
 
// Page Header/Banner 

$header = '<div id="header">
				<div id="banner">
				<h1>A Pilates and Barre Studio</h1>
				<h2>Strengthening Mind and Body</h2>
				</div>
				</div>
				
				';
echo $header;

// Navigation 
$navigation = '<div id="navigation">
				<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="classes.php">Classes</a></li>
				<li><a href="instructors.php">Instructors</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				</ul>
				</div>
				';
echo $navigation;


// Main Content Area
$main = '<div id="main">
		<h2>Welcome to A Pilates and Barre Studio!</h2>
		<p>Our classes combine elements of both Pilates and Barre exercise while
			also focusing on core conditioning. Our instructors are highly
			experienced and can tailor each class to meet the needs of our
			students. All levels of fitness and ability are welcome in our
			classes. Come and give us a try!</p>
		</div>';
echo $main;

// Side Bar 
$sidebar = '<div id="sidebar">
			<h3>Class Schedule:</h3>
			<ul>
			<li>Monday: 7:00pm - 8:15pm</li>
			<li>Wednesday: 5:00pm - 6:15pm</li>
			<li>Friday: 4:00pm - 5:15pm</li>
			</ul>
			</div>';
echo $sidebar;

// Footer
$footer = '<div id="footer">
			Copyright &copy; A Pilates and Barre Studio.
			</div>';
echo $footer;

?>