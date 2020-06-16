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
<h2> Rakesh Chaturvedi</h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/rakeshc.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
<p style="margin-left: 200px">Rakesh Chaturvedi completed his PhD in Economics from Pennsylvania State University in 2015.
He uses mathematical modeling and analysis in his research. His current areas of interest are
market design and game theory. Before his PhD, Rakesh obtained his Masters degree in Economics
from Delhi School of Economics where he has also served as an Adjunct Lecturer.<br><br> Website: <a href="https://sites.google.com/site/rakeshchaturvedieconomics/" style="color: #3fada8;">https://sites.google.com/site/rakeshchaturvedieconomics/</a><br><br><br><br><br><br><br></p>
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
    	echo "<br/><br/><br/><u><i>1. Game Theory</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:ECO311<br><br/><br/><br/><br/>

<u><i>2. Decision Theory:</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:ECO503<br><br/><br/><br/><br/>

<u><i>3. Convex Optimization:</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:MATH3XX<br><br/><br/><br/><br/>

<u><i>4. Market Design:</i></u><br/><br/><br>
Semester: Winter<br>Credits:4<br>Code:ECO313<br><br/><br/><br/><br/>";
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