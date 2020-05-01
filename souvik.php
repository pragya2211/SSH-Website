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
<h2>Souvik Dutta </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/souvik.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<p style="margin-left: 200px">Assistant Professor<br>
Dr. Souvik Dutta joined SSH in Dec 2019 as Assistant Professor in Economics. He uses
both analytical modelling and econometrics in his research. Some of his current areas
of interest are in the fields of political economy, microfinance and economics of digital
marketing. Before joining IIIT-D, Souvik was a faculty at Indian Institute of Management,
Bangalore.<br><br> Websie: <a href="https://souvikdutta.weebly.com/" style="color: #3fada8;">https://souvikdutta.weebly.com/</a><br><br><br><br><br></p>
    
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
            1) Ethnic Conflicts with Informed agents: A Cheap Talk Game with Multiple
Audiences (with Pathikrit Basu and Suraj Shekhar), 2019, Economics
Letters <a href = 'https://souvikdutta.weebly.com/uploads/2/3/8/0/23807725/1-s2.0-s0165176519303301-main.pdf'>[Download]</a>.<br/><br/>
2)Do Social Networks facilitate the Spread of Ponzi Schemes? Evidence from a Primary
Survey (with Abhirup Sarkar), 2019, Economic and Political Weekly <a href = 'https://www.epw.in/journal/2019/37/insight/do-social-networks-facilitate-spread-ponzi-schemes.html?0=ip_login_no_cache%3D91f94737839e3fd7000e811dbee22d99'>[Download]</a>.<br/><br/>

3) Bandhan: Can it replicate its microfinance success (with Somdutta Basu and Abhirup
Sarkar), 2015, Economic and Political Weekly <a href = 'https://www.epw.in/journal/2015/35/commentary/bandhan-can-it-replicate-its-microfinance-success.html'>[Download]</a>.<br/><br/>

4)Influencer Marketing with Fake Followers (with Abhinav Anand and Prithwiraj
Mukherjee) [R&amp;R at International Journal of Research in Marketing, 2nd
Round] <a href = 'https://souvikdutta.weebly.com/uploads/2/3/8/0/23807725/fake_followers__1_.pdf'>[Download]</a>.<br><br>
5)Political Economy of Third Party Interventions (with Sabyasachi Das and Abhirup
Sarkar) [R&amp;R at Journal of Public Economics] <a href = 'https://souvikdutta.weebly.com/uploads/2/3/8/0/23807725/14_19.pdf'>[Download]</a>.<br><br>"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1.Microeconomicss</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:ECO101<br>
This course involves formal introduction to the fundamentals of microeconomic
theories of consumer and firm behavior. We will develop an understanding of the optimal
decisions subject to limited budgets, technological barriers, and capacity constraints in
production. We will gain an appreciation for the role of markets in resource allocation and learn
the necessary conditions for markets to foster efficient allocation of scarce resources. We will
study the role of government policies regarding tax/subsidy and the response of consumers and
firms that may raise or lower market efficiency.<br/><br/><br/><br/>";

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