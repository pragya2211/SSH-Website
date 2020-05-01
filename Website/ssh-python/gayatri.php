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
<h2> Gayatri Nair </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/gayatri.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
 <p style="margin-left: 200px">Assistant Professor<br>PhD (2016), Jawaharlal Nehru University, New Delhi<br>
Gayatri received her M.Phil (2012) and PhD (2016) in Sociology from the Centre for the Study of Social Systems, Jawaharlal Nehru University, New Delhi. Her research interests lie in urban informal labour and livelihood patterns with an emphasis on the question of technology, caste and gender. With a focus on political economy, she has published work examining the links between caste, gender and cultures of modernity, working caste lives and popular culture. She is currently in the process of converting her doctoral research on the Koli fishing community and the movement for rights to livelihood in Mumbai into a book.<br><br><br><br> </p>
    
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
            echo "<br/><br/><br/><u>Academic</u><br><br>1)&#39;Representations of Rape in Popular Culture: Gone Girl and Badlapur&#39; (Co-authored with
Dipti Tamang). In International Feminist Journal of Politics, Volume 18, Issue 4, 14th
December, 2016; pp. 614-618.<br/><br/>2)'The Bitter Aftertaste of the Beef Ban; Choice, Caste and Consumption'. In Economic and
Political Weekly, Volume 51, Issue 10, 2016; pp 14-15. ISSN-0012-9976<br/><br/>

3) ‘Structures of Discrimination: A Response’ (co- authored with Rahul Menon). In
Economic and Political Weekly, Volume 48, Issue 15, 2013; pp 77-78. ISSN- 0012-9976.<br/><br/>

4)'Fade in …Fade Out: Mapping the Emergence and Disappearance of the Vamp on the
Terrain of Hindi Cinema’ in Exploring the Popular: Texts, Identities and Politics; pp.
153-171. (Pune: Krantijyoti Savitribai Phule Women’s Studies Center, 2008).<br/><br/>
5)Contributed to ‘Isn’t this Plate Indian? Dalit Memories and Histories about Food’ (Pune:
Krantijyoti Savitribai Phule Women’s Studies Center, 2009, pp. 101-105)<br><br><br><u>Newspaper, News Sites and Non Academic</u> 1)Can the Spirit of California’s Gig Economy Bill Spread to India? In<a href=. 'https://thewire.in/economy/can-the-spirit-of-californias-gig-economy-bill-spread-to-india'> thewire.in</a>,
September19, 2019<br><br>2)‘Upholding Patriarchy in the Name of Choice’ in The Hindu, January 31 st , 2013 (Web
Edition)<br><br>3)State of Dalit Society in India. In Malayala Manorama Yearbook 2017 (Kottayam:
Manorama Manorama Press, 2017, pp. 805-811"; 
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