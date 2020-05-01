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
<h2> Paro Mishra </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/paro.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<p style="margin-left: 200px">Assistant Professor<br>
Dr. Paro Mishra is a Ph.D. degree holder from the Department of Humanities and Social Sciences, Indian Institute of Technology, Delhi in 2017. She pursued her postgraduate and undergraduate degree from Jawaharlal Nehru University and Lady Shri Ram College, University of Delhi, respectively. Her research broadly spans the area of demographic anthropology and is focused on understanding the consequences of sex-selective technologies on family and marriage in North India. She is the recipient of several fellowships and grants from UGC, IIT Delhi, ICSSR and the Netherlands Institute for Advanced Studies. She is currently engaged in a major research project funded by the Indian Council of Social Science Research, Delhi.<br><br><br><br></p>
    
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

1) Forthcoming. Mobile Phones, Family Connections, and Family Conflicts: Ethnographic Realities from the Lives of Cross-region Migrant Brides in North India. In Lakshmi Lingam and Nolwazi Mkhwanazi (Eds.)<i> Smart Phones, Social   Media and Gender Faultlines: Southern Perspectives on Emerging Perspectives. Routledge</i><br><br>

2) Forthcoming. (With Ravinder Kaur). Gender Imbalance, Marriage Squeeze and    Multiple Biological Clocks: Exploring the Challenges to Intergenerational Contract in   North India. Special Issue on Trapped in the Hourglass: Time, Reproductive Decline and the Problematization of Ageing. <i>Anthropology and Aging.</i><br><br>

3) 2018. Being ‘bare branches’: Demographic imbalance, marriage exclusion and
masculinity in North India’. In Sharada Srinivasan and Li Shuzhou (eds.) ‘Scarce’
Women and ‘Surplus’ Men in China and India: Macro Demographics versus
Local Dynamics. Canada: Springer.<br/><br/>2)2016. Imbalanced sex-ratio and cross-region marriage: The challenges of transcending
caste boundaries. In Ravinder Kaur (ed.) Too Many Men, Too Few Women:
Mapping the Adverse Consequences of Imbalanced Sex-ratios in India and China.
New Delhi: Orient Blackswan.<br/><br/>

4) 2015. Book Review. Intimate Others: Marriage and Sexualities in India. Ed. by
Samita Sen, Ranjita Biswas and Nandita Dhawan. Society and Culture in South
Asia 1(2): 215-217.<br/><br/>

5)2013. Sex ratios, cross-region marriage and the challenge to caste endogamy in
Haryana. Economic &amp;Political Weekly 158 (35): 70-78.<br/><br/>"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1.Contemporary India: Sociological Perspective</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:SOC202<br>
<br/><br/><br/><br/>

<u><i>2. Starting a Venture:</i></u><br/><br/><br>Semester: Summer Term<br>Credits:4<br>Code:ENT403<br>
Co-taught with Anupam Saronwala and Alok Nikhil Jha<br/><br/><br/><br/>

<u><i>3. Introduction to Sociology and Anthropology:</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:SOC101<br>
<br/><br/><br/><br/>
";

    }
    function button4()
    {
    	echo "<br/><br/><br/><b><i><u>IP supervision:</i></u><br><br><br> i)Monsoon 2019, Analysing Behaviour of Female Politicians on Twitter.<br><br><br/><br/>

<b><i><u>BTP supervision:</b></u></i><br/><br/><br/>
i)Monsoon 2019, fINC<br><br>";
    }
    function button5()
    {
    	echo "<br/><br/><br/><b><u>International Conference on ‘Reproduction, Demography and Cultural Anxieties in
India and China in the 21 st Century’. 20-21 February, 2020   <a href = 'http://tiny.cc/u4c8iz'>URL</a>
(In collaboration with IIT, Delhi and IIT, Hyderabad)</b></u><br><br><br>As the most populous countries in the world, India and China have come to mark
our collective conscience in significant ways. In the late 20 th century, both countries
woke up to the need to manage the fallout of their population policies. These
policies, combined with new sex determination technologies and widely prevalent
culture of son-preference, have exacerbated gender inequality in the form of skewed
sex ratios. The spectre of ‘surplus’ men and ‘scarce’ women, rising infertility due to

environmental toxicity, the increasing use of assisted reproductive technologies, and
the resulting familial, kinship and policy shifts are paramount in the ways in which
China and India are approaching reproductive technologies and demographic
transformation. Here, cultural peculiarities are beginning to provide new forms of
engagement with the decades-long state, research, and policy obsessions with
population. There is little doubt that we need newer and more nuanced research
paradigms than the ones informed by earlier understandings of population rhetoric.
Thus, this conference aims to bring together academics from the fields of
anthropology, sociology and demography researching on the linkages between
reproduction and cultural processes in India and China, that focus on shared issues
and problems—and particular manifestations.";
    }
    ?>







<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>