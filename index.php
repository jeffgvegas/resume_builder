<?php
?>
<html>
    <head>
				
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="css/contact.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700i,900i&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="font">
            <div class="font2"> </div>
        <div id="pagenav">
            <a class="pagenav" href="index.html">Home</a>
            <a class="pagenav" href="resume.html">Resume</a>
            <a class="pagenav" href="gallery.html">Gallery</a>
          </div>
        
				<?php $name = "Jeffery Gontarek"; ?> 
        <h1><?php echo $name; ?></h1>
        <form action="#" method="post">
            <div class="container">
        <label for="first">First Name:</label><br/>
            <input type="text" id="first" name="first">
                <br/>
        <label for="last">Last Name:</label><br/>
            <input type="text" id="last" name="last">
            </div>
            <div class="container">
        <label for="email">Email:</label><br/>
            <input type="email" id="email" name="email">
            </div>
            <div class="container">
            <label for="phone">Contact Number:</label><br/>
            <input type="tel" id="phone" name="phone">
            </div>
            <div class="container">
            <label for="comments">Comments:</label><br/>
            <textarea id="comments" rows="3"></textarea><br/>
                <button type="submit" class="submit">Submit</button>
                <button type="clear" class="clear">Clear</button>
            
            </form>
            <footer>
        </footer>
        </div>
            </div>
                
        </body>
      

</html>


