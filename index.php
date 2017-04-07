<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="UTF-8">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Simple site for Chop-Chop recruitment needs</title>
  </head>
  <body>
    <header>
      <div class="topBar"></div>
      <menu>
        <span>Home</span>
        <span class="closerLeft">Products</span>
        <img src="images/logo.png">
        <span class="closerRight">About us</span>
        <span>Contact</span>
      </menu>
    </header>
    <section class="hero">
      This is just a sample page
      <div class="button" id="highlighter">push the button</div>
    </section>
    <section class="content">
      <div>
        <h1>A heading title</h1>
        <div class="square"></div>
        <p class="inlineParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
        <p class="hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
        <div class="more"><span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;read more</div>
      </div>
      <div>
        <h1>A  much longer heading title</h1>
        <div class="square"></div>
        <p class="inlineParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.</p>
        <p class="hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
        <div class="more lower"><span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;read more</div>
      </div>
      <div>
        <h1>A heading title</h1>
        <div class="square"></div>
        <p class="inlineParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
        <p class="hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
        <div class="more"><span>-</span><span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;read more</div>
      </div>
    </section>
    <section class="contact">Contact us
      <form id="form">
        <fieldset>
          <input placeholder="name" type=text method="GET" name="name">
        </fieldset>
        <fieldset>
          <input placeholder="e-mail" type=email method="GET" name="email">
        </fieldset>        
        <fieldset>
          <input placeholder="phone" type=tel method="GET" name="phone">
        </fieldset>  
        <fieldset>
          <textarea placeholder="your message" method="GET" name="message"></textarea>
        </fieldset>
      </form>
      <input id="send" type="submit" form="form" value="send message">
    </section>
    <div class="navTop">back to top</div>
    <footer>
      <div class="container">
        <ul class="homeProducts">
          <li><span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;home</li>
          <li class="bottomLi"><span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;products</li>
        </ul>
        <ul class="aboutContact">
          <li><span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;about us</li>
          <li class="bottomLi"><span>-</span><span>-</span><span>-</span><span>-</span>&nbsp;&nbsp;contact</li>
        </ul>
        <div class="twitter"></div>
        <div class="facebook"></div>
        <div class="copyright">Copyright &copy; 2010 Sample &amp; Pack, Inc.</div>
      </div>
    </footer>
  </body>
</html>