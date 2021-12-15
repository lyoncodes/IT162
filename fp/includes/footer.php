    <!-- footer starts here -->
    <footer>
     <p><small>&copy; <?=date('Y')?>
      <a href="contact.php">Michael Lyon</a>, All Rights Reserved ~ 
      <a id="html-checker" href="#">Check HTML</a> ~ 
      <a href="https://jigsaw.w3.org/css-validator/check?uri=referer">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
    
    //manages mobile nav 
    function expandNav() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
 </body>
</html>