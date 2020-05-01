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
<h2> Shweta Singh </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/shweta.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<p style="margin-left: 200px">Currently a Lecturer of Philosophy at IIIT-Delhi<br><br><br><br><br><br><br><br><br><br><br></p>
    
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
            echo "<br/><br/><br/><u>Book Reviews</u
                ><br><br><br>
            1) Brij Mohan’s (Louisiana State University) Seven Pillars of Social Practice ,Journal of Advanced
Research in Journalism & Mass Communication Volume 6, Issue 3 - 2019, Pg. No. 24-25:
<a href= 'http://adrjournalshouse.com/index.php/Journalism-MassComm/article/view/711'>Link </a><br/><br/>
2)B. Mohan’s (Louisiana State University) Development, Poverty of Culture and Social
Policy, Poverty and Public Policy, Wiley, USA. (Published).<a href= 'http:// onlinelibrary.wiley.com/
doi/10.1002/pop4.96/abstract'>Link </a><br/><br/>

3) B. Mohan’s (Louisiana State University) Global Frontiers of Social Development Theory
and Practice: Climate, Economy, and Justice, Poverty and Public Policy, Wiley, USA.
(Published).<a href= http://onlinelibrary.wiley.com/doi/10.1002/pop4.126/abstract>Link </a><br/><br/><br/><br/>
<u>Journal Articles</u><br/><br/><br>
1)‘Gandhi’s Choice: Function of Convenience?’ Social Philosophy Today, USA, Volume 31.<br><br>
2)‘Particularism in Buddhism: Morality without Frames?’ International Journal of
Multidisciplinary Educational Research, ISSN No. 2277-7881<br><br>
3)‘Examining Nationality as a taken-for-granted Frame of Reference’ Society for Positive
Philosophy and Interdisciplinary Studies, 2nd Edition, May 2014.<br><br>
4)Article titled “Nietzsche and the free play of self-destructive cogitation” published in the Delhi
University Philosophy Journal, Vol. I, March 2008.<br><br><br><br>
<u>Book Chapters</u><br><br><br>
1)‘Sartre,’ in The Ethics of Subjectivity, in Benda Hofmeyer & Elvis Imafidon (editors), published
by Palgrave Macmillan. (Forthcoming, February 2021)"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1. Theory and Practice of Engineering Ethics</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:SSH222<br>
The course aims at orienting the students to the theory and practice of meta-
ethics, using a multidisciplinary and cross cultural approach. The goal is to help engineering and IT

professionals think of ethics as part of the very process of their work. The course does not provide
solutions to critical dilemmas. It does not claim to create ‘moral’ people, or ethical engineers.
Rather, it encourages critical thinking about ethical issues and decision making. Students will learn
to apply meta ethical theories to IT scenarios. We will use a mixed instructional methodology, that
includes lecture, discussion, Q&A, one-on-one dialogue, learning team activities, handouts, library
reference materials, and video clips.<br/><br/><br/><br/>
<u><i>2.Computers, Information Ethics and Society</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:SSH224<br>
This course is aimed at teaching students about ethical problems that computer
scientists face, the codes of ethics of computing professional societies, legal issues involved in
technology, and the social implications of computers, computing, and other digital technologies..<br/><br/><br/><br/>
<u><i>3. Introduction to Philosophy</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:SSH121<br>
Furnish students with an overview of the different branches of philosophy
(both Indian and Western). In the process, the student will make the acquaintance of epistemology,
metaphysics, logic, ethics, philosophy of religion and more. A major focus of the course is to
remove the false mystique surrounding philosophy and to give the student a clear grounding in the
essentials of the discipline..<br/><br/><br/><br/>
<u><i>4. Perspectives on Knowledge</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:SSH223<br>
The basic objective for this course is to broaden and deepen students’
understanding of issues concerning knowledge.The course is a basic introduction to epistemology
(theory of knowledge). A major focus of the course is to address philosophical theories of
knowledge. Additionally, we will address issues of knowledge that have moved from specialized
reflections to general social discourse in the information age. The course culminates with
discussions on the contemporary context of knowledge, where the professional training that the
students receive in IT can be linked to broader social and cultural currents.<br/><br/><br/><br/>
<u><i>5. Social and Political Philosophy</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:SSH221<br><br/><br/><br/><br/>";


    }
    function button4()
    {
    	echo "
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