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
<h2> Smriti Singh </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/smriti.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong>     </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
<p style="margin-left: 200px;">
Dr. Smriti Singh has completed her PhD from the Jawaharlal Nehru University, New Delhi in 2017. She has been interested in the broad area of Urban Sociology and Social Class. She has earned her M.Phil. and Postgraduate degree from Jawaharlal Nehru University, New Delhi and her Undergraduate degree from Lady Shri Ram College for Women, Delhi University. She is a Nehru-Fulbright Doctoral Scholar, 2015-2016 to University of Michigan, Ann Arbor, Michigan. She has previously taught at Ambedkar University, Delhi; Azim Premji University, Bengaluru; and Lady Shri Ram College for Women, Delhi University.
<br><br>
She has been UNICEF-KCCI intern, 2009 and has worked briefly with Katha, New Delhi and Butterflies, New Delhi. She has presented at various national and international conferences and has periodically endured the heartache of editorial and peer review. Her current research interest is in the broad areas of social media, information technology and urban middle class; virtual community and solidarity and; privacy, surveillance and technology. She prides herself in being a learner and an educator and is always psyched at the prospect of research suggestions and discussions over copious cups of tea-coffee. </p>
    
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
            echo "<br/><br/><br/>
            1) Authored “Becoming a Critical Pedagogue: Teacher Agency and Critical Theory”
in a book titled ‘Dynamics of Inclusive Classroom: Social Diversity, Inequality
and School Education in India’ published by the Orient Blackswan in September
2017. ISBN number is -978-93-52870-13-4.<br/><br/>
2)Authored“Discourses of Caste in the Classroom: Reflections from Under-
Graduate Teaching in a Delhi University College” in a book titled ‘Accessing
Higher Education: Footprints of Marginalised Groups’ published by Aakar Books,
New Delhi in June, 2017. ISBN number is -978-93-5002-485-0.<br/><br/>

3) Authored &quot;Dilemma of content strengthening in teacher education programme&quot;
Published in a book titled &#39;Pedagogic Trajectories&#39; published by Synergy Books
India in December 2015. ISBN number is - 978-93-82059-30-1.<br/><br/>
4)Authored Feminine; identity and feminism in Indian Classrooms&quot; Published in a
monograph titled “The Golden Jubilee National Conference on sustainable
development-a collective vision-2011” published by Institute of Home
Economics, University of Delhi.<br><br>
5)Drafted a chapter titled ‘Organisations and Institutions’ for a unit titled ‘Basic
Concepts in Sociology’, B.A. (Sociology) for School of Social Sciences, Indira
Gandhi National Open University (IGNOU) in August 2018.<br><br>
6)Drafted a chapter, titled ‘Gender and Education’, for a course on ‘Gender and
Society’, offered in 2nd year Masters Programme in Anthropology, by Discipline
of Anthropology, School of Social Sciences, Indira Gandhi National Open
University(IGNOU) in February, 2012."; 
        } 

    function button3()
    {
    	echo "";

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