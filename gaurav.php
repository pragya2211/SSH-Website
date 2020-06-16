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
<h2> Gaurav Arora </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/gaurava.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong> </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
<p style="margin-left: 200px">
Gaurav Arora is an applied microeconomist with specialization in natural resource
economics, agricultural economics, applied econometrics and remote sensing. As an
empiricist, he enjoys developing and applying econometric models to tease out causal
mechanisms that are rooted in the microeconomic theory for decision problems at the
intersection of agricultural production and natural resource management. As
for  research outlook, he is keenly interested in the integration of social sciences and
natural sciences, more particularly economics among the social science disciplines, and
agronomy and earth sciences among the natural science disciplines. He is a recipient of
the Faculty Research Fellowship (2020-2022) at IIIT-Delhi; the James R. Prescott
scholarship (2016) for outstanding creativity in research at Iowa State University (ISU);
and the Earl O. Heady Fellowship (2012) for academic excellence at ISU. He was
inducted as an honorary life member to the Indian Society of Ecological Economics in
2019. Prior to obtaining his PhD in Economics from ISU, he completed M.S. in
Agricultural and Resource Economics from the University of Arizona, and Bachelor of
Technology in Environmental Engineering from Indian School of Mines, Dhanbad
<br><br> Website: <a href="https://gauravaroraecon.wordpress.com/" style="color: #3fada8;">https://gauravaroraecon.wordpress.com/</a>
</p>
 
    
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
            echo "<br/><br/><br/>1) Arora, G., Feng, H., Anderson, C.J., Hennessy, D.A. 2020. Evidence of climate change
impacts on crop comparative advantage and land use. Agricultural Economics, 51(2):
221-236.<br/><br/>2)Arora, G., Wolter, P.T. 2018. Tracking land cover change along the western edge of the
U.S. Corn Belt from 1984 through 2016 using satellite sensor data: Observed trends and
contributing factors. Journal of Land Use Science, 13(1-2): 59-80.<br/><br/>

3) Du, X., Hennessy, D.A., Feng, H., Arora, G. 2018. Land Resilience and Tail Dependence
among Crop Yield Distributions. American Journal of Agricultural
Economics, 100(3): 809-828.<br/><br/>

4)Wang, T., Luri, M., Janssen, L.L., Hennessy, D.A., Feng, H., Wimberley, M., Arora, G.
2017. Determinants of Motives for Land Use Decisions at the Margins of the Corn
Belt. Ecological Economics, 134: 227-237.<br/><br/>
5)Arora, G., Wolter, P.T.,  Feng, H., Hennessy, D.A. 2016. Land Use Change and Policy in
Iowa’s Loess Hills. Sustainable Agriculture Research, 5(4): 30-45.
Conference Proceedings &amp; Other Publications<br><br> 6)Role of Ethanol Plants in Dakotas’ Land Use Change: Analysis using Remotely Sensed
Data, 3rd biennial America’s Grasslands Conference Proceedings, 2016. (with P.T.
Wolter, H. Feng, D.A. Hennessy)<br><br>7)Characterizing Land Use Changes in the Dakotas using Historical Satellite Sensor Data:
1984-2015, 3rd biennial America’s Grasslands Conference Proceedings, 2016. (with
P.T. Wolter, H. Feng, D.A. Hennessy).<br><br>8)Arora, G., P.T. Wolter, H. Feng, and D.A. Hennessy. 2016. Role of Ethanol Plants in
Dakotas’ Land Use Change: Incorporating Flexible Trends into the standard DID
framework using Remotely Sensed Data. Center for Agricultural and Rural
Deverlopment Working Paper: 16WP564.<br><br>9)Arora, G., P.T. Wolter, H. Feng, and D.A. Hennessy. 2015. Characterizing and
comprehending land use change in the Loess Hills Region.<a href = 'http://www.card.iastate.edu/ag_policy_review/display.aspx?id=33.'> Agricultural Policy Review</a>.<br><br>10)The effect of environmental amenities on home values in the Upper Santa Cruz Basin: A
Hedonic Price analysis of census data”, 4th Annual Santa Cruz River Researcher’s
Day Workshop Proceedings: p.6, 2012. (with L. Norman, G. Frisvold)."; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1. Econometrics I</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:ECO221<br>
We will review working with expectation operators and matrix algebra. We will study
various statistical models utlizied to test theoretical economic relationships, analyze
historical economic events, and conduct economic policy evaluation. Simple and multiple
regression using ordinary least squares estimation, maximum likelihood estimation, and
generalized least squares estimation will be covered in detail. We will learn the tools of
basic statistical inference and diagnostics for these models. Time-allowing, we will study
logit and probit regressions to handle discrete choices (e.g. Yes/No choice scenarios).
basic time-series analyses with tests and controls for trends, seasonality, and
autocorrelation.<br/><br/><br/><br/>

<u><i>2. Econometrics II:</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:ECO322/522<br>
This course will provide training in advanced applied econometrics through two (broad)
modules: A) Panel Data Analysis; and B) Microeconometrics.
Panel data (or longitudinal data) run over time and for different observation units like
individuals, households, firms, regions, countries, etc. The repeated nature of the
individual-level data enables more realistic econometric modeling (e.g., incorporating
dynamics at the individual level); more robust estimation methods (e.g., controlling for
unobserved heterogeneity) and more powerful statistical inference procedures (e.g.
testing for long run purchasing power parity by pooling a number of countries). We will
study the development of the linear regression model in panel data settings involving
'fixed' and 'random' effects, and the statistical propoerties of the relevant estimators.
Microeconometrics is the study of economic behavior of individuals or firms by
employing micro-level discrete response data and regression methods for panel data. The
purpose of this module is to expose students to powerful econometric techniques
frequently used in applied microeconomic research and quantitative policy analysis.<br/><br/><br/><br/>

<u><i>3. Spatial Statistics and Spatial Econometrics:</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:ECO324/523<br>
The purpose of this course is to introduce the standard spatial-analytic framework for
analyzing spatial data and its target audience are social scientists and engineers. In the
past decade or so, much interest has grown in the area due to readily-available spatially-
delineated data, particularly when in 2008 the U.S. Geological Survey stopped charging
for its high-resolution LANDSAT archive. However, spatial data and spatial relationships
necessitate the use of analytic tools beyond the standard statistical methods such as OLS.
The role of spatial autocorrelation in spatial datasets is a focus of this course. In addition,
we will ask: how and why does spatial autocorrelation arise; how is it measured and
understood; how does it relate to issues of spatial heterogeneity and spatial dependence;
and how these factors inform the specification and estimation of regression models.
Specific modeling techniques include spatial autocorrelation measures (Moran&#39;s I, Geary&#39;s
C), spatial regression models.<br/><br/><br/><br/>

<u><i>4. Microeconomics:</i></u><br/><br/><br>
Semester: Winter<br>Credits:4<br>Code:ECO301<br>
This course involves formal introduction to the fundamentals of microeconomic theories
of consumer and firm behavior. We will develop an understanding of the optimal
decisions subject to limited budgets, technological barriers, and capacity constraints ofn
production. We will gain an appreciation for the role of markets in resource allocation
and learn the necessary conditions for markets to foster efficient allocation of scarce
resources. We will study the the role of government policies regarding tax/subsidy and
the response of consumers and firms that may raise or lower market efficiency.<br/><br/><br/><br/>
";

    }
    function button4()
    {
    	echo "<br/><br/><br/><b><i><u>IP supervision:</i></u><br><br><br> i)Intermediate Microeconomics (Saif Ali, Winter 2018)<br><br>ii)Applied Economic Modelling (Richa Chaudhary, Winter 2018)<br><br>iii)ML applications in modelling Land Use Change (Aarushi Agarwal and Chinmay
Budhiraja, Monsoon 2019). Co-advisor with Saket Anand<br><br>iv)Spatio-temporal satellite image processing for forest cover estimation (Meet Shah
(M.Tech. ECE), Winter 2020), Co-advisor with A V Subramanian.<br><br><br/><br/>

<b><i><u>BTP supervision:</b></u></i><br/><br/><br/>
i)Tanya Gupta (May 2019 – July 2019): Models for optimal groundwater aquifer
management (co-advisor: Rakesh Chaturvedi)<br><br>ii)Gargi Gupta and Tushita Rathore (May 2018 – May 2019): <a href= ' https://tind-customer-agecon.s3.amazonaws.com/de802526-35af-4426-b5e8-de8a777a1e2f?response-content-disposition=inline%3B%20filename%2A%3DUTF-8%27%27Abstracts_19_05_14_13_53_46_14__59_177_70_114_0.pdf&amp%3Bresponse-content-type=application%2Fpdf&amp%3BAWSAccessKeyId=AKIAXL7W7Q3XHXDVDQYS&amp%3BExpires=1564583471&amp%3BSignature=Tb7zmdg3jUIgrUiP1Opu1uJXNec%3D.
'>An economic
characterization of India’s land use changes using high-resolution raster data</a> (co-
advisor: Saket Anand)<br><br>";
    }
    function button5()
    {
    	echo "<br/><br/><br/><b><u>Workshops and Executive Training Programs</b></u><br><br><br>A)Training Course on Remote Sensing, GIS and Machine Learning Methods for
Environment, Natural Resource and Agriculture, January 4-5, 2019, held at IIIT-Delhi in
collaboration with Indian Society for Ecological Economics.**<br><br>B)Workshop on Computational Social Sciences organised by the Department of
Social Sciences and Humanities, IIIT-Delhi during June 20-21, 2018.*<br><br><i>** I am grateful to Saket Anand (co-instructor, IIITD), Shreekant Gupta (DSE),
Binoj Baby (IIITD) and our student scholars: Saif Ali, Sumedha Shukla, Tanya
Gupta, Sharat Agarwal and Himanshu Arora, who helped immensely in successfully
conducting this first-of-its-kind workshop in India.<br>
* Special thanks to James Evans and Patrick Jagoda of the University of Chicago for
their participation, and to Microsoft Research India and the U Chicago Delhi Center
for financial and logistical support.</i>";
    }
    ?>







<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>