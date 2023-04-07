
   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGI DOC</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="logo"><a href="#" > <img src="image/2-removebg-preview.png"></img></a></div>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.html">about</a>
        <a href="services.html">services</a>
        <a href="doctors.html">doctors</a>
        <a href="index.php#appointment">appointment</a>
        <a href="review.html">review</a>
        <a href="blogs.html">blogs</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="doc gif.gif" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> Appointment Now<span class="fas fa-chevron-right"></span> </a>
    </div>

</section>


<section class="doctors" id="doctors">

  <h1 class="heading"> Covid <span>precautions</span> </h1>

  <div class="box-container">

      <div class="box">
          <img src="image/maskkid.jpg" alt="kid">
          <h3>Wear mask</h3>
          <span>Make sure it covers both your nose, mouth and chin. When you take off a mask, store it in a clean plastic bag, and every day either wash it if it's a fabric mask, or dispose of a medical mask in a trash bin. Don't use masks with valves.</span>
          
      </div>

      
      <div class="box">
          <img src="image/sani.png" alt="kid">
          <h3>Use sanitizer</h3>
          <span>cover all surfaces of both hands with hand sanitizer to provide similar disinfection effectiveness </span>
          
</div>

    
<div class="box">
          <img src="image/iso.jpg" alt="kid">
          <h3>Isolate Yourself</h3>
          <span>Stay home and separate from others as much as possible. Use a separate bathroom, if possible. Take steps to improve ventilation at home, if possible. Don't share personal household items, like cups, towels, and utensils. </span>
          
</div>

<div class="box">
          <img src="image/vac.jpg" alt="kid">
          <h3>Take vaccine</h3>
          <span>COVID-19 vaccination helps protect you by creating an antibody response without you having to experience potentially severe illness or post-COVID conditions. Getting sick with COVID-19 can cause severe illness or death, even in children, and we can't reliably predict who will have mild or severe illness. </span>
          
</div>
    
<div class="box">
          <img src="image/vent.jpg" alt="kid">
          <h3>Ensure proper ventilation</h3>
          <span>Spend time outside and improve indoor air quality at home by opening windows and using adequate filteration. </span>
          
</div>
    
<div class="box">
          <img src="image/seek.jpg" alt="kid">
          <h3>Seeking treatment</h3>
          <span>Don't delay! Treatment must be started within a few days after you first develop symptoms to be effective. </span>
          
</div>
      </div>
</div>
</section>

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Appointment</span> Now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="confirm.php" method="post">
       
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">

            <select id="branch" name="branch"class="box" onchange="dynamicdropdown(this.options[this.selectedIndex].value);">
                <option>Select Branch</option>
                <option value = "HSR">HSR LAYOUT</option>
                <option value = "BTM">BTM LAYOUT</option>
                <option value = "KLG">KUDLU GATE</option>
            </select>
            <select id="status" name = "doctor" class = "box" >
                <option>Select Doctor</option>
            </select>
           <input type="submit" name="submit" value="appointment now" class="btn" id="submit" onclick="show_alert();" >
         

</form>

</div>

</section>

<section class ="footer">
<div class ="box">

<div class = "credit"> created by <span>4 FIRE </span></div>

</section>
<script src="script.js"></script>

</body>
</html>

