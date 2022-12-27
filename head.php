<!-- ======= Header ======= -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
margin:0;   

}

#rc_logo {
 left: 30px;
 padding: 22px;
 position: absolute;
 color: #fff;
 font-size: 19px;
 font-family: Poppins;
 text-decoration: none;
}

#rc_logo a { 
color: inherit; 
text-decoration: none;
} 

.rc_nav {
  overflow: hidden;
  background-color: #363841;
  text-align: center;
  z-index: 6;
}

.rc_nav a {
 display: inline-block;
 margin-right: -4px;  /* inline-block gap fix */
 color: #fff;
 padding: 22px 22px;
 text-decoration: none;
 font-family: Poppins;
 font-size: 18px;
 -webkit-transition: background 0.3s linear;
 -moz-transition: background 0.3s linear;
 -ms-transition: background 0.3s linear;
 -o-transition: background 0.3s linear;
 transition: background 0.3s linear;
 z-index: 9;
}

.rc_nav a:hover {
  background-color: #575b69;
  color: #bdfe0e2;
}

.rc_nav .icon {
  display: none;
}

.rc_content {
  text-align: center; 
  padding-left:14px; 
  font-family: Poppins; 
  margin-top: 100px;  
  color: #8e909b;
}


@media screen and (max-width: 820px) {
  .rc_nav a {display: none;}
  .rc_nav a.icon {
    float: right;
    display: block;
    width: 60px;
  }
}

@media screen and (max-width: 820px) {
  .rc_nav.responsive {position: relative; top: 73px;}
  .rc_nav.responsive .icon {
    position: fixed;
    right: 0;
    top: 0;
  }
  .rc_nav.responsive a {
    float: none;
    display: block;
    text-align: center;
  }

}
</style>