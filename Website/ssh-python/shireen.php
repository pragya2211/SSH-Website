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
<h2>Shireen Mirza </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/shireen.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<p style="margin-left: 200px">
Assistant Professor (SSH)
PhD (2011), SOAS University of London, London
Dr. Shireen Mirza is a PhD in Anthropology and Sociology from the School of Oriental and African Studies in 2011. Her areas of interest are urban anthropology, waste, ecology and technology. Previously she taught at Ambedkar University (Delhi) and at the Department of Humanities & Social Sciences at Indian Institute of Technology Madras. She also worked as a Visiting Research Fellow at the Centre for the Study of Developing Societies (New Delhi) and as a Postdoctoral Research Fellow in the 'Urban Aspirations' project at the Max Planck Institute for the Study of Religious and Ethnic Diversity (Gottingen).

She is a recipient of the International Fellowship awarded by the Urban Studies Foundation, Visiting Research Fellowship at the Zentrum Moderner Orient (ZMO) and Berlin Graduate School Cultures and Societies (BGSMCS, Germany) and has been a Charles Wallace India Fellow. Her most publications in 2019 include ‘Becoming Waste: Three moments in the Life of Landfills in Mumbai city' in Economic and Political Weekly RUA special issue on 'Waste and Pollution', edited by Amita Baviskar and Vinay Gidwani as well as 'Cow Politics: Resistance and Regulation of Animal Slaughter in Mumbai' in the Journal of South Asian Studies. She has also published in Contributions to Indian Sociology, Journal of the Royal Asiatic Society and several other peer reviewed journals.<br><br> Website: <a href=" https://soas.academia.edu/ShireenMirza" style="color: #3fada8;"> https://soas.academia.edu/ShireenMirza</a></p>
    
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
    	echo "<br/><br/><br/><br/><br/>";

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