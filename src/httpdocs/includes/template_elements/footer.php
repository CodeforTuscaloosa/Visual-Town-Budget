<div class='footer-container full-bleed'>
  <div class='container'>
    <div class="footer row">
      <div style="margin: auto; display: block; text-align: center;">
        <img src="budgetvisualization/img/codefortuscaloosa.png" alt="Code for Tuscaloosa logo" width="100px" />
        <br><br>
        <p>Built with  ♥  by <a href="http://codefortuscaloosa.org/" >Code for Tuscaloosa</a></p>
      </div>
    </div>
  </div>
</div>
<script type='text/javascript'>
  activepath = window.location.pathname.substring(0);

  if(activepath.substring(activepath.length-1) == "/"){
    activepath = window.location.pathname.substring(0, window.location.pathname.length - 1);
  }

  if($(".dropdown-toggle[href='" + activepath 
   + "']").length){
    $(".dropdown-toggle[href='" + activepath 
   + "']").addClass('nav-active');  
  }
  else{
    activepath = "expenses";
      $(".dropdown-toggle[href='" + activepath 
   + "']").addClass('nav-active');  

  }
</script>
