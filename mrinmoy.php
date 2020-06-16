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
<h2> Mrinmoy Chakrabarty </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/mrinmoy.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
    <p style="margin-left: 200px">
Dr. Mrinmoy Chakrabarty carried out his doctoral research with a fellowship from the Interdisciplinary Program
for Biomedical Sciences of Osaka University, Japan and earned his Ph.D. with Distinction at Osaka University
Graduate School of Medicine in March 2017. He was a Post-Doctoral Research Fellow in the Dept. of
Rehabilitation for Brain Functions at National Rehabilitation Center for Persons with Disabilities, Japan [WHO
Collaborating Center] from April 2017 until joining IIIT-Delhi in December 2019. His present experimental
research employs psychophysics, psychophysiology and neuroimaging with computational data analysis to
study cognitive functions in samples of clinical as well as healthy human populations. Present areas of
research interest are Affective Cognitive Neuroscience, Visual-Spatial Cognition, Autism Spectrum Disorders,
Learning-Memory.<br><br><br><br> </p>
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
            echo "<br/><br/><br/>1) Mrinmoy Chakrabarty, Makoto Wada. Perceptual effects of fast and automatic visual ensemble statistics
from faces in individuals with typical development and autism spectrum conditions. Scientific Reports [Nature
Publishing Group], 10 (2169), 2020.<br/><br/>
2)Masakazu Ide, Takeshi Atsumi, Reiko Fukatsu, Mrinmoy Chakrabarty. Effects of emotion cues on visual
temporal resolution in individuals with autism spectrum disorders. 42 nd Annual Meeting of Japan Neuroscience
Society, Niigata, JAPAN – July 25, 2019<br/><br/>

3) Mrinmoy Chakrabarty, M.Wada. Perception of Visual Ensemble Statistics of Faces in Autism and Typically
Developing individuals. 42 nd Annual Meeting of Japan Neuroscience Society, Niigata, JAPAN – July 26, 2019<br/><br/>

4)Mrinmoy Chakrabarty, T. Fukui, M.Wada. Gaze behavior in individuals with Autism Spectrum Disorders
(ASD) triggered by facial eye – gaze cues. 41 st Annual Meeting of Japan Neuroscience Society, Kobe, JAPAN -
July 26, 2018<br/><br/>
5)M.Ide, T. Atsumi, M. Chakrabarty, K.Yasu., M. Wada. Neural correlates of a case of autism-spectrum
disorder with extraordinary higher temporal resolution to tactile stimuli, 2nd International Symposium on the
Science of Mental Time, Nara, Japan - September 12 -13, 2017<br><br> 
6)Mrinmoy Chakrabarty, Tamami Nakano, Shigeru Kitazawa (2017). Short latency allocentric control of
saccadic eye movements. Journal of Neurophysiology [American Physiological Society], 117(1), 376-387.<br><br>
7)Mrinmoy Chakrabarty, T. Nakano, S. Kitazawa. A Novel Utility of Allocentric coordinates in controlling
saccadic eye movements in humans. 38 th Annual Meeting of Japanese Neuroscience Society, Kobe, JAPAN -
July 29, 2015<br><br>
8)Mrinmoy Chakrabarty, Priyanka Bhat, Sweta Kumari, et al. Cortico hippocampal salvage in chronic
aluminum induced neurodegeneration by Celastrus paniculatus seed oil: neurobehavioural, biochemical,
histological study. Journal of Pharmacology and Pharmacotherapeutics 2012; 3: 53 - 63.<br><br>
9)Mrinmoy Chakrabarty, Vijay Thawani. Starting a pharmacovigilance center: Actions for implementation.
Journal of Pharmacology and Pharmacotherapeutics 2011; 2: 295 – 99<br><br>"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1. Learning and Memory</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:PSY306<br>
The course will introduce the students to the stages and mechanisms by which
environmental information is learned; how it flows from sensory receptors through sensory, short- term to long-
term memory, its storage and retrieval. Lectures and discussions will draw from published scientific evidence
mainly in the areas of behaviour, neuroimaging and neurophysiology to elucidate the organization and
implementation of memory in the brain that influences various aspects of human cognition. The course will
engage students to develop analytical thinking based on experimental data towards building capacity for
original ideation in this area of cognitive science that is relatable to social sciences and technology. It is
expected that at the end of the course the students are able to<br>
-describe historical antecedents, cognitive science methods for studying learning and memory<br>
-classify types of conditioning, learning, memory and explain their basic mechanisms<br>
-deconstruct data from cognitive science experiments /studies in learning and memory to justify their results<br>
-generate and articulate one experimentally testable idea in learning and memory.<br/><br/><br/><br/>
";

    }
    function button4()
    {
    	echo "";
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