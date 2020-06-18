<!DOCTYPE html>
<html>
<style>
	form
	{
		width:  = 1500px;
		padding: 15px 32px;
		display: block;


	}
	form input[type="submit"]
	{
		font-size:15px;
		width:180px;
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
<body>

<?php include ('main-header.php'); ?>
<div class="page">
<h2> Sonia Baloni Ray  </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/sonia.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong>     </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
<p style="margin-left: 200px">
PhD (2012), Georg August University, Goettingen, Germany<br>Dr. Sonia Baloni Ray is a Ph.D. degree holder from German Primate Center, Georg August University, Goettingen, Germany in 2012. She did her post-doctoral research at Centre of Behavioural and Cognitive Science, University of Allahabad. During her post-doctoral tenure she received DST-CSRI (Department of Science and Technology, Govt. Of India- Cognitive Science Research Initiative) fellowship. She is interested in studying the mechanisms of attention that are involved in the processing of visual information in our surrounding. She has experience in psychophysics, EEG and eye-tracking methodologies.<br><br> Website: <a href="https://sites.google.com/iiitd.ac.in/sonia-baloni-ray/home" style="color: #3fada8;">https://sites.google.com/iiitd.ac.in/sonia-baloni-ray/home</a><br><br><br></p>
    
    <form method="post"> 
       <input type="submit" name="button2"
                class="button" value="Publications" />

        <input type="submit" name="button3"
                class="button" value="Courses" /> 
        <input type="submit" name="button4"
                class="button" value="Research Projects" />
        <input type="submit" name="button5"
                class="button" value="Events" />
    </form> 

<?php
        if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        else if(array_key_exists('button3', $_POST)) { 
            button3(); 
        }
        else if(array_key_exists('button4', $_POST)) { 
            button4(); 
        }
        else if(array_key_exists('button5', $_POST)) { 
            button5(); 
        } 
        function button2() { 
            echo "<br/><br/><br/>1) Krishnamoorthy, V., Jain, V., Cherukuri, P., Baloni, S., &amp; Dhingra, N. K. (2008).
 Intravitreal injection of fluorochrome-conjugated peanut agglutinin results in
specific and reversible labeling of mammalian cones in vivo.
Investigative ophthalmology &amp; visual science, 49(6), 2643-2650.<br/><br/>2)Xue, C., Kaping, D., Ray, S. B., Krishna, B. S., &amp; Treue, S. (2016). ‘Spatial
attention reduces burstiness in macaque visual cortical area MST’. Cerebral
Cortex<br/><br/>

3) Mishra, M. V., Ray, S. B., &amp; Srinivasan, N. (2018). Cross-cultural emotion
recognition and evaluation of Radboud faces database with an Indian
sample. PloS one, 13(10), e0203959.<br/><br/>

4)Ray, S. B. (2018). Applications of Neuroscience for Managing Affective State at
Workplace. NHRD Network Journal, 0974173918799138.<br/><br/>
5)Ray, S. B., Mishra, M. V., &amp; Srinivasan, N. (2020). Attentional blink with
emotional faces depends on emotional expressions: a relative positive valence
advantage. Cognition and Emotion, 1-20. "; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1. Attention and Perception :</i></u><br/><br/><br>Semester: Winter 2020<br>
Attention is one of the major cognitive processes responsible for making us achieve our day-to-day
goals. This course-work aims to introduce fundamental principles of how attention helps us to
perceive the world around us. Students will be introduced to various experimental paradigms and
theories (both classical and contemporary) used to study effects and limitation of attention on human
behavior and perception. With the balanced practical sessions and assignments students will develop a fundamental understanding of designing behavioral
experiments to study various cognitive processes.<br/><br/><br/><br/>

<u><i>2.Introduction to Psychology:</u></i><br/><br/><br/>
Semester: Monsoon 2020<br>
This course is about how and why people think, feel and behave. Students will
learn and apply theories of mind, and behavior. Students will learn to think more
critically and scientifically about what makes people think, feel, and behave. This
course offers students an engaging introduction to the essential topics in
psychology. Throughout this study of human behavior and the mind, students will
gain insight into the history of the field of psychology, as well as explore current
theories and issues in areas such as cognition and perception. The main goals of
this course are to acquaint students with different areas contained within
psychology, to provide them with some of the major concepts of each area. Basic

topics that would be covered would be historical and contemporary psychology,
including various perspectives: biological, Psychoanalytic (Freudian),  behavioral
(Skinner, Pavlov, and other theories), cognitive, Transactional analysis. Some
practical topics like Memory, Personality, cognition and Cognitive behavior
therapy  would also be covered. Students will also learn the concepts of
Intelligence. Computational Psychology, Computational Neuroscience and
Technological research in interventions would also be explored.<br/><br/>";
    }
    function button4()
    {
    	echo "
        <br><br><br>
        <p align:'justify' style: 'font-size:15px;'>1) Project Title: “Studying facial feature processing associated with the
uncanny valley effect”<br>
         <a style:'color:#3fada8;font-size:16px;'>Student leading the project:</a>Ojasva Saxena<br>
         BTech Computer Science and Social Sciences, 4 th Sememster
         </p>
         <br><br>
        <p align:'justify' style: 'font-size:15px;'><a style:'color:#3fada8'>2) Project Title:</a> “Neural correlates of attention in macaque visual cortex”<br>
        Student leading the project:
         Bhavey Wadhwa<br>
         BTech Computer Science and Mathematics, 4 th Sememster
         </p>
         <br><br>
                 <p align:'justify' style: 'font-size:15px;'><a style:'color:#3fada8'>3) Project Title:</a> “Studying relationship between pupil dilation and attention
in humans'<br>
         <a style:'color:#3fada8;font-size:16px;'>Student leading the project:</a>
        Ishaan Arora<br>
         BTech Computer Science and Engineering, 4 th Sememster
         </p>
         <br><br><br>

        ";
    }
    function button5()
    {
    	echo "";
    }
    ?>







<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>