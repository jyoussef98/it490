<!DOCTYPE html>
<html>
<head>
   
   <meta charset="utf-8" />
   <meta name="keywords" content="Fruits, Vaggies, Protin, Base" />
   <title>Froothies</title>

    <link href="home.css" type="text/css" rel="stylesheet" />
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="form.css" type="text/css" rel="stylesheet" />
    
</head>

<body>
    <header>
        
        <div class="row">
      <div class="col-25">
        <label name=search>For more information: </label>
      </div>
      <div class="col-75">
        <input type="text" id="search" name="search" placeholder="Search Here..">
      </div>
    </div>
      <nav class="horizontalNavigation">
         <ul>
            <li><a href="welcome.html">Home</a></li>
            <li><a href="#">Fruits</a></li>
            <li><a href="#">Veggies</a></li>
            <li><a href="#">Protin</a></li>
            <li><a href="#">Contact Us</a></li>
            <div class="contact">
                <a href="logout.php">Logout</a>
            </div>
         </ul>
      </nav>
   </header>
    
   <section id="leftColumn">
       
       <b><h1>Choose Your Own Froothies   <button type=button id="Search" value="Search">Search</button></h1></b><br>
       
        <h2>Today's Recomandation</h2>
       <p>Straberry Chocolate Smoothie</p>
       <img src="straberry.gif" alt="" ><a href="recepies.html" type="text/css" rel="stylesheet" ></a>
       
       <br><h2>Ingredience:</h2> <p1>Chocolate <br> Straberries <br> For recipies: <a href="login.php" >Click Here </a></p1>
      
   
        
        <div id="form1" class="data">
            <br><br><br><br>Can't find your choice of food? To add <a href="form.php">Click Here</a>
        </div>
       
   </section>
   <section id="rightColumn"> 
       
       <h2>Frooties of the Day</h2>
       
       <p>Mango Smoothie</p>
       <img src="mango.gif" alt="" >
       <a href="recepies.html" type="text/css" rel="stylesheet" ></a>
      <!--<nav class="horizontalNavigation">
         <ul>
            <li><a class="photoLink" href="#">Chocolates <img src="pc_photo2.png" alt="" /></a></li>
            <li><a class="photoLink" href="#">Fudges <img src="pc_photo3.png" alt="" /></a></li>
            <li><a class="photoLink" href="#">Toffees <img src="pc_photo4.png" alt="" /></a></li>
            <li><a class="photoLink" href="#">Truffles <img src="pc_photo5.png" alt="" /></a></li>
         </ul>
      </nav>--> 
   
    <div class="feelings" style="text-align: center;">
        <div class="col-1-2">
            <img id="myImage" src="giphy.gif" style="width:250px">
        </div>
        
        <div class="col-1-2">
            <h2><br>Do you like our Recipes??? <br><br> </h2>
            <button id="button1" onclick="document.getElementById('myImage').src='giphy3.gif'">Like&#128077;</button>
            <button id="button2" onclick="document.getElementById('myImage').src='giphy2.gif'">Unlike&#128078;</button> </div>
        
        </div>
    
    </section>
   <footer>
      <nav class="verticalNavigation">
         <h1>The Store</h1>
         <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#"><img id="fbicon" src="fbicon.png" alt="" />Facebook</a></li>
            <li><a href="#"><img id="twittericon" src="twittericon.png" alt="" />Twitter</a></li>
            <li><a href="#">Reviews</a></li>
            <!--<li><a href="#">Infographic</a></li>-->
         </ul>
      </nav>
      <nav class="verticalNavigation">
         <h1>Products</h1>
         <ul>
            <li><a href="#">Fruits</a></li>
            <li><a href="#">Vaggies</a></li>
            <li><a href="#">Protin</a></li>
            <li><a href="#">Specials</a></li>
         </ul>
      </nav>
      <nav class="verticalNavigation">
         <h1>Services</h1>
         <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">Contact Us</a></li>
         </ul>
      </nav>
      <section id="contactInfo">
         <h1>PPG Group</h1>
         <p>New Jersey Institute of Technology (NJIT) <br/>
             Newark, New Jersey<br /></p>
        
         <p><a href="tel:848-219-5716">848-219-5716</a></p>
       <p><a href="mailto:kcp39@njit.edu">kcp39@njit.edu</a></p>
      </section>
   </footer>
</body>
</html>