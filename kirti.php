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
<h2> Kiriti Kanjilal </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/kanjilal.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
    <p style="margin-left: 200px">
PhD (2018), Economics at Washington State University<br>
Kiriti Kanjilal completed his 5 year Integrated Masters in Economics at the University of Hyderabad in
2013 and defended his PhD in Economics at Washington State University in May 2018. His dissertation
was titled “Essays in Behavioural Industrial Organization and Natural Resource Economics”.
 
His research interests are primarily in the fields of microeconomics, game theory, industrial
organization, and behavioural economics. He also does research using economic experiments. He uses
Mathematica, Stata and z-Tree for research<br><br> Website: <a href="https://sites.google.com/site/kanjilaleconomics" style="color: #3fada8;">https://sites.google.com/site/kanjilaleconomics<br><br><br></a></p>
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
            echo "<br/><br/><br/>1)“Endogenous Equity Shares in Cournot Competition: Welfare Analysis and Policy.” - Kiriti
Kanjilal and Felix Munoz-Garcia. (Published online ahead of print in The B.E. Journal of
Economic Analysis and Policy).
            ";   } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1. Money and Banking</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:ECO223<br>
Money and Banking: This course studies how financial markets and institutions work by exploring the
role of money in the economy. The study of money, banking and financial markets will reward you with
an understanding of many exciting issues like financial crises, money and business cycles. The course will
cover three broad areas (i) how financial markets (bond, stocks) work (ii) structure of financial
institutions helping to understand financial crises and the subprime meltdown and (iii) monetary theory
and policy to help explain different practical situations in banking and finance.<br/><br/><br/><br/>

<u><i>2. Macroeconomics:</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:ECO201<br>
This course will introduce basic models of macroeconomics along with real-world
examples from various industrialized and developing economies. It will provide a unified framework to
analyse aggregate behaviour of agents in an economy using aggregate demand and supply analysis. We
will study the impact of monetary policy and fiscal policy options on economic growth, labour market
wages, income distribution, exchange rates, etc. in the short-run, medium-run, and long-run.<br/><br/><br/><br/>

<u><i>3. Industrial Organization:</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:ECO312<br>
This course will introduce basic theoretical models of IO. It will implement
applied microeconomic theory and game theory to understand how firms take decisions in various
settings. The models include profit maximization when there is market power, advertising,
heterogeneity in quality, vertical control, models of entry, accommodation and exit, and many others.
The course helps one understand how to set up an objective function for a firm facing different
challenges in a complex market structure. It will aid the student in understanding real world scenarios.
Finally there will also be a short section on some empirical methods used in IO. IO has grown into one of

the fundamental fields within economics, and is essential in order to gain a broader understanding of
the subject.<br/><br/><br/><br/>
";

    }
    function button4()
    {
    	echo "<br/><br/><b><i><u>IP supervision:</i></u><br><br><br> i)Gargi Gupta (4 th  year CSE B. Tech at the time) titled “
Behavioural Biases in Individual Investment Decisions”)<br><br>";
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