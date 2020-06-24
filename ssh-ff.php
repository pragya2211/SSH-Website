<?php include ('main-header.php'); ?>

<style>
	form
	{
		width:  1500px;
		padding: 15px 32px;
		display: block;


	}
	form input[value ="Economics"]
	{
	}
	form input[type="submit"]
	{
		font-size:15px;
		width:220px;
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




<form method="post"> 
      
        <input type="submit" name="button2"
                class="button" value="Economics" />

        <input type="submit" name="button3"
                class="button" value="Cognitive Science" /> 
        <input type="submit" name="button4"
                class="button" value="Sociology" />
        <input type="submit" name="button5"
                class="button" value="LACH" />
    </form>
    <br><br> 

<?php
        
        if(array_key_exists('button2', $_POST)) 
        { 
            button2(); 
        } 
        else if(array_key_exists('button3', $_POST)) 
        { 
            button3(); 
        }
        else if(array_key_exists('button4', $_POST)) 
        { 
            button4(); 
        }
        else if(array_key_exists('button5', $_POST)) 
        { 
            button5(); 
        } 
        else
        {
        	echo 
        	"
        
        		<div id='cards-container'>
        		<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/Manohar-Kumar.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='manohar.php' style='color:#3fada8; font-weight:600;' target='_blank'>Manohar Kumar</a></h2>
<p style='font-size: 16px;'>Head, Assistant Professor<br>Room No. B-207 <br/>(R & D Block)<br/><br>Email: <a href='mailto:manohar.kumar@iiitd.ac.in' style='color:#3fada8;'> manohar.kumar@iiitd.ac.in</a><br>Contact: 011 26907 557<a style='color: #3fada8;'><br><br>
Research Interests: </a> Ethics of digital dissent, digital citizenship, whistleblowing, civil disobedience, secrecy, and epistemic injustice.<br><br> To view Manohar Kumar's profile, <a href='manohar.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/aasim.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='aasim.php' style='color:#3fada8; font-weight:600;' target='_blank'>Aasim Khan</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-202 <br/>(R & D Block)<br/><br>Email: <a href='mailto:aasim@iiitd.ac.in' style='color:#3fada8;'> aasim@iiitd.ac.in</a><br>Contact: 011 26907 463<a style='color: #3fada8;'><br><br>
Research Interests: </a>Public sphere, Digital Citizenship and Civic Media in India.<br><br> To view Aasim Khan's profile, <a href='aasim.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/gaurava.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='gaurav.php' style='color:#3fada8; font-weight:600;' target='_blank'>Gaurav Arora</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-206 <br/>(R & D Block)<br/><br>Email: <a href='mailto:gaurav @iiitd.ac.in' style='color:#3fada8;'> gaurav@iiitd.ac.in</a><br>Contact: 011 26907 547<a style='color: #3fada8;'><br><br>
Research Interests: </a>Natural Resource & Agricultural Economics, Ecological Economics, Applied Econometrics, Industrial Organization, Applied Game Theory, Spatial Analyses, Remote Sensing<br><br> To view Gaurav Arora's profile, <a href='gaurav.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
				<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/gayatri.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

				<h2><a href='gayatri.php' style='color:#3fada8; font-weight:600;' target='_blank'>Gayatri Nair</a></h2>
				<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-212 <br/>(R & D Block)<br/><br>Email: <a href='mailto:gayatri@iiitd.ac.in' style='color:#3fada8;'> gayatri@iiitd.ac.in</a><br>Contact: 011 26907 362<a style='color: #3fada8;'><br><br>
				Research Interests: </a>Urban informal labour and livelihood patterns with an emphasis on the question of technology, caste and gender<br><br> To view Gayatri Nair's profile, <a href='gayatri.php' target='_blank'>click here</a></p>
				</div>
				<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/kanjilal.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='kirti.php' style='color:#3fada8; font-weight:600;' target='_blank'>Kiriti Kanjilal</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-208 <br/>(R & D Block)<br/><br>Email: <a href='mailto:kanjilal@iiitd.ac.in' style=color:#3fada8;'> kanjilal@iiitd.ac.in</a><br>Contact: 011 26907 558<a style='color: #3fada8;'><br><br>
Research Interests: </a>Microeconomics, game theory, industrial organization, environmental economics and behavioral economics<br><br> To view Kiriti Kanjilal's profile, <a href='kirti.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/mrinmoy.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='mrinmoy.php' style='color:#3fada8; font-weight:600;' target='_blank'>Mrinmoy Chakrabarty</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. A-202 <br/>(R & D Block)<br/><br>Email: <a href='mailto:mrinmoy@iiitd.ac.in' style='color:#3fada8;'> mrinmoy@iiitd.ac.in</a><br>Contact: 011 26907 363<a style='color: #3fada8;'><br><br>
Research Interests: </a>Affective Cognitive Neuroscience, Visual-Spatial Cognition, Autism Spectrum Disorders, Learning-Memory<br><br> To view Mrinmoy Chakrabarty's profile, <a href='mrinmoy.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/nishad.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='nishad.php' style='color:#3fada8; font-weight:600;' target='_blank'>Nishad Patnaik</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. A-205 <br/>(R & D Block)<br/><br>Email: <a href='mailto:nishad@iiitd.ac.in' style='color:#3fada8;'> nishad@iiitd.ac.in</a><br>Contact: 011 26907 364<a style='color: #3fada8;'><br><br>
Research Interests: </a>Kantian transcendental Idealism, Husserlian phenomenology, Social and Political Philosophy<br><br> To view Nishad Patnaik's profile, <a href='nishad.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/paro.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='paro.php' style='color:#3fada8; font-weight:600;' target='_blank'>Paro Mishra</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-209 <br/>(R & D Block)<br/><br>Email: <a href='mailto:paro.mishra@iiitd.ac.in' style='color:#3fada8;'> paro.mishra@iiitd.ac.in</a><br>Contact: 011 26907 570<a style='color: #3fada8;'><br><br>
Research Interests: </a>Demographic Anthropology, Family and Kinship, Transnationalism, Gender and Technology and Media Representation<br><br> To view Paro Mishra's profile, <a href='paro.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/praveen.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='praveen.php' style='color:#3fada8; font-weight:600;' target='_blank'>Praveen Priyadarshi</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. A-203 <br/>(R & D Block)<br/><br>Email: <a href='mailto:praveen@iiitd.ac.in' style='color:#3fada8;'> praveen@iiitd.ac.in</a><br>Contact: 011 26907 359<a style='color: #3fada8;'><br><br>
Research Interests: </a>Distinctiveness of everyday political practices in new urban spaces.<br><br> To view Praveen Priyadarshi's profile, <a href='praveen.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/rakeshc.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='rakesh.php' style='color:#3fada8; font-weight:600;' target='_blank'>Rakesh Chaturvedi</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-205 <br/>(R & D Block)<br/><br>Email: <a href='mailto:rakesh@iiitd.ac.in' style='color:#3fada8;'> rakesh@iiitd.ac.in</a><br>Contact: 011 26907 570<a style='color: #3fada8;'><br><br>
Research Interests: </a>Microeconomic Theory and Game Theory<br><br> To view Rakesh Chaturvedi's profile, <a href='rakesh.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/shireen.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='shireen.php' style='color:#3fada8; font-weight:600;' target='_blank'>Shireen Mirza</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. A-204 <br/>(R & D Block)<br/><br>Email: <a href='mailto:shireen@iiitd.ac.in' style='color:#3fada8;'> shireen@iiitd.ac.in</a><br>Contact: 011 26907 365<a style='color: #3fada8;'><br><br>
Research Interests: </a>Waste, Anthropocene; Climate Change; Sociology of Risk, Science, Technology & Society; Stigma and Contamination; Labour and Ritual Practice<br><br> To view Shireen Mirza's profile, <a href='shireen.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/smriti.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='smriti.php' style='color:#3fada8; font-weight:600;' target='_blank'>Smriti Singh</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-211 <br/>(R & D Block)<br/><br>Email: <a href='mailto:smriti@iiitd.ac.in' style='color:#3fada8;'> smriti@iiitd.ac.in</a><br>Contact: 011 26907 361<a style='color: #3fada8;'><br><br>
Research Interests: </a>Social Media, Information Technology and Urban Middle Class, Virtual Community and Solidarity, Privacy, Surveillance and Information<br><br> To view Smriti Singh's profile, <a href='smriti.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/sonia.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='sonia.php' style='color:#3fada8; font-weight:600;' target='_blank'>Sonia Baloni Ray</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-210 <br/>(R & D Block)<br/><br>Email: <a href='mailto:sonia@iiitd.ac.in' style='color:#3fada8;'> sonia@iiitd.ac.in</a><br>Contact: 011 26907 424<a style='color: #3fada8;'><br><br>
Research Interests: </a>Role of attention in visual processing, studying mechanisms of emotion and motion perception<br><br> To view Sonia Baloni Ray's profile, <a href='sonia.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/souvik.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='souvik.php' style='color:#3fada8; font-weight:600;' target='_blank'>Souvik Dutta</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-203 <br/>(R & D Block)<br/><br>Email: <a href='mailto:souvik@iiitd.ac.in' style='color:#3fada8;'> souvik@iiitd.ac.in</a><br>Contact: 011 26907 536<a style='color: #3fada8;'><br><br>
Research Interests: </a>Political economy, microfinance and economics of digital marketing<br><br> To view Souvik Dutta's profile, <a href='souvik.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/ratna-suri.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='ratan.php' style='color:#3fada8; font-weight:600;' target='_blank'>Venkata Ratnadeep Suri</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-204 <br/>(R & D Block)<br/><br>Email: <a href='mailto:ratan.suri@iiitd.ac.in' style='color:#3fada8;'> ratan.suri@iiitd.ac.in</a><br>Contact: 011 26907 445<a style='color: #3fada8;'><br><br>
Research Interests: </a>Knowledge work contexts, health contexts, information seeking, and the cognition of information <br><br> To view Venkata Ratnadeep Suri's profile, <a href='ratan.php' target='_blank'>click here</a></p>
</div>
</div>

<h2><p style='margin-left: 460px;'>Visiting Faculty</p></h2>

<div id='cards-container'>



<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='./images/amrit.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='amrit.php' style='color:#3fada8; font-weight:600;' target='_blank'>Amrit Srinivasan</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. <br/>(R & D Block)<br/><br>Email: <a href='mailto:amrit@iiitd.ac.in' style='color:#3fada8;'> amrit@iiitd.ac.in</a><br>Contact: <a style='color: #3fada8;'><br><br>
Research Interests: </a>The comparative study of knowledge and culture; violence, civil society and the state; sustainability and lifestyle change; women's work, family and the professions; Information Technology and the Indian service economy <br><br> To view Amrit Srinivasan's profile, <a href='amrit.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/manohar.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='manohar_vf.php' style='color:#3fada8; font-weight:600;' target='_blank'>Manohar Khushalani</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. B-306 <br/>(R & D Block)<br/><br>Email: <a href='mailto:manohar@iiitd.ac.in' style='color:#3fada8;'> manohar@iiitd.ac.in</a><br>Contact:011-26907492 <a style='color: #3fada8;'><br><br>
Research Interests: </a>Former Director, Environment and Sociology, at the National Water Academy, Khadakwasla, & Member Secretary, National Environmental Monitoring Committee for River Valley Projects <br><br> To view Manohar Khushalani's profile, <a href='manohar_vf.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='./images/Pankaj.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='pankaj.php' style='color:#3fada8; font-weight:600;' target='_blank'>Pankaj Vajpayee</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. B-308-3(a) <br/>(R & D Block)<br/><br>Email: <a href='mailto:pvajpayee@iiitd.ac.in' style='color:#3fada8;'> pvajpayee@iiitd.ac.in</a><br>Contact:011-2690 7515 <a style='color: #3fada8;'><br><br>
Research Interests: </a>Has over 27 years of corporate experience primarily in the field of investment banking and portfolio investment advisory activities. <br><br> To view Pankaj Vajpayee's profile, <a href='pankaj.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/payel.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='payel.php' style='color:#3fada8; font-weight:600;' target='_blank'> Payel C Mukherjee</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. A-219 <br/>(R & D Block)<br/><br>Email: <a href='mailto:payel@iiitd.ac.in' style='color:#3fada8;'> payel@iiitd.ac.in</a><br>Contact: 011-26907-354<a style='color: #3fada8;'><br><br>
Research Interests: </a>Theories of Cosmopolitanism, Home, and History of Ideas in South Asian Studies <br><br> To view  Payel C Mukherjee's profile, <a href='payel.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/shweta.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='shweta.php' style='color:#3fada8; font-weight:600;' target='_blank'> Shweta Singh</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. B-306 <br/>(R & D Block)<br/><br>Email: <a href='mailto:shweta.singh@iiitd.ac.in' style='color:#3fada8;'> shweta.singh@iiitd.ac.in</a><br>Contact: 011-26907492<a style='color: #3fada8;'><br><br>
Research Interests: </a>Theories of reasons in moral decision making, Interplay of moral particularism in Buddhist Ethics, and philosophy of critical thinking <br><br> To view  Shweta Singh's profile, <a href='shweta.php' target='_blank'>click here</a></p>
</div>
</div>

<h2><p style='margin-left: 460px;'>Adjunct Faculty</p></h2>

<div id='cards-container'>


<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/atreyee.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='' style='color:#3fada8; font-weight:600;' target='_blank'> Atreyee Bhattacharya</a></h2>
<p style='font-size: 16px;'><br>Email: <a href='mailto:atreyee.bhattacharya@colorado.edu' style='color:#3fada8;'>atreyee.bhattacharya@colorado.edu</a><br><br>Website: <a href='https://atreyeebhattacharya.typepad.com/atreyee_bhattacharya/' style='color:#3fada8 '>https://atreyeebhattacharya.typepad.com/atreyee_bhattacharya/</a><br><br><a style='color: #3fada8;'>Research Interests: </a> Climate variability of arid and semi-arid regions, historical climate, paleoclimate, coastal erosion using corals and microplastic accumulation in coastal environments. <br><br></p>
</div>




        	";
        }



        function button2() { 
            echo "
            
            <div id='cards-container'>
            <div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/gaurava.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='gaurav.php' style='color:#3fada8; font-weight:600;' target='_blank'>Gaurav Arora</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-206 <br/>(R & D Block)<br/><br>Email: <a href='mailto:gaurav @iiitd.ac.in' style='color:#3fada8;'> gaurav@iiitd.ac.in</a><br>Contact: 011 26907 547<a style='color: #3fada8;'><br><br>
Research Interests: </a>Natural Resource & Agricultural Economics, Ecological Economics, Applied Econometrics, Industrial Organization, Applied Game Theory, Spatial Analyses, Remote Sensing<br><br> To view Gaurav Arora's profile, <a href='gaurav.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/kanjilal.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='kirti.php' style='color:#3fada8; font-weight:600;' target='_blank'>Kiriti Kanjilal</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-208 <br/>(R & D Block)<br/><br>Email: <a href='mailto:kanjilal@iiitd.ac.in' style=color:#3fada8;'> kanjilal@iiitd.ac.in</a><br>Contact: 011 26907 558<a style='color: #3fada8;'><br><br>
Research Interests: </a>Microeconomics, game theory, industrial organization, environmental economics and behavioral economics<br><br> To view Kiriti Kanjilal's profile, <a href='kirti.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/rakeshc.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='rakesh.php' style='color:#3fada8; font-weight:600;' target='_blank'>Rakesh Chaturvedi</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-205 <br/>(R & D Block)<br/><br>Email: <a href='mailto:rakesh@iiitd.ac.in' style='color:#3fada8;'> rakesh@iiitd.ac.in</a><br>Contact: 011 26907 570<a style='color: #3fada8;'><br><br>
Research Interests: </a>Microeconomic Theory and Game Theory<br><br> To view Rakesh Chaturvedi's profile, <a href='rakesh.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/souvik.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='souvik.php' style='color:#3fada8; font-weight:600;' target='_blank'>Souvik Dutta</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-203 <br/>(R & D Block)<br/><br>Email: <a href='mailto:souvik@iiitd.ac.in' style='color:#3fada8;'> souvik@iiitd.ac.in</a><br>Contact: 011 26907 536<a style='color: #3fada8;'><br><br>
Research Interests: </a>Political economy, microfinance and economics of digital marketing<br><br> To view Souvik Dutta's profile, <a href='souvik.php' target='_blank'>click here</a></p>
</div>

</div>

<h2><p style='margin-left: 460px;'>Visiting Faculty</p></h2>

<div id='cards-container'>


<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='./images/Pankaj.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='pankaj.php' style='color:#3fada8; font-weight:600;' target='_blank'>Pankaj Vajpayee</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. B-308-3(a) <br/>(R & D Block)<br/><br>Email: <a href='mailto:pvajpayee@iiitd.ac.in' style='color:#3fada8;'> pvajpayee@iiitd.ac.in</a><br>Contact:011-2690 7515 <a style='color: #3fada8;'><br><br>
Research Interests: </a>Has over 27 years of corporate experience primarily in the field of investment banking and portfolio investment advisory activities. <br><br> To view Pankaj Vajpayee's profile, <a href='pankaj.php' target='_blank'>click here</a></p>
</div>


</div>
            "; 
        } 

	    function button3()
	    {
	    	echo 
	    	"
	    
	    		<div id='cards-container'>
	    		<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/mrinmoy.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='mrinmoy.php' style='color:#3fada8; font-weight:600;' target='_blank'>Mrinmoy Chakrabarty</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. A-202 <br/>(R & D Block)<br/><br>Email: <a href='mailto:mrinmoy@iiitd.ac.in' style='color:#3fada8;'> mrinmoy@iiitd.ac.in</a><br>Contact: 011 26907 363<a style='color: #3fada8;'><br><br>
Research Interests: </a>Affective Cognitive Neuroscience, Visual-Spatial Cognition, Autism Spectrum Disorders, Learning-Memory<br><br> To view Mrinmoy Chakrabarty's profile, <a href='mrinmoy.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/sonia.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='sonia.php' style='color:#3fada8; font-weight:600;' target='_blank'>Sonia Baloni Ray</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-210 <br/>(R & D Block)<br/><br>Email: <a href='mailto:sonia@iiitd.ac.in' style='color:#3fada8;'> sonia@iiitd.ac.in</a><br>Contact: 011 26907 424<a style='color: #3fada8;'><br><br>
Research Interests: </a>Role of attention in visual processing, studying mechanisms of emotion and motion perception<br><br> To view Sonia Baloni Ray's profile, <a href='sonia.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/ratna-suri.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='ratan.php' style='color:#3fada8; font-weight:600;' target='_blank'>Venkata Ratnadeep Suri</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-204 <br/>(R & D Block)<br/><br>Email: <a href='mailto:ratan.suri@iiitd.ac.in' style='color:#3fada8;'> ratan.suri@iiitd.ac.in</a><br>Contact: 011 26907 445<a style='color: #3fada8;'><br><br>
Research Interests: </a>Knowledge work contexts, health contexts, information seeking, and the cognition of information <br><br> To view Venkata Ratnadeep Suri's profile, <a href='ratan.php' target='_blank'>click here</a></p>
</div>


</div>
	    
	    	";

	    }
	    function button4()
	    {
	    	echo 
	    	"
	    		<div id='cards-container'>
	    		<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
				<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/gayatri.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

				<h2><a href='gayatri.php' style='color:#3fada8; font-weight:600;' target='_blank'>Gayatri Nair</a></h2>
				<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-212 <br/>(R & D Block)<br/><br>Email: <a href='mailto:gayatri@iiitd.ac.in' style='color:#3fada8;'> gayatri@iiitd.ac.in</a><br>Contact: 011 26907 362<a style='color: #3fada8;'><br><br>
				Research Interests: </a>Urban informal labour and livelihood patterns with an emphasis on the question of technology, caste and gender<br><br> To view Gayatri Nair's profile, <a href='gayatri.php' target='_blank'>click here</a></p>
				</div>
				<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/paro.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='paro.php' style='color:#3fada8; font-weight:600;' target='_blank'>Paro Mishra</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-209 <br/>(R & D Block)<br/><br>Email: <a href='mailto:paro.mishra@iiitd.ac.in' style='color:#3fada8;'> paro.mishra@iiitd.ac.in</a><br>Contact: 011 26907 570<a style='color: #3fada8;'><br><br>
Research Interests: </a>Demographic Anthropology, Family and Kinship, Transnationalism, Gender and Technology and Media Representation<br><br> To view Paro Mishra's profile, <a href='paro.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/shireen.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='shireen.php' style='color:#3fada8; font-weight:600;' target='_blank'>Shireen Mirza</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. A-204 <br/>(R & D Block)<br/><br>Email: <a href='mailto:shireen@iiitd.ac.in' style='color:#3fada8;'> shireen@iiitd.ac.in</a><br>Contact: 011 26907 365<a style='color: #3fada8;'><br><br>
Research Interests: </a>Waste, Anthropocene; Climate Change; Sociology of Risk, Science, Technology & Society; Stigma and Contamination; Labour and Ritual Practice<br><br> To view Shireen Mirza's profile, <a href='shireen.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/smriti.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='smriti.php' style='color:#3fada8; font-weight:600;' target='_blank'>Smriti Singh</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-211 <br/>(R & D Block)<br/><br>Email: <a href='mailto:smriti@iiitd.ac.in' style='color:#3fada8;'> smriti@iiitd.ac.in</a><br>Contact: 011 26907 361<a style='color: #3fada8;'><br><br>
Research Interests: </a>Social Media, Information Technology and Urban Middle Class, Virtual Community and Solidarity, Privacy, Surveillance and Information<br><br> To view Smriti Singh's profile, <a href='smriti.php' target='_blank'>click here</a></p>
</div>

<h2><p style='margin-left: 250px;'>Visiting Faculty</p></h2>

<div id='cards-container'>


<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='./images/amrit.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='amrit.php' style='color:#3fada8; font-weight:600;' target='_blank'>Amrit Srinivasan</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. <br/>(R & D Block)<br/><br>Email: <a href='mailto:amrit@iiitd.ac.in' style='color:#3fada8;'> amrit@iiitd.ac.in</a><br>Contact: <a style='color: #3fada8;'><br><br>
Research Interests: </a>The comparative study of knowledge and culture; violence, civil society and the state; sustainability and lifestyle change; women's work, family and the professions; Information Technology and the Indian service economy <br><br> To view Amrit Srinivasan's profile, <a href='amrit.php' target='_blank'>click here</a></p>
</div>

				</div>
	    	";
	    }
	    function button5()
	    {
	    	echo "
	    	
	    	<div id='cards-container'><div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/Manohar-Kumar.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='manohar.php' style='color:#3fada8; font-weight:600;' target='_blank'>Manohar Kumar</a></h2>
<p style='font-size: 16px;'>Head, Assistant Professor<br>Room No. B-207 <br/>(R & D Block)<br/><br>Email: <a href='mailto:manohar.kumar@iiitd.ac.in' style='color:#3fada8;'> manohar.kumar@iiitd.ac.in</a><br>Contact: 011 26907 557<a style='color: #3fada8;'><br><br>
Research Interests: </a> Ethics of digital dissent, digital citizenship, whistleblowing, civil disobedience, secrecy, and epistemic injustice.<br><br> To view Manohar Kumar's profile, <a href='manohar.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/aasim.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='aasim.php' style='color:#3fada8; font-weight:600;' target='_blank'>Aasim Khan</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. B-202 <br/>(R & D Block)<br/><br>Email: <a href='mailto:aasim@iiitd.ac.in' style='color:#3fada8;'> aasim@iiitd.ac.in</a><br>Contact: 011 26907 463<a style='color: #3fada8;'><br><br>
Research Interests: </a>Public sphere, Digital Citizenship and Civic Media in India.<br><br> To view Aasim Khan's profile, <a href='aasim.php' target='_blank'>click here</a></p>
</div> 

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/nishad.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='nishad.php' style='color:#3fada8; font-weight:600;' target='_blank'>Nishad Patnaik</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. A-205 <br/>(R & D Block)<br/><br>Email: <a href='mailto:nishad@iiitd.ac.in' style='color:#3fada8;'> nishad@iiitd.ac.in</a><br>Contact: 011 26907 364<a style='color: #3fada8;'><br><br>
Research Interests: </a>Kantian transcendental Idealism, Husserlian phenomenology, Social and Political Philosophy<br><br> To view Nishad Patnaik's profile, <a href='nishad.php' target='_blank'>click here</a></p>
</div>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/praveen.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='praveen.php' style='color:#3fada8; font-weight:600;' target='_blank'>Praveen Priyadarshi</a></h2>
<p style='font-size: 16px;'>Assistant Professor<br>Room No. A-203 <br/>(R & D Block)<br/><br>Email: <a href='mailto:praveen@iiitd.ac.in' style='color:#3fada8;'> praveen@iiitd.ac.in</a><br>Contact: 011 26907 359<a style='color: #3fada8;'><br><br>
Research Interests: </a>Distinctiveness of everyday political practices in new urban spaces.<br><br> To view Praveen Priyadarshi's profile, <a href='praveen.php' target='_blank'>click here</a></p>
</div>
</div>

<h2><p style='margin-left: 460px;'>Visiting Faculty</p></h2>

<div id='cards-container'>
<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/manohar.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='manohar_vf.php' style='color:#3fada8; font-weight:600;' target='_blank'>Manohar Khushalani</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. B-306 <br/>(R & D Block)<br/><br>Email: <a href='mailto:manohar@iiitd.ac.in' style='color:#3fada8;'> manohar@iiitd.ac.in</a><br>Contact:011-26907492 <a style='color: #3fada8;'><br><br>
Research Interests: </a>Former Director, Environment and Sociology, at the National Water Academy, Khadakwasla, & Member Secretary, National Environmental Monitoring Committee for River Valley Projects <br><br> To view Manohar Khushalani's profile, <a href='manohar_vf.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/payel.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='payel.php' style='color:#3fada8; font-weight:600;' target='_blank'> Payel C Mukherjee</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. A-219 <br/>(R & D Block)<br/><br>Email: <a href='mailto:payel@iiitd.ac.in' style='color:#3fada8;'> payel@iiitd.ac.in</a><br>Contact:011-26907-354 <a style='color: #3fada8;'><br><br>
Research Interests: </a>Theories of Cosmopolitanism, Home, and History of Ideas in South Asian Studies <br><br> To view  Payel C Mukherjee's profile, <a href='payel.php' target='_blank'>click here</a></p>
</div>

<div class='card rteleft facultycard' style='height:260px; width:1000px;'> 
<p style='float:left;'><strong><img alt='' src='https://www.iiitd.ac.in/sites/default/files/images/faculty/shweta.jpg' style='float:left;height:150px; border:1px solid; padding:2px;' /></strong></p>

<h2><a href='shweta.php' style='color:#3fada8; font-weight:600;' target='_blank'> Shweta Singh</a></h2>
<p style='font-size: 16px;'>Visiting Faculty<br>Room No. B-306 <br/>(R & D Block)<br/><br>Email: <a href='mailto:shweta.singh@iiitd.ac.in' style='color:#3fada8;'> shweta.singh@iiitd.ac.in</a><br>Contact: 011-26907492<a style='color: #3fada8;'><br><br>
Research Interests: </a>Theories of reasons in moral decision making, Interplay of moral particularism in Buddhist Ethics, and philosophy of critical thinking <br><br> To view  Shweta Singh's profile, <a href='shweta.php' target='_blank'>click here</a></p>
</div>



</div>
		";
	    }
	    ?>









	<?php include ('main-footer.php'); ?>
	
</div><!--content End-->

</div><!--Page Container End--> 
   
</body>
</html>