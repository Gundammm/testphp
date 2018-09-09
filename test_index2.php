<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family:JasmineUPC;
}

/* Style the header */
header {
    background-color: #35FF89;
    padding: 1px;
    text-align: center;
    font-size: 50px;
    color: #fff;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 400px; /* only for demonstration, should be removed */
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
    float: left;
	text-align: center;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
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
    <h1 style="font-size:40px">ทำไมต้อง Run</h1>
    <img src="img/adorable-animal-animal-photography-1000602.jpg" width="200" height="120">
    <p style="font-size:20px">กขคง กขคงกขคงกขคงกขคงกขคงกขคงกขคงกขคงกขคง  กขคงกขคงกขคงกขคง  กขคงกขคงกขคงกขคง   </p>
    <p style="font-size:20px">Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>