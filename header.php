</head>
<body>

<div id="rc_logo">
<a href="#home" title="Logo">LOGO</a> <!-- Swap this placeholder out for your logo image -->
</div>  

<div class="rc_nav" id="centered_nav">
<a href="http://localhost/blog/index3.php" title="Home">Home</a>
<a href="http://localhost/blog/services" title="Services">Services</a>
<a href="http://localhost/blog/about2.php" title="About">About</a>
<a href="http://localhost/blog/contact2.php" title="Contact">Contact</a>
<a href="javascript:void(0);" title="Menu" style="font-size:18px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
    var x = document.getElementById("centered_nav");
    if (x.className === "rc_nav") {
        x.className += " responsive";
    } else {
        x.className = "rc_nav";
    }
}
</script>

  <!-- End Header -->