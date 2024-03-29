<!DOCTYPE html>
<?php
session_start();
	require_once 'login.php';
	  $conn = new mysqli($hn, $un, $pw, $db);
	  if ($conn->connect_error) die("Unable to connect to database");
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Amazon.com: Online Shopping for Electronics, Apparel, Computers, Books, DVDs &amp; more</title>
  <link rel="stylesheet" href="css/style1.css"/>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>

body {font-family: Verdana, sans-serif; margin:0;width:auto;}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 25px;
}

.container {
  background-color: #f2f2f2;
	width: 90%;
	margin-left: 15px;
	margin-right: 30px;
  padding: 15px 30px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
	margin-left: 50px;
  color: white;
  padding: 12px;
  margin: 10px;
  border: none;
  width: 50%;
	height:40px;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}


.content{
	font-family: 'Amazon Ember';"
}
.card1{
  width: 100%
}
.top-section{
  width:200px;
  height:400px;
  overflow:hidden;
  background:#fff;
  positon:relative;
  float:left;
}
.image-conatiner{

  height:390px;
  display:grid;
}
.nav{
    float:left;
    padding:15px;
}
.nav img{
  width:40px;
  height:80px;
  border:1px solid #ddd;
}
.content{
  padding:25px;
  float:left;
  width:50%
}

.cart{
float: left;
width:20%
}
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
  </head>
  <body>
	  <a id="banner" href="#"></a>

	  <header>
	    <a id="nav-top"></a>

	    <div id="nav-belt">
	      <div class="nav-left">
	        <div id="nav-logo">
	          <a href="index.php" class="nav-logo-link"></a>
	          <a href="#" class="nav-logo-tagline">Try Prime</a>
	        </div>
	      </div>
	      <div class="nav-right">
	        <div id="nav-holiday">
	          <a href="#"></a>
	        </div>
	      </div>
	      <div class="nav-fill">
	        <div id="nav-search">
	          <form>
	            <div class="nav-left">
	              <span class="nav-search-label">All</span>
	              <i class="fa fa-caret-down" aria-hidden="true"></i>
	              <select id="nav-search-select">
	                <option selected="selected" value="aps">All Departments</option>
	                <option value="alexa-skills">Alexa Skills</option>
	                <option value="instant-video">Amazon Video</option>
	                <option value="warehouse-deals">Amazon Warehouse Deals</option>
	                <option value="appliances">Appliances</option>
	                <option value="mobile-apps">Apps &amp; Games</option>
	                <option value="arts-crafts">Arts, Crafts &amp; Sewing</option>
	                <option value="automotive">Automotive Parts &amp; Accessories</option>
	                <option value="baby-products">Baby</option>
	                <option value="beauty">Beauty &amp; Personal Care</option>
	                <option value="stripbooks">Books</option>
	                <option value="popular">CDs &amp; Vinyl</option>
	                <option value="mobile">Cell Phones &amp; Accessories</option>
	                <option value="fashion">Clothing, Shoes &amp; Jewelry</option>
	                <option value="fashion-womens">&nbsp;&nbsp;&nbsp;Women</option>
	                <option value="fashion-mens">&nbsp;&nbsp;&nbsp;Men</option>
	                <option value="fashion-girls">&nbsp;&nbsp;&nbsp;Girls</option>
	                <option value="fashion-boys">&nbsp;&nbsp;&nbsp;Boys</option>
	                <option value="fashion-baby">&nbsp;&nbsp;&nbsp;Baby</option>
	                <option value="collectibles">Collectibles &amp; Fine Art</option>
	                <option value="computers">Computers</option>
	                <option value="courses">Courses</option>
	                <option value="financial">Credit and Payment Cards</option>
	                <option value="digital-music">Digital Music</option>
	                <option value="electronics">Electronics</option>
	                <option value="gift-cards">Gift Cards</option>
	                <option value="grocery">Grocery &amp; Gourmet Food</option>
	                <option value="handmade">Handmade</option>
	                <option value="hpc">Health, Household &amp; Baby Care</option>
	                <option value="local-services">Home &amp; Business Services</option>
	                <option value="garden">Home &amp; Kitchen</option>
	                <option value="industrial">Industrial &amp; Scientific</option>
	                <option value="digital-text">Kindle Store</option>
	                <option value="fashion-luggage">Luggage &amp; Travel Gear</option>
	                <option value="luxury-beauty">Luxury Beauty</option>
	                <option value="magazines">Magazine Subscriptions</option>
	                <option value="movies-tv">Movies &amp; TV</option>
	                <option value="mi">Musical Instruments</option>
	                <option value="office-products">Office Products</option>
	                <option value="lawngarden">Patio, Lawn &amp; Garden</option>
	                <option value="pets">Pet Supplies</option>
	                <option value="prime-exclusive">Prime Exclusive</option>
	                <option value="pantry">Prime Pantry</option>
	                <option value="software">Software</option>
	                <option value="sporting">Sports &amp; Outdoors</option>
	                <option value="tools">Tools &amp; Home Improvement</option>
	                <option value="toys-and-games">Toys &amp; Games</option>
	                <option value="vehicles">Vehicles</option>
	                <option value="videogames">Video Games</option>
	                <option value="wine">Wine</option>
	              </select>
	            </div>
	            <div class="nav-right">
	              <i class="fa fa-search" aria-hidden="true"></i>
	              <input type="submit">
	            </div>
	            <div class="nav-fill">
	              <input type="text" autocomplete="off">
	            </div>
	          </form>
	        </div>
	      </div>
	    </div>

	    <nav id="nav-main">
	      <div class="nav-left">
	        <div class="nav-shop">
	          <a class="nav-a" href="#">
	            Departments
	            <i class="fa fa-caret-down" aria-hidden="true"></i>
	          </a>
	        </div>
	      </div>
	      <div class="nav-right">
	        <a class="nav-a" href="#">
	          <span>EN</span>
	          <i class="fa fa-globe" aria-hidden="true"></i>
	          <i class="fa fa-caret-down" aria-hidden="true"></i>
	        </a>

	        <a class="nav-a" href="#">
	          <span>Hello. Sign in</span>
	          Accounts &amp; Lists
	          <i class="fa fa-caret-down" aria-hidden="true"></i>
	        </a>

	        <a class="nav-a" href="#">
	          Orders
	        </a>

	        <a class="nav-a" href="#">
	          Try Prime
	          <i class="fa fa-caret-down" aria-hidden="true"></i>
	        </a>

	        <a class="nav-a cart" href="cart.php">
	          <span><?php
			  $user1=$_SESSION['user_email'];
			  $query="select * from cart where user_email='$user1'";
			  $result = $conn->query($query);
			  $row1 = $result->num_rows;
			  echo "$row1";
			  ?></span>
	          Cart
	        </a>
	      </div>
	      <div class="nav-fill">
	        <ul>
	          <li><a href="#">Your Amazon.com</a></li>
	          <li><a href="#">Today's Deals</a></li>
	          <li><a href="#">Gift Cards &amp; Registry</a></li>
	          <li><a href="#">Sell</a></li>
	          <li><a href="#">Help</a></li>
	        </ul>
	      </div>
	    </nav>
	  </header>


<br><br>
		<div class="row">
		  <div class="col-75">
		    <div class="container">
		      <form id="check" name="checkdet" method='POST' action='checkdet1.php'>

		        <div class="row">
		          <div class="col-50">
		            <h3>Billing Address</h3>
		            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
		            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
		            <label for="email"><i class="fa fa-envelope"></i> Email</label>
		            <input type="text" id="email" name="email" placeholder="john@example.com">
		            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
		            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
		            <label for="city"><i class="fa fa-institution"></i> City</label>
		            <input type="text" id="city" name="city" placeholder="New York">

		            <div class="row">
		              <div class="col-50">
		                <label for="state">State</label>
		                <input type="text" id="state" name="state" placeholder="NY">
		              </div>
		              <div class="col-50">
		                <label for="zip">Zip</label>
		                <input type="text" id="zip" name="zip" placeholder="10001">
		              </div>
		            </div>
		          </div>

		          <div class="col-50">
		            <h3>Payment</h3>
		            <label for="fname">Accepted Cards</label>
		            <div class="icon-container">
		              <i class="fa fa-cc-visa" style="color:navy;"></i>
		              <i class="fa fa-cc-amex" style="color:blue;"></i>
		              <i class="fa fa-cc-mastercard" style="color:red;"></i>
		              <i class="fa fa-cc-discover" style="color:orange;"></i>
		            </div>
		            <label for="cname">Name on Card</label>
		            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
		            <label for="ccnum">Credit card number</label>
		            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
		            <label for="expmonth">Exp Month</label>
		            <input type="text" id="expmonth" name="expmonth" placeholder="September">

		            <div class="row">
		              <div class="col-50">
		                <label for="expyear">Exp Year</label>
		                <input type="text" id="expyear" name="expyear" placeholder="2018">
		              </div>
		              <div class="col-50">
		                <label for="cvv">CVV</label>
		                <input type="text" id="cvv" name="cvv" placeholder="352">
		              </div>
		            </div>
		          </div>

		        </div>
		        <label>
		          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
		        </label>
		        <input type="submit" value="Continue to checkout" class="btn">
		      </form>
		    </div>
		  </div>

		  <div class="col-25">
		    <div class="container">
		      <h4>Cart
		        <span class="price" style="color:black">
		          <i class="fa fa-shopping-cart"></i>
							<?php
				  $user1=$_SESSION['user_email'];
				  $query="select * from cart where user_email='$user1'";
				  $result = $conn->query($query);
				  $row1 = $result->num_rows;
				  echo "$row1";
				  ?>
		        </span>
		      </h4>
		      <?php
						$user1=$_SESSION['user_email'];
						$query  = "SELECT * FROM cart where user_email='$user1'";
						$result = $conn->query($query);
						$rows=$result->num_rows;
						if ($rows==0)
						{
						}
						else
						{
						$total=0;
						$i=1;
							for ($j = 0 ; $j < $rows ; ++$j)
							{

								$result->data_seek($j);
								$row = $result->fetch_array(MYSQLI_NUM);
								echo "<img style='float:left;width:10%;height:10%' src=$row[1] >";
								echo "<p style='float:left;width:80%'>Product $i&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp₹$row[3]</p><hr style='width:100%'>";
								$row[3] = floatval(preg_replace('/[^\d.]/', '', $row[3]));
								$a=(float)$row[3];
								$total=$total+$a;
								$i++;
							}
							echo"<p style='padding-left:50%'>Total: ₹$total</p>";
						echo"</div>";
						}
				?>
		      <hr>
		      <p>Total <span class="price" style="color:black"><b><?php echo"₹$total"; ?></b></span></p>
		    </div>
		  </div>
		</div>


<br><br>
    <footer>
      <div class="top text-center">
        <a href="#nav-top">Back to top</a>
      </div>

      <div class="middle">
        <div class="center">
          <ul>
            <li><h3>Get to Know Us</h3></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">About Amazon</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Amazon Devices</a></li>
          </ul>
          <ul>
            <li><h3>Make Money with Us</h3></li>
            <li><a href="#">Sell on Amazon</a></li>
            <li><a href="#">Sell Your Services on Amazon</a></li>
            <li><a href="#">Sell on Amazon Business</a></li>
            <li><a href="#">Sell Your Apps on Amazon</a></li>
            <li><a href="#">Become an Affiliate</a></li>
            <li><a href="#">Advertise Your Products</a></li>
            <li><a href="#">Self-Publish with Us</a></li>
            <li><a href="#">Become an Amazon Vendor</a></li>
            <li><a href="#">Sell Your Subscription on Amazon</a></li>
            <li><a href="#">› See all</a></li>
          </ul>
          <ul>
            <li><h3>Amazon Payment Products</h3></li>
            <li><a href="#">Amazon Rewards Visa Signature Cards</a></li>
            <li><a href="#">Amazon.com Store Card</a></li>
            <li><a href="#">Amazon.com Corporate Credit Line</a></li>
            <li><a href="#">Shop with Points</a></li>
            <li><a href="#">Credit Card Marketplace</a></li>
            <li><a href="#">Reload Your Balance</a></li>
            <li><a href="#">Amazon Currency Converter</a></li>
          </ul>
          <ul>
            <li><h3>Let Us Help You</h3></li>
            <li><a href="#">Your Account</a></li>
            <li><a href="#">Your Orders</a></li>
            <li><a href="#">Shipping Rates &amp; Policies</a></li>
            <li><a href="#">Amazon Prime</a></li>
            <li><a href="#">Returns &amp; Replacements</a></li>
            <li><a href="#">Manage Your Content and Devices</a></li>
            <li><a href="#">Amazon Assistant</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>

        <ul class="copy text-center">
          <li><a href="#" class="logo"></a></li>
          <li><a href="#" class="select"><i class="fa fa-globe" aria-hidden="true"></i> English</a></li>
          <li><a href="#" class="select"><i class="flag-icon-us"></i>United States</a></li>
        </ul>
      </div>

      <div class="bottom">
        <div class="center">
          <ul>
            <li><a href="#">Amazon Music<br/><span>Stream millions<br> of songs</span></a></li>
            <li><a href="#">AmazonFresh<br/><span>Groceries &amp; More<br> Right To Your Door</span></a></li>
            <li><a href="#">Amazon Web Services<br/><span>Scalable Cloud<br> Computing Services</span></a></li>
            <li><a href="#">East Dane<br/><span>Designer Men's<br> Fashion</span></a></li>
            <li><a href="#">Prime Now<br/><span>FREE 2-Hour Delivery<br> on Everyday Items</span></a></li>
          </ul>

          <ul>
            <li><a href="#">Amazon Drive<br/><span>Cloud storage<br> from Amazon</span></a></li>
            <li><a href="#">AmazonGlobal<br/><span>Ship Orders<br> Internationally</span></a></li>
            <li><a href="#">Audible<br/><span>Download<br> Audio Books</span></a></li>
            <li><a href="#">Fabric<br/><span>Sewing, Quilting<br> &amp; Knitting</span></a></li>
            <li><a href="#">Prime Photos<br/><span>Unlimited Photo Storage<br> Free With Prime</span></a></li>
            <li><a href="#">Woot!<br/><span>Deals and <br> Shenanigans</span></a></li>
          </ul>

          <ul>
            <li><a href="#">6pm<br/><span>Score deals<br> on fashion brands</span></a></li>
            <li><a href="#">Home Services<br/><span>Handpicked Pros<br> Happiness Guarantee</span></a></li>
            <li><a href="#">Book Depository<br/><span>Books With Free<br> Delivery Worldwide</span></a></li>
            <li><a href="#">Goodreads<br/><span>Book reviews<br> &amp; recommendations</span></a></li>
            <li><a href="#">Shopbop<br/><span>Designer<br> Fashion Brands</span></a></li>
            <li><a href="#">Zappos<br/><span>Shoes &amp;<br> Clothing</span></a></li>
          </ul>

          <ul>
            <li><a href="#">AbeBooks<br/><span>Books, art<br> &amp; collectibles</span></a></li>
            <li><a href="#">Amazon Inspire<br/><span>Free Digital Educational<br>  Resources</span></a></li>
            <li><a href="#">Box Office Mojo<br/><span>Find Movie<br> Box Office Data</span></a></li>
            <li><a href="#">IMDb<br/><span>Movies, TV<br> &amp; Celebrities</span></a></li>
            <li><a href="#">TenMarks.com<br/><span>Math Activities<br> for Kids &amp; Schools</span></a></li>
            <li><a href="#">Souq.com<br/><span>Shop Online in<br> the Middle East</span></a></li>
          </ul>

          <ul>
            <li><a href="#">ACX <br/><span>Audiobook Publishing<br> Made Easy</span></a></li>
            <li><a href="#">Amazon Rapids<br/><span>Fun stories for<br>  kids on the go</span></a></li>
            <li><a href="#">ComiXology<br/><span>Thousands of<br> Digital Comics</span></a></li>
            <li><a href="#">IMDbPro<br/><span>Get Info Entertainment<br> Professionals Need</span></a></li>
            <li><a href="#">Warehouse Deals<br/><span>Open-Box<br> Discounts</span></a></li>
            <li><a href="#">Subscribe with Amazon<br/><span>Discover &amp; try<br> subscription services</span></a></li>
          </ul>

          <ul>
            <li><a href="#">Alexa<br/><span>Actionable Analytics<br> for the Web</span></a></li>
            <li><a href="#">Amazon Restaurants<br/><span>Food delivery from<br> local restaurants</span></a></li>
            <li><a href="#">CreateSpace<br/><span>Indie Print Publishing<br> Made Easy</span></a></li>
            <li><a href="#">Junglee.com<br/><span>Shop Online<br> in India</span></a></li>
            <li><a href="#">Whispercast<br/><span>Discover &amp; Distribute<br> Digital Content</span></a></li>
          </ul>

          <ul>
            <li><a href="#">Amazon Business<br/><span>Everything For<br> Your Business</span></a></li>
            <li><a href="#">Amazon Video Direct<br/><span>Video Distribution<br> Made Easy</span></a></li>
            <li><a href="#">DPReview<br/><span>Digital<br> Photography</span></a></li>
            <li><a href="#">Kindle Direct Publishing<br/><span>Indie Digital Publishing<br> Made Easy</span></a></li>
            <li><a href="#">Withoutabox<br/><span>Submit to<br> Film Festivals</span></a></li>
          </ul>

          <ul class="copy text-center">
            <li><a href="#">Conditions of Use</a></li>
            <li><a href="#">Privacy Notice</a></li>
            <li><a href="#">Interest-Based Ads</a></li>
            <li>&copy; 1996-2017, Amazon.com, Inc. or its affiliates</li>
          </ul>
        </div>
      </div>
    </footer>
    <script>
