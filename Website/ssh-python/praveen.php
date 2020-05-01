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
<h2> Praveen Priyadarshi </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/praveen.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<p style="margin-left: 200px">Assistant Professor<br>
Political Science, London
Dr. Praveen Priyadarshi completed his PhD in Development Studies from London School of Economics and Political Science (LSE), London. His academic interest lies at the intersections of the categories of space, institutions and policy especially in the urban context. He brings these categories to bear upon his understanding of contemporary politics in India and the Global South. Before joining us, Praveen has been an Assistant Professor in the Department of Political Science, Zakir Husain Delhi College, Evening, University of Delhi (DU). His publications include papers in Economic and Political Weekly (EPW) and a co-edited book from Pearson Longman, titled Contemporary India: Economy, Society, Politics. He has been an Associate at the Crisis States Research Centre, LSE, and at the Developing Countries Research Centre (DCRC), University of Delhi. He was the Tata PhD Fellow at the Asia Research Centre (ARC), at the London School of Economics.<br><br></p>
    
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
            1) “Letter from Gurgaon” LSE South Asia Blog, January 21, 2013.<a href= 'http://blogs.lse.ac.uk/southasia/2013/01/21/letter-from-gurgaon/'>Link </a><br/><br/>
2)“Gujarat: How an Exclusionary Political Pact is also a Durable One” LSE South Asia
Blog, December 3, 2012.<a href= 'https://blogs.lse.ac.uk/southasia/2012/12/03/gujarat-exclusionary-political-pact/'>Link </a><br/><br/>

3) “How Does India Govern its Cities?” LSE South Asia Blog, August 22, 2012.<a href= 'https://blogs.lse.ac.uk/southasia/2012/08/22/how-does-india-govern-its-cities/'>Link </a><br/><br/>"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1. Democracy in India: Principles and Practices</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:SSH261<br>
What are the constitutive principles of Indian democracy? How well does the democracy
work? How effective is the Indian state in terms of achieving some of its constitutionally
mandated democratic goals? This course is designed to help students ask some of
these questions and help them think systematically about some of the contemporary
political debates in the country. The course is organized around three constitutional
principles of Justice, liberty and equality. The corresponding political debates generated
around these principles are the questions of reservation, secularism and poverty
eradication.<br/><br/><br/><br/>";

    }
    function button4()
    {
    	echo "<br/><br/><br/><b><i><u>Research Papers:</i></u><br><br><br> 
        i)“The Displaced of Ahmedabad” Economic and Political Weekly October 27, 2007 [Co-authored
with Neera Chandhoke et al]<br><br>
        ii)“Reflections on Development and its Critiques” Social Science Research Journal Volume 14,
Number 01, 2006,Punjab University, Chandigarh.<br><br>
iii)“Electoral Politics in Post- Conflict Societies: Case of Punjab” [Co-authored with Neera
Chandhoke] Economic and Political Weekly Vol. XLI No. 9, March 4, 2006.<br><br>
iv)“Global Civil Society: Mapping the Concept” Indian Journal of Political Science. Vol. 63, no.
2&amp;3, June- September 2002.<br><br><br/><br/>
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