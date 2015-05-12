<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Raleigh, NC Budget Visualization</title>
  <meta name='description' content='Government budgets can be tough to understand, but now the City of Raleigh, North Carolina is providing the next generation of accessibility in financial information that allows citizens to view, engage, and discuss.'>
  <?php include '../includes/template_elements/resources.php'; ?>
  
  <!-- PAGE SPECIFIC CSS -->
  <link rel="stylesheet" href="flexslider/flexslider.css">
  <style>
    rect.plus{
      fill: CornflowerBlue;
    }
    rect.minus{
      fill: Tomato;
    }
    .labelText{
      font-weight:bold;
      text-align: center; 
    }
    #categorySelector{
      vertical-align:top;
    }
  </style>
  <!-- END PAGE SPECIFIC CSS -->

  <!-- PAGE SPECIFIC SCRIPTS -->
  <script src="flexslider/jquery.flexslider-min.js"></script>
  <script src="http://d3js.org/d3.v3.min.js"></script>
  <script src="budgetdiff.js"></script> 
  <!-- END PAGE SPECIFIC SCRIPTS -->

</head>

<body class="whatsnew">
  <div class='header-container'>
    <?php include '../includes/template_elements/top-bar.php'; ?>     
  </div>
  <div class="slider">
    <div class="flexslider carousel">
      <ul class="slides">
        <li>
          <img src="/Visual-Town-Budget/img/slides/slide1.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>City Council Budget Goals For 2015-2016</h2>
                <p>
		  <ul>
		    <li>Employee compensation &amp; managed savings</li>
		    <li>Police strategic plan</li>
		    <li>Raleigh redefines transit</li>
		    <li>Graffiti initiative</li>
		  </ul>
                </p>
                <a href="../docs/City_Council_budget_goals.pdf" target="_blank" class="border-button">
                  Read budget goal details
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/Visual-Town-Budget/img/slides/slide2.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Revenue Highlights</h2>
                <p>
		  <ul>
		    <li>Property tax rate to stay at 46&cent; with a projected revenue increase of 0.9%</li>
		    <li>Sales tax revenue projected to increase 3.4%</li>
		    <li>License &amp; permit revenues to increase 10%</li>
		    <li>Planned fund balance appropriation of $2.0 million</li>
		  </ul>
                </p>
                <a href="../docs/Revenue_summary_detail.pdf" target="_blank" class="border-button">
		  Read revenue details
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/Visual-Town-Budget/img/slides/slide3.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Expenditure Highlights</h2>
                <p>
		  <ul>
		    <li>1.2% overall decrease compared to the FY 2013-14 budget</li>
		    <li>Cost of Living increase of 3% </li>
		    <li>Operating costs are budgeted to increase by 4.1%. </li>
		    <li>Debt service budget is essentially flat at $12.7 million </li>
		    <li>Capital outlay is budgeted to decrease by 33.6%</li>
		  </ul>
                </p>
                <a href="../docs/Expenditure_summary_detail.pdf" target="_blank" class="border-button">
		  Read expenditure details
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/Visual-Town-Budget/img/slides/slide4.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Staffing Highlights</h2>
                <p>
		  <ul>
		    <li>Additional X FTE positions are budgeted for FY 2015-16 budget</li>
		    <li>Otherwise position counts are unchanged</li>
		    <li>Cost of Living increase of 3% for existing staff </li>
		  </ul>
                </p>
                <a href="../docs/Staffing_summary_detail.pdf" target="_blank" class="border-button">
		  Read staffing details
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>

        <li>
          <img src="/Visual-Town-Budget/img/slides/slide5.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Budget Highlights By Fund</h2>
                <p>
		  <ul>
		    <li>General: Expenditures up 3.8%</li>
		    <li>Water Resources: Rate adjustments to yield additional $460,000</li>
		    <li>Stormwater: Tiered rate structure proposed</li>
		    <li>Transit Services: Funding proposed for limited Sunday service and Route C improvements</li>
		    <li>US Cellular Center: Event bookings &amp; operating revenue continue to trend up</li>
		    <li>Housing Trust: General Fund contribution of $500,000 continues</li>
		  </ul>
                </p>
                <a href="../docs/Funds_Budget_Details.pdf" target="_blank" class="border-button">
		  Read fund budget details
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/Visual-Town-Budget/img/slides/slide6.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Capital Improvements</h2>
                <p>
		  <ul>
		    <li>Last year's 3&cent; property tax increase to fund capital investment (2&cent;) and maintenance (1&cent;)</li>
		    <li>Comprehensive 5 yr capital improvement plan includes $132 Million in projects</li>
		    <li>Cost offsets of approximately $43 million from outside sources
		  </ul>
                </p>
                <a href="../docs/Capital_Investment_Program.pdf" target="_blank" class="border-button">
		  Read capital improvements details
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>
        <li>
          <img src="/Visual-Town-Budget/img/slides/slide7.jpg" />
            <div class="slide-overlay">
              <div>
                <h2>Changes from the Proposed Budget</h2>
                <p>
		  <ul>
		    <li>2 additional FTE positions funded by the Street Utility Cut Fund</li>
		    <li>1 additional FTE position in the City Attorney's Office funded by the General Fund</li>
		    <li>$100,000 reallocation of funds within the Capital Improvement Program to Neighborhood Sidewalk Program
		  </ul>
                </p>
                <a href="../docs/Changes_proposed_adopted.pdf" target="_blank" class="border-button">
		  Read more about the changes from Proposed to Adopted
                </a>
                <a href="../docs/Adopted_Budget_Rev_2014-15.pdf" target="_blank" class="border-button" style="float:right;">
                  Download full budget
                </a>
              </div>
            </div>
        </li>
      </ul>
    </div>
  </div>    
  <div class="container wrapper">
    <div class="row span6">
<!--      <div class="span3"> -->
      <div class="row">
        <div class="well">
          <div>
            <h2>Explore The Top Budget Changes Compared To Last Year</h2>
          </div>
          <div id="mainFlow" class="interactionPanel">
	          <span id="selectText" class="labelText">Select Fund:</span>
	          <select id="categorySelector" onchange="buttonClick('next')">
          		<option>---</option>
          	</select>
	          <input id="radio1" type="radio" checked name="showRev" value="true" onclick="showRevHandler()"> Revenues
	          <input id="radio2" type="radio" name="showRev" value="false" onclick="showRevHandler()"> Expenses
	          <input id="viewBySelector" style="vertical-align:middle; float:right;" type="button" value="View By Account" onclick="buttonClick('account')"/>
	          <input id="startOver" style="vertical-align:middle; float:right;" type="button" value="Start Over" onclick="buttonClick('reset')"/>
          </div> 
        </div>          
      </div>
      <div class="interactionPanel span6" style="">
        <h4 id="contextText" align="center">TBD</h4>
        <svg class="chart span6" id="chart" width="700" height="470"></svg>
      </div>
    </div>
    <div class="row span5">
      <ul class="highlights">
        <li>
          <h3>FY16 Budget Priorities</h3>
          <ul>
            <li>Ensure the long-term financial sustainability and financial strength of our general governmental operations and enterprises</li>
            <li>Invest in our outstanding workforce with competitive compensation and benefit level</li>
            <li>Respond to community growth and increasing demands for our core services</li>
            <li>Continue our investment in capital facilities, roads, pipes and technology infrastructure</li>
          </ul>
        </li>
        <li>
          <h3>Revenue Highlights</h3>
          <ul>
            <li>Sales tax revenue is estimated to increase 4%</li>
            <li>Development revenues are projected to increase 3% from increasing permits and economic development activity</li>
            <li>Parks bond approved in the November 2014 referendum increases the tax rate by 1.72 cents per $100 of tax valuation</li>
          </ul>
        </li>
        <li>
          <h3>Expenditure Highlights</h3>
          <ul>
            <li>4% overall increase compared to the FY15 Adopted Budget</li>
            <li>New or expanded facilities opening in FY16 include Central Communications Center, Central Operations Facility, Abbotts Creek Park and MLK Jr. Memorial Gardens</li>
            <li>Increases staffing to address growth and development demands in core service areas</li>
            <li>Competitive compensation increase in line with national trends</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <script>
    <!-- Fund,Department,Division,Account,Amount, -->
    d3.csv("budgetdiffs.csv", forceAmountType, afterRead);
  </script>
  <?php include '../includes/template_elements/footer.php'; ?>
</body>
<script type="text/javascript">
$('document').ready(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    // animationLoop: false,
    // itemWidth: 210,
    // itemMargin: 5,
    // pausePlay: true,
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});
</script>
</html>