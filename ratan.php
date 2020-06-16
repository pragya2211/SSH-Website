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
<h2> Venkata Ratnadeep Suri</h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/ratna-suri.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong>   </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
<p style="margin-left: 200px">Ratnadeep Suri (Ratan), Assistant Professor, SSH, IIIT-Delhi, has completed his Post Doctoral research at the Nanyang Technological University, Singapore in 2016. Earlier he earned his PhD from The Indiana Media School, Indiana University in 2013, with a Major in Communication and a Minor in Information Science. He also has an MA from Western Michigan University, Michigan, and an MA from University of Hyderabad, India. His research examines the effects of technology use in knowledge work contexts, health contexts, information seeking, and the cognition of information. He is also interested in the consequences of disrupted access to communication technologies on individuals in disadvantaged communities. Currently he is a Collaborating Investigator for a 100, 000 $SG grant from Singapore Ministry of Education. He was the recipient of several awards including the the Indiana University, College of Arts and Sciences Dissertation Fellowship (2010-2011), The Indiana University Future Faculty Fellowship, to teach at Howard University, 2009-2010, The Graduate School Fellowship, Summer 2004, 2005, Indiana University, and The Kellogg Foundation Service Learning Scholarship in Summer 2002. In his free time Ratan pursues his interests in woodworking, traveling and photography.</a><br><br><br><br><br></p>
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
            echo ""; 
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