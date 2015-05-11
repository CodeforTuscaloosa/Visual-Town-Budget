<div class='footer-container full-bleed'>
  <div class='container'>
    <div class="footer row">
      <div class=''>
        <!-- FOOTER COLUMN 1 -->
        <div class='span4 alpha collaboration'>
          <img src="http://www.raleighnc.gov/content/static/images/City-Seal-BW.png" alt="City of Raleigh Seal" />
          <p>
            a collaborative web effort <br> brought to you by:
          </p>                  
          <a href="http://www.raleighnc.gov" target="_blank">
            The City of Raleigh
          </a>
          <span>, </span>
          <a href="http://www.codeforraleigh.com" target="_blank">
            Code for Raleigh
          </a>
           <span>, &amp;</span>
           <a href="http://www.codeforasheville.org/" target="_blank">
            Code for Asheville
          </a>
        </div>
        <!-- FOOTER COLUMN 2 --> 
        <div class='span4 omega feedback'>
      	  <a class="border-button" href=""><img src="/Visual-Town-Budget/img/feedback-icon.png" alt="1feedback icon"/> <h4>Give Feedback</h4></a>
      	</div>
       <!-- FOOTER COLUMN 3 -->
        <div class='span4'>
          
        </div>                        
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