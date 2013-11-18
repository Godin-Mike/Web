<?php


include 'header.php'; ?>

             <div id="body">
		
	<div id="tabs">
			  <div id="tabs-1" class="tabContent">
					<img class="mainNewsImage" src="_images/AboutMe.png" width="700" height="400" alt="testing photograph" />
					<p><strong>Welcome to My Website</strong><br/>
					Interactive Multimedia Graduate<br />
                    Ottawa Valley Raised<br />
					Web programmer building interactive websites.<br />
                    PHP,JavaScript,HTML,MySQL,JQuery,CSS<br />
				   <a class="readMore" href="about.html">About Me &#187;</a></p>
	  </div>
				<div id="tabs-2" class="tabContent">
					<img class="mainNewsImage" src="_images/newweb.png" width="700" height="400" alt="testing photograph" />
					<p><strong>Current websites</strong><br/>
					My most recent website finished is Matt Forgarty.<br/>
                    Designer: Rob Dupuis<br/>
					<a class="readMore" href="http://mattfogarty.ca">Launch Site &#187;</a></p>
				</div>
				<div id="tabs-3" class="tabContent">
					<img class="mainNewsImage" src="_images/contract.png" width="700" height="400" alt="testing photograph" />
					<p><strong>Contract Work</strong><br/>
					Currently on a contract with Office of the Auditor General
                    I apply office standards, CLF 2.0 maintain the INTRAnet also migrate to the new CMS system<br/>
					<a class="readMore" href="http://www.oag-bvg.gc.ca/internet/English/admin_e_41.html">Launch Site &#187;</a></p>
				</div>
				<div id="tabs-4" class="tabContent">
					<img class="mainNewsImage" src="_images/flash.png" width="700" height="400" alt="testing photograph" />
					<p><strong>Flash Work</strong><br/>
					For a Final Class Project Mili and I made a Interactive Site Map for the Game Dev. course.<br/>
					<a class="readMore" href="http://www.mgodin.com/flashwall/">Launch Site &#187;</a></p>
				</div>
				<div id="tabs-5" class="tabContent">
					<img class="mainNewsImage" src="_images/elder.png" width="700" height="400" alt="testing photograph" />
					<p><strong>Content Management System</strong><br/>
					Final web project I had to turn an image into a website and bring it into a CMS system
					<a class="readMore" href="http://www.mgodin.com/HL01">Launch Site &#187;</a></p>
				</div>
                <ul id="tabNavigation">
					<li class="active" id="newsItem01">
						<a href="#tabs-1" >
						
						</a>
					</li>
					<li id="newsItem02">
						<a href="#tabs-2" >
						
						</a>
					</li>
					<li id="newsItem03">
						<a href="#tabs-3" >
					
						</a>
					</li>
					<li id="newsItem04">
						<a href="#tabs-4" >
						
						</a>
					</li>
					<li id="newsItem05">
						<a href="#tabs-5" >
						
						</a>
					</li>
				</ul><!--tab navigation-->
	  </div><!--tabs-->







<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$("#accordion").accordion();

			
		$("#tabs").tabs({event:"mouseover"}).tabs('rotate', 10000, true);
				
						
				
		
		$("a#newsItem1").click(function () { 
							window.location="gallery.html"; 
						});
		
				
		
		$("a#newsItem2").click(function () { 
							window.location="gallery.html"; 
						});
		
				
		
		$("a#newsItem3").click(function () { 
							window.location="gallery.html"; 
						});
		
				
		
		$("a#newsItem4").click(function () { 
							window.location="code.html"; 
						});
		
				
		
		$("a#newsItem5").click(function () { 
							window.location="about.html"; 
						});

		
		}
	);

</script>
<div id="footer">
<hr/>
<div id="follow">
<strong>Follow me on:</strong>
<ul>
<li><a href="http://www.facebook.com/mike.godin1" target="_blank"><img height="50px;" src="_images/faceB.png" /></a></li>
<li><a href="http://www.twitter.com/mikegodin" target="_blank"><img height="50px;" src="_images/twitter.png" /></a></li>
<li><a href="http://ca.linkedin.com/pub/mike-godin/19/45b/3b7" target="_blank"><img height="50px;" src="_images/linkin.png" /></a></li>
</ul>
</div>
<p>Copyright 2010 Mgodin.Com</p>
</div>
      </div>  
                 
</body>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15496112-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
</html>

