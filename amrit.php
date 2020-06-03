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
<h2> Amrit Srinivasan </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/amrit.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<p style="margin-left: 200px"><br></p>
    
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
    	echo "
";

    }
    function button4()
    {
    	echo "";
    }
    function button5()
    {
    	echo "<br/><br/><br/>";
    }
    ?>







<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>