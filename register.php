<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family:Cordia New ;
}

/* Style the header */
header {
    background-color: #35FF89;
    padding: 1px;
    text-align: center;
    font-size: 40px;
    color: #fff;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 480px; /* only for demonstration, should be removed */
    background: #87FBB9;
    padding: 20px;
	font-size:20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
	font-size:18px;
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 480px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
	font-size: 35px;
    background-color: #33CB72  ;
    padding: 1px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
  <article>
  <div class="container">
  <div class="row">
  <form method="post" action="result2.php">
  First name:&nbsp;&nbsp;
  <input size="25" type="text" name="firstname" value="">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Last name:&nbsp;&nbsp;
  <input size="25" type="text" name="lastname" value=""><br><br>
  Birthday:&nbsp;&nbsp;
  <input size="25" type="date" name="birthday" max="">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Age:&nbsp;&nbsp;
  <input size="25" type="text" name="age" value=""><br><br>
  Gender:&nbsp;&nbsp;
  <input type="radio" name="gender" value="Female"> Female
  <input type="radio" name="gender" value="Male" checked> Male
  <input type="radio" name="gender" value="Other"> Other<br>
  <br>
  Telephone Number:&nbsp;&nbsp;
  <input size="25" type="text" name="tel" value="">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
  Emergency Number:&nbsp;&nbsp;
  <input size="25" type="text" name="emergency" value=""><br><br>
  Email:&nbsp;&nbsp;
  <input size="25" type="text" name="email" value=""><br><br>
  Address:&nbsp;&nbsp;
  <input size="25" type="text" name="address" value="">
  <br><br>
  Shirt Size:&nbsp;&nbsp;
  <input type="radio" name="size" value="S" checked> S
  <input type="radio" name="size" value="M"> M
  <input type="radio" name="size" value="L" checked> L
  <input type="radio" name="size" value="XL"> XL
  <input type="radio" name="size" value="XXL"> XXL
  <input type="radio" name="size" value="3XL"> 3XL  <br>
  <br>
  <input type="submit" value="Submit">
</form> 
</div>
</div>
</div>
    </article>
</section>
<footer>
  <p>Footer</p>
</footer>

    </body>
</html>