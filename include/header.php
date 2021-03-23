

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  


  <title>CodePen - Pure CSS Responsive Dropdown Menu</title>
  
  
  
  
<style>
/* CSS Document */

@import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url(https://fonts.googleapis.com/css?family=Bree+Serif);

h1 {
	font-size: 60px;
	text-align: center;
	color: #FFF;
}	

h3 {
	font-size: 30px;
	line-height: 34px;
	text-align: center;
	color: #FFF;
}

h3 a {
	color: #FFF;
}

a {
	color: #FFF;
}

h1 {
	margin-top: 100px;
	text-align:center;
	font-size:60px;
	line-height: 70px;
	font-family: 'Bree Serif', 'serif';
	}

#container {
	margin: 0 auto;
	max-width: 890px;
}

p {
	text-align: center;
}

.toggle,
[id^=drop] {
	display: none;
}

/* Giving a background-color to the nav container. */
.header_nav { 
	margin:0;
	padding: 0;
	background-color: #254441;
}

#logo {
	display: block;
	padding: 0 30px;
	float: left;
	font-size:20px;
	line-height: 60px;
}

/* Since we'll have the "ul li" "float:left"
 * we need to add a clear after the container. */

.header_nav:after {
	content:"";
	display:table;
	clear:both;
}

/* Removing padding, margin and "list-style" from the "ul",
 * and adding "position:reltive" */
.header_nav ul {
	float: right;
	padding:0;
	margin:0;
	list-style: none;
	position: relative;
	}
	
/* Positioning the navigation items inline */
.header_nav ul li {
	margin: 0px;
	display:inline-block;
	float: left;
	background-color: #254441;
	}

/* Styling the links */
.header_nav a {
	display:block;
	padding:14px 20px;	
	color:#FFF;
	font-size:17px;
	text-decoration:none;
}


.header_nav ul li ul li:hover { background: #000000; }

/* Background color change on Hover */
.header_nav a:hover { 
	background-color: #000000; 
}

/* Hide Dropdowns by Default
 * and giving it a position of absolute */
.header_nav ul ul {
	display: none;
	position: absolute; 
	/* has to be the same number as the "line-height" of "nav a" */
	top: 60px; 
}
	
/* Display Dropdowns on Hover */
.header_nav ul li:hover > ul {
	display:flex;
}
	
/* Fisrt Tier Dropdown */
.header_nav ul ul li {
	width:165px;
	float:none;
	display:inline-block;
	position: relative;
}

/* Second, Third and more Tiers	
 * We move the 2nd and 3rd etc tier dropdowns to the left
 * by the amount of the width of the first tier.
*/
.header_nav ul ul ul li {
	position: relative;
	top:-60px;
	/* has to be the same number as the "width" of "nav ul ul li" */ 
	left:170px; 
}

	
/* Change ' +' in order to change the Dropdown symbol */
li > a:after { content:  ' +'; }
li > a:only-child:after { content: ''; }


/* Media Queries
--------------------------------------------- */

@media all and (max-width : 768px) {

	#logo {
		display: block;
		padding: 0;
		width: 100%;
		text-align: center;
		float: none;
	}

	.header_nav {
		margin: 0;
	}

	/* Hide the navigation menu by default */
	/* Also hide the  */
	.toggle + a,
	.menu {
		display: none;
	}

	/* Stylinf the toggle lable */
	.toggle {
		display: block;
		background-color: #254441;
		padding:14px 20px;	
		color:#FFF;
		font-size:17px;
		text-decoration:none;
		border:none;
	}

	.toggle:hover {
		background-color: #000000;
	}

	/* Display Dropdown when clicked on Parent Lable */
	[id^=drop]:checked + ul {
		display: block;
	}

	/* Change menu item's width to 100% */
	.header_nav ul li {
		display: block;
		width: 100%;
		}

	.header_nav ul ul .toggle,
	.header_nav ul ul a {
		padding: 0 40px;
	}

	.header_nav ul ul ul a {
		padding: 0 80px;
	}

	.header_nav a:hover,
 	.header_nav ul ul ul a {
		background-color: #000000;
	}
  
	.header_nav ul li ul li .toggle,
	.header_nav ul ul a,
  .header_nav ul ul ul a{
		padding:14px 20px;	
		color:#FFF;
		font-size:17px; 
	}
  
  
	.header_nav ul li ul li .toggle,
	.header_nav ul ul a {
		background-color: #212121; 
	}

	/* Hide Dropdowns by Default */
	.header_nav ul ul {
		float: none;
		position:static;
		color: #ffffff;
		/* has to be the same number as the "line-height" of "nav a" */
	}
		
	/* Hide menus on hover */
	.header_nav ul ul li:hover > ul,
	.header_nav ul li:hover > ul {
		display: none;
	}
		
	/* Fisrt Tier Dropdown */
	.header_nav ul ul li {
		display: block;
		width: 100%;
	}

	.header_nav ul ul ul li {
		position: static;
		/* has to be the same number as the "width" of "nav ul ul li" */ 

	}

}

@media all and (max-width : 330px) {

	.header_nav ul li {
		display:block;
		width: 94%;
	}

}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <nav class="header_nav">
        <div id="logo">Your Logo here</div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">WordPress +</label>
                    <a href="#">WordPress</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="#">Themes and stuff</a></li>
                        <li><a href="#">Plugins</a></li>
                        <li><a href="#">Tutorials</a></li>
                    </ul> 

                </li>
                <li>

                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Web Design +</label>
                <a href="#">Web Design</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Links</a></li>
                    <li>
                       
                    <!-- Second Tier Drop Down -->        
                    <label for="drop-3" class="toggle">Tutorials +</label>
                    <a href="#">Tutorials</a>         
                    <input type="checkbox" id="drop-3"/>

                    <ul>
                        <li><a href="#">HTML/CSS</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                    </li>
                </ul>
                </li>
                <li><a href="#">Graphic Design</a></li>
                <li><a href="#">Inspiration</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>


  
  
  

</body>

</html>
 
