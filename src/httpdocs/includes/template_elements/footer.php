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
           <span>&amp;</span>
           <a href="http://www.codeforasheville.org/" target="_blank">
            Code for Asheville
          </a>
        </div>
        <!-- FOOTER COLUMN 2 --> 
        <div class='span4 alpha collaboration'>
      	  <a href="http://www.raleighnc.gov/open" target="_blank"><h4></span>Open Raleigh</h4></a>
          <p>
           Your data. Your Raleigh.<br>Making civic engagement easier.
          </p>
        </div>
       <!-- FOOTER COLUMN 3 -->
        <div class='span4 omega feedback'>
      	  <a class="border-button" href=""><h4><span class="icons-like"></span> Give Feedback</h4></a>
      	</div>
        <div>  
          Original open source code by <br>
          <a class="link" target="_blank" href="http://codeforasheville.org/">Code for Asheville</a> 
          and
          <a class="link" target="_blank" href="http://www.goinvo.com">Involution Studios</a>. 
          Our code on
          <a class="link" target="_blank" href="https://github.com/CORaleigh/visual-town-budget">GitHub</a>
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
