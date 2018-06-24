<? php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Mini Pricing Table</title>
  <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      *,
*:before,
*:after {
  box-sizing: border-box;
}

html,
body {
  height: 100%;
}

body {
  background: #454c4f;
  font: 1em/1.5 'Droid Sans', sans-serif;
}

.pricing {
  -moz-transform: translate(-49%, -49.1%);
  -ms-transform: translate(-49%, -49.1%);
  -webkit-transform: translate(-49%, -49.1%);
  transform: translate(-49%, -49.1%);
  position: absolute;
  left: 50%;
  top: 50%;
  width: 310px;
  font-size: 0;
  opacity: 1;
  transition: opacity .2s ease;
}

.price-option {
  display: inline-block;
  width: 6.25em;
  vertical-align: middle;
  margin-right: 0.3125em;
  font-size: 16px;
  opacity: 1;
  transition: opacity .2s ease;
}

.price-option:last-child {
  margin-right: 0;
}

.pricing:hover .price-option {
  opacity: 0.6;
}

.pricing:hover .price-option:hover {
  opacity: 1;
}

.price-option__detail {
  padding: 2em 0;
  background: white;
  text-align: center;
}

.price-option--low .price-option__detail {
  border-radius: .25em 0 0 0;
}

.price-option--mid .price-option__detail {
  padding: 2.3em 0;
  border-radius: .25em .25em 0 0;
}

.price-option--high .price-option__detail {
  border-radius: 0 .25em 0 0;
}

.price-option__cost,
.price-option__type {
  display: block;
}

.price-option__cost {
  font-size: 1.5em;
  color: #383838;
}

.price-option__type {
  font-size: .7em;
  text-transform: uppercase;
  color: #909090;
}

.price-option__purchase {
  position: relative;
  display: block;
  padding: .6em;
  font-size: .875em;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  color: rgba(0, 0, 0, 0.6);
}

.price-option--low .price-option__purchase {
  background: #a7d155;
  border-radius: 0 0 0 .25em;
}

.price-option--mid .price-option__purchase {
  background: #eada42;
  border-radius: 0 0 .25em .25em;
}

.price-option--high .price-option__purchase {
  background: #e54e4b;
  border-radius: 0 0 .25em 0;
}

.price-option__purchase:before {
  content: '';
  position: absolute;
  bottom: 100%;
  left: 50%;
  display: block;
  width:0;
  height: 900;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-style: solid;
}

.price-option--low .price-option__purchase:before {
  border-color: transparent transparent #a7d155;
}

.price-option--mid .price-option__purchase:before {
  border-color: transparent transparent #eada42;
}

.price-option--high .price-option__purchase:before {
  border-color: transparent transparent #e54e4b;
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

   <h3 align="right"><font color="#ffffff"><a href="home.php">BACK TO HOME</a></font></h3>

  <div class="pricing">
  <div class="[ price-option price-option--low ]">
    <div class="price-option__detail">
      <span class="price-option__cost">LinkedIn</span>
      <span class="price-option__type"><img src="images/linkedin.jpg" height="50" width="100"></span>
    </div>
    <a href="www.linkedin.com" class="price-option__purchase">Get</a>
  </div>
  <div class="[ price-option price-option--mid ]">
    <div class="price-option__detail">
      <span class="price-option__cost">GitHub</span>
      <span class="price-option__type"><img src="images/github.jpg" height="70" width="100"></span>
    </div>
    <a href="www.github.com" class="price-option__purchase">Buy</a>
  </div>
  <div class="[ price-option price-option--high ]">
    <div class="price-option__detail">
      <span class="price-option__cost">Stack Overflow</span>
      <span class="price-option__type"><img src="images/stack.png" height="90" width="100"></span>
    </div>
    <a href="www.stackoverflow.com" class="price-option__purchase">Buy</a>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>

</html>
