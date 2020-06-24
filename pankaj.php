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
<h2> Pankaj Vajpayee </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="./images/Pankaj.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<h3 style="margin-left: 200px; ">Visiting Faculty</h3>
<p style="margin-left: 200px">27 years’ experience in Investment Banking and Investment Advisory. Had earlier worked with
companies like SBI Capital Markets, Dabur Group, Onida group and India Infoline Group.<br><br>
Has taught various finance courses at IIM Raipur, IIM Indore, IIFT Delhi and Kolkata, MDI
Gurgaon, IMI Delhi, Department of Financial Studies and College of Business Studies at
University of Delhi.<br><br>
Has conducted various MDPs for the employees of Standard Chartered Bank, Met Life
Insurance, HDFC Bank, DBS Bank, APEDA, MMTC,STC, Indian Oil, ONGC, GAIL, Power
Grid, CIDC etc.</p>
<p>
Experience in the following areas:<br><br>
<br>-> Investment Banking including Issue management (managed over 25 IPOs)
<br>-> Asset Securitisation
<br>-> Development of retail network for marketing of various financial products
<br>-> Setting up of Merchant Banking, OTC and NSE operations and consumer finance division
<br>-> Setting up of a branch office and establishing them as independent profit centres
<br>-> Project appraisal, Credit syndication and Institutional placement
<br>-> Private placement of Debt / Equity,
<br>-> Corporate advisory services
<br>-> Investment Advisory.<br><br><br><u>Other Information:</u><br>
    <br>->Was a member of the IIFT delegation to Dhaka (December 2008), which conducted programs on
International Commodity Trading and Risk Management for the participants in Bangladesh.
<br>-> Was a member of the course preparation team (August - October 1998) of IGNOU (Indira Gandhi
National Open University) for the module ‘Management of Financial Services’ for the MBA
program of the University.
<br>-> Awarded first prize (October 1997) in a paper writing competition organised by the Department
of Financial Studies, University of Delhi. The topic was “Capital Account Convertibility -
Perspective 2000”.
<br>-> Worked on the VSAT technology for education. Was associated with IIFT’s Executive
Master’s Program in International Business which was conducted via the Hughes Platform.
<br>-> Was awarded outstanding teacher award at IIITD in the years 2016, 2017 and 2018</p>
    
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
            echo "
"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1.Valuation and Portfolio Management</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:ECO 332<br>
The goal of the course will be to help the students gain an appreciation of what is involved in:<br><br>
a. understanding what the investment opportunities are<br>
b. making good investment decisions and<br>
c. recognising where investment problems and controversies arise and knowing how to deal
with them<br><br><br>
Upon successful completion students will be able to:<br><br>
1) Critically evaluate financial market information to measure risk and return<br>
2) Apply asset pricing models and valuation techniques to the valuation of the assets (fixed
income, equities and derivatives)<br>
3) Demonstrate an understanding of the modern portfolio theory.<br>
4) Measure portfolio risk and determine performance benchmarks and be able to take an applied
perspective on investment management.<br/><br/><br/><br/>
<br/><br/><u><i>2.Foundations of Finance</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:ECO 331<br>
This is the basic corporate finance course. The course is meant for undergraduate student taking his or
her first and perhaps only finance course. The aim of this course is to provide students with the
foundations of finance theory. This will be achieved through the development of a common

vocabulary and a set of tools that will assist students to gain a basic understanding of the theory of
modern finance. The main topics covered include:<br><br>
a. Overview of Financial Management<br>
b. Mathematics of Finance: Time Value of Money<br>
c. Analysis of Financial Statements<br>
d. Understanding of Financial assets<br>
e. Long term investment decisions: Basics of capital Budgeting<br>
f. Capital Structure and Dividend Policy Decisions<br/><br/>";

    }
    function button4()
    {
    	echo "<br/><br/><br/>
            <br><i><u>Independent Project</i></u><br><br>1)Impact of GST on Indian Industry
<br>2) Economics of Information Security
<br>3) Algorithmic Trading &amp; Technical Analysis
<br>4) Impact of E-wallets in Kenya (M Pesa) and lessons India can learn
<br>5) Trends in the cost of Education in Public schools in Delhi
<br>6) Role of Microfinance in empowering the marginalised sections of the society
<br>7) Study of the Indian Derivatives markets (Financial and Commodity)
<br>8) Financing for the Smart Cities
<br>9) Study of Money Supply in India
<br>10) Demonetisation and its impact on the Indian Economy
<br>11) Move towards a Cashless Economy - Challenges and Opportunities
<br>12) Analysis of Payment Banks in India
<br>13) Cryptocurrency: Technicalities and its potential to change the way economy works&quot;
<br>14) Role of Microfinance Industry in India
<br>15) Financial Modelling
<br>16) Behavioural finance
<br>17) Algorithmic Trading
<br>18) Cryptocurrency
<br>19) Blockchain and Cryptocurrency
<br>20) A study on Initial Public Offers (IPO) in Indian Markets
<br>21) Mutual Fund Analysis

<br>22) Effect of interest rate on stock markets
<br>23) Impact of Crude oil prices on India and its economy
<br>24) A case study on Portfolio Management
<br>25) Investment Avenues for a Salaried Individual
<br>26) Factors affecting Currency Movement
<br>27) Behavioural Finance in context to stock markets
<br>28) Fundamental Analysis of IT sector within India
<br>29) Implementation of GST in India and other countries
<br>30) Automated Financial Planning
<br>31) Islamic Banking
<br>32) Understanding Stock Markets
<br>33) Investment in Equity Markets
<br>34) Behavioural biases in investing.
<br>35) Stock Markets &amp; Algorithmic Trading<br/><br/>
<i><u>Btech Project</i></u><br><br>1. Blockchain and Decentralized Application
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