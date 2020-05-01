<?php include ('main-header.php'); ?>
<div class="page">
<div class="welcome">
       <h1>Game Theory Lab</h1>
        <p align="justify"><br/>“The Game Theory and Market Design Lab was set up for research in decision sciences,
behavioural economics and game theory. It supports computational research that makes use
of mathematical and statistical modelling software, as well as experimental research that is
directed towards studying behaviour. The goal is to design experiments that simulate actual
decision and game situations, and inevitably involve human subjects who make choices on
computer systems that are connected to a network. For more details or interest in potential
collaboration, please contact:  <a href="mailto:kirtikanjilal@iiitd.ac.in">Kiriti Kanjilal<br/><br/>

        </p>
		<!-----<p><a href="ssh-about.php">Read More...</a></p>---->

    </div>
    <div class="container" style="width: 900px; height: 50px;margin-left: 20px;">
    
    <input type="radio" id="i1" name="images" checked />
    <input type="radio" id="i2" name="images" />
    <input type="radio" id="i3" name="images" />
    <input type="radio" id="i4" name="images" />
    <input type="radio" id="i5" name="images" />    
    
    <div class="slide_img" id="one">            
            
            <img src="./gallery/1.jpeg">
            
                <label class="prev" for="i5"><span>&#x2039;</span></label>
                <label class="next" for="i2"><span>&#x203a;</span></label>  
        
    </div>
    
    <div class="slide_img" id="two">
        
            <img src="./gallery/2.jpg" >
            
                <label class="prev" for="i1"><span>&#x2039;</span></label>
                <label class="next" for="i3"><span>&#x203a;</span></label>
        
    </div>
            
    <div class="slide_img" id="three">
            <img src="./gallery/3.jpeg">  
            
                <label class="prev" for="i2"><span>&#x2039;</span></label>
                <label class="next" for="i4"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="four">
            <img src="./gallery/4.jpeg"> 
            
                <label class="prev" for="i3"><span>&#x2039;</span></label>
                <label class="next" for="i5"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="five">
            <img src="./gallery/5.jpeg">  
            
                <label class="prev" for="i4"><span>&#x2039;</span></label>
                <label class="next" for="i1"><span>&#x203a;</span></label>

    </div>

    <div id="nav_slide">
        <label for="i1" class="dots" id="dot1"></label>
        <label for="i2" class="dots" id="dot2"></label>
        <label for="i3" class="dots" id="dot3"></label>
        <label for="i4" class="dots" id="dot4"></label>
        <label for="i5" class="dots" id="dot5"></label>
    </div>
        
</div>



	<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>>