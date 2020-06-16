<!DOCTYPE html>
<html>
<style>
	form
	{
		width:  1500px;
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
<h2> Manohar Kumar </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/Manohar-Kumar.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
<p style="margin-left: 200px">
Manohar Kumar completed his PhD in Political Theory from LUISS University, Rome in 2013. He
has a Masters in Development Studies from Tata Institute of Social Sciences, Mumbai and a
Bachelors in Economics from Hindu College, University of Delhi. He is the author of  ‘Speaking
Truth to Power. A Theory of Whistleblowing’ with Daniele Santoro. Prior to joining IIIT-Delhi,
Manohar held postdoctoral fellowships at IIT Delhi (2015-2017) and AMSE, Aix Marseille
University (2017-2018). His research interests are in Moral and Political Philosophy,  and
include issues like whistleblowing, civil disobedience, democratic secrecy, and epistemic
injustice, surveillance, digital citizenship and dissent.<br><br> Website: <a href="https://iiitd.academia.edu/ManoharKumar" style="color: #3fada8;">https://iiitd.academia.edu/ManoharKumar</a><br><br></p>
    
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

1) Speaking Truth to Power. A Theory of Whistleblowing with Daniele Santoro. Springer. 2018.
“A Justification of Whistleblowing”, Philosophy and Social Criticism, with Daniele Santoro. Vol 43,
No. 7, 2017.<br><br>

2) “A Right to Protection of Whistleblowers”, with Daniele Santoro, in Archibugi, D and A, Benli
(eds.). Claiming Rights in Europe: A European Citizenship in Practice. Routledge, Taylor and
Francis. 2017.</i><br><br>

3) “Civil Disobedience” for the Module on Philosophy of Law for e-pathshala of University Grants
Commission. 2015.<br/><br/>

4) “Liberty and Security” for the Module on Philosophy of Law for e-pathshala of University Grants
Commission. 2015<br/><br/>

5)“Secrecy” for the Module on Philosophy of Law for e-pathshala of University Grants Commission.
2015<br/><br/>
6)Policy Recommendation on an European Directive on Whistleblowing for the Project A Change of
Direction: Fostering Whistleblowing in the fight against Corruption in Europe. 2018 
Policy Survey on the Existing Whistleblowing Legislations in European Member States for the
Project A Change of Direction: Fostering Whistleblowing in the fight against Corruption in Europe.
2018<br><br>
7)“Blowing the Whistle on Corruption - Report”, Campaign for an European Directive on
Whistleblowing”, in collaboration with Libera and Restarting the Future. 2014. 
Book Review of Adam Przeworski, Democracy and the Limits of Self-Government, Plurilogue. 2013
 “Secrecy and the failure of DNC”, Daily Nous series ‘Philosophers On’ DNC Leaks. 2016.


"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1.Social and Political Philosophy</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:SSH221<br><br>This course will introduce students to some of the fundamental debates in
contemporary social and political philosophy. It will cover a range of
concepts, theories, ideas, and thinkers, and their relevance in current
contexts. The course will have two parts. In the first part we will explore the
philosophical debates in the Western Political Theory tradition and discuss
philosophical positions on Utilitarianism, Equality, Libertarianism, Marxism,
Multiculturism, and Feminism. The second part of the course will focus on
debates in the Indian political theoretical tradition. This part will engage with
debates on religion, freedom, and equality within the Indian context and
apply it to important contemporary social and political questions.
<br/><br/><br/><br/>

<u><i>2. Applied Ethics</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:SSH321<br><br>
This course will introduce students to some of the fundamental debates in
Applied Ethics. Applied Ethics offers a way to comprehend and analyse the
fundamental moral and ethical problems of our times and generate
arguments to justify ethical claims.  The course will begin by introducing
students to the major ethical theories like consequentialism, deontology, and
virtue ethics. It will then demonstrate how these theories can be used to both
understand and address some of the major ethical issues . The overall
discussion in the course across semesters will include, but will not be limited
to, debates in environmental ethics, ethics of information technology,
business ethics, bio ethics, animal rights, euthanasia, same-sex marriage,
affirmative action, distributive justice and global poverty, abortion, torture,
punishment, terrorism, privacy, surveillance, security, whistleblowing, civil
disobedience etc. Topics for instruction and discussion will be decided by the
Instructor at the beginning of the semester and may vary across semesters.<br/><br/><br/><br/>

";

    }
    function button4()
    {
    	echo "";
    }
    function button5()
    {
    	echo "<br/><br/><br/>
    	1)Conference, Social Scientists in the Civic Space, in association with Centre Norbert Elias, EHESS,
Marseille, Ambedkar University, Delhi and TISS, Mumbai. Supported by ICSSR, French Institute,
CSH Delhi, Centre Norbert Elias, EHESS, Marseille, and Ambedkar University, Delhi. January 30-
Feb. 1, 2020.<br/><br/>
    	2)Workshop on Research Blog Writing with Dr. Shriram Venkatraman in association with IIIT-D
library, September 30, 2018.<br/><br/>
    	3)Workshop on Academic Reading with Dr. Shriram Venkataraman and Dr. Shristi in association with
IIIT-D library, March 26, 2019.<br/><br/>
    	4)Workshop Philosophy and Cyber-Technology, IIIT-Delhi, February 2019<br/>";
    }
    ?>




<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>