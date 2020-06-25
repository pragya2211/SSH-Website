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
        margin-left: 250px;
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
</style>
<div class="page">
<div class="welcome">
       <h1> <br/>Cognitive Science Lab</h1>
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



   <form method="post"> 
          
        

        <input type="submit" name="button3"
                class="button" value="Current Projects" /> 
    </form> 

<?php
        
       
        if(array_key_exists('button3', $_POST)) { 
            button3(); 
        }
        
        

    function button3()
    {
        echo "
        <br><br><br>
            <p style = 'font-size:15px;'>
            <a style = 'color:#3fada8'>Project Title</a>: “Studying facial feature processing associated with the uncanny valley effect”<br><br>

        <a style = 'color:#3fada8'>Principle Investigator</a>: Dr. Sonia Baloni Ray, Social Science and Humanities Department<br><br>

        <a style = 'color:#3fada8'>Co-Principal Investigator</a>: Dr. Jainendra Shukla, Computer Science and Engineering, Human Centered Design<br><br>
 <a style = 'color:#3fada8'>Student leading the project</a>: Ojasva Saxena, BTech Computer Science and Social Sciences, 4th Sememster<br><br>

        <a style = 'color:#3fada8'> Abstract</a>:
 Facial expressions are widely used for interpersonal communication as they reflect the internal affective or emotional state of an individual. We are highly dependent upon facial cues (expressions) in judging affective state of people around us, which therefore drive our level of social interactions with them. For e.g. if we are looking for an address and are lost, there are more chance that we approach an individual with a smile on his face for directions as compared to an individual with a frown. Gaze monitoring studies have shown emotion specific fixations in facial features like eyes & mouth, with initial fixation starting from upper nose region (Schrugin et al, 2014).<Br>

With an advent of technology our social interactions are no more restricted to humans but have been extended to androids also, which are programmed to imitate and portray human emotions. Human androids are widely used in many places as a substitute to perform variety of human tasks.  Mori, 1970 showed that humans respond to android change as a function of their feature similarity to humans and is popularly known as the ‘Uncanny Valley effect’. This project aims to perform a comparative study of gaze fixation between human and android facial features to understand the mechanism of the ‘Uncanny Valley effect’.
<div> 

<p style='float:left;'><strong><iframe alt='' src='./gallery/CognitiveScience/studyposter.pdf#view=FitH' style='float:left;height:360px;width:470px; border:1px solid; padding:2px; margin-left: 150px;' /></strong></iframe></p>

<br>
</div>

    
";
    }
    ?>


	<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>>