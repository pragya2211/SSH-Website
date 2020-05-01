<?php include ('main-header.php'); ?>
<div class="page">
<div class="welcome">
       <h1>Writing Lab</h1>
        <p align="justify"><br/>The Department of Social Science and Humanities (SSH) at the Indraprastha Institute of Information Technology (IIIT Delhi) is home to a multi-disciplinary faculty offering courses and conducting research in Economics, Sociology and Psychology and also broader areas such as Liberal Arts, Communications and the Humanities.<br/><br/>

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