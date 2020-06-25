<?php include ('main-header.php'); ?>

<style>
    form
    {
        width:  = 1500px;
        padding: 15px 32px;
        display: block;


    }
    form input[type="submit"]
    {
        margin-left: 630px;
        align-self: right;
        font-size:15px;
        width:300px;
        height:40px;
        background:#3fada8;
        float: left;
        line-height: 35px;
        cursor: pointer;
        position: relative;
        border: 1px solid #fff;
    }
    form input: hover
    {
        background: gray;
    }
    form input[value]
    {
        color: white;
        font-variant: small-caps;

    }

    .alignleft 
    {
        float: left;
    }
    .alignright 
    {
        float: right;
    }
    a: hover
    {
        text-decoration: underline;
    }
</style>
<div class="page">
<div class="welcome">
        <div id="textbox">
  <p class="alignleft" style="color: #3fada8; font-size: 170%; font-style: small-caps;">Cognitive Science Lab</p>
  <p class="alignright" style="font-size: 140%; font-style: small-caps;"><a href="ssh-cogscproj.php" style="color: #3fada8; font-style: small-caps;">Current Projects</a></p>
</div>
<br><br>

        <p align="justify"><br/>Cognitive Science is the study of the mind and intelligence, and shares rich
interdisciplinarity across Psychology, Neuroscience, Computer Science, Linguistics,
Anthropology, Philosophy, Education and Media Studies. The overarching goals of
Cognitive Science is to understand and model the mind and its processes like attention,
memory, executive functions by utilizing ideas and approaches from these
complementary disciplines.<br><br>
The Cognitive Science Division within the Department of Social Sciences and
Humanities at IIIT-D comprises faculties with backgrounds in Cognitive Psychology,
Neuroscience and Media Psychology. Present areas of research in the Cognitive
Science Lab include Visual Attention and Perception, Social and Affective Cognition,
and the processing of media messages.<br><br>
We employ psychophysical and neurophysiological methodologies for experimentation.
Presently the lab is equipped with an eye-tracker, which is being used to record gaze
positions and pupil diameter, while participants are performing various cognitive
behavioral tasks.<br/><br/>

        </p>
		<!-----<p><a href="ssh-about.php">Read More...</a></p>---->

    </div>
    <div class="container" style="width: 800px; height: 50px;margin-left: 80px;">
    
    <input type="radio" id="i1" name="images" checked />
    <input type="radio" id="i2" name="images" />
    <input type="radio" id="i3" name="images" />
    <input type="radio" id="i4" name="images" />
    <input type="radio" id="i5" name="images" />
        
    
    <div class="slide_img" id="one">            
            
            <img src="./gallery/CognitiveScience/2.png">
            
                <label class="prev" for="i7"><span>&#x2039;</span></label>
                <label class="next" for="i2"><span>&#x203a;</span></label>  
        
    </div>
    
    <div class="slide_img" id="two">
        
            <img src="./gallery/CognitiveScience/3.jpg" >
            
                <label class="prev" for="i1"><span>&#x2039;</span></label>
                <label class="next" for="i3"><span>&#x203a;</span></label>
        
    </div>
            
    <div class="slide_img" id="three">
            <img src="./gallery/CognitiveScience/4.jpg">  
            
                <label class="prev" for="i2"><span>&#x2039;</span></label>
                <label class="next" for="i4"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="four">
            <img src="./gallery/CognitiveScience/5.jpg"> 
            
                <label class="prev" for="i3"><span>&#x2039;</span></label>
                <label class="next" for="i5"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="five">
            
            <video width="800px" height="400px" controls>
  <source src="./gallery/CognitiveScience/7.mp4" type="video/mp4">
            
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