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
<p style="float:center; "><strong><img alt="" src="./images/amrit.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<h3 style="margin-left: 200px; ">Visiting Faculty</h3>
<p style="margin-left: 200px"><br>
The comparative study of knowledge and culture; violence, civil society and the state; sustainability and lifestyle change; women's work, family and the professions; Information Technology and the Indian service economy.</p>
<br><br><br><br><br>
    
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
            echo
            "
                <h3> Publications </h3>
                <ul>
                <li>Srinivasan, A. 2020. “The Indian Institutes of Technology: A sociology of knowledge perspective”. In
Manisha Priyam (ed) Reclaiming Public Universities: Comparative Reflections for Reforms. Routledge:
Delhi (forthcoming).</li>
<li>Srinivasan, A. 2021. (Invited Co-Editor with Terry Irwin), Christa Liedtke (ed) Sustainable Lifestyles &amp;
Consumption Behaviour, Special Sustainability Journal Issue, MDPI: Basle (forthcoming)</li>
<li>Book Review: Chandan Bose. 2019. Perspectives on Work, Home, and Identity from Artisans in
Telangana: Conversations around Craft. In Contributions to Indian Sociology 54.1<br>
<a href = 'https://journals.sagepub.com/eprint/FEJUVS4AJYJXIUPMK3UY/full' </a>https://journals.sagepub.com/eprint/FEJUVS4AJYJXIUPMK3UY/full</a></li>
</ul>
<h3>Conference Presentations</h3>
<ul>
<li>Srinivasan, A. 2020.  “Sustainable Lifestyles Accelerator: An IIITD International Project”. Parallel
Theme on Sustainability, Research Innovation and Incubation Showcase (RIISE), Indraprastha
Institute of Information Technology, New Delhi (January)</li>
<li>Srinivasan, A. 2019.“The Woman’s Gharana”, UVPA-ICTM Joint International Research Symposium
2019, Sri Lanka Foundation Institute, Colombo. (December)</li>
<li>Lettenmeier, M.H., K.Bienge, A. Srinivasan, et al. 2019. “Can there be a global tool for reducing
lifestyle footprints? First reflections from setting up the Sustainable Lifestyles Accelerator”. World
Resources Foundation 2019, Geneva Switzerland (October)(Presenter Katrin Bienge).</li>
</ul>
<h3>Keynotes</h3>
<ul>
<li>Srinivasan, A. (2017). “Women Leaders from India: The Politics of Marginalisation,”
Inaugural Lecture, National Seminar on Gender Equality and Social Inclusion in Contemporary India:
Issues &amp; Challenges, Dept of Sociology, University of Kashmir, Srinagar (8 March)</li>
<li>Srinivasan, A. (2017). “Disrupting ‘Empowerment”, Inaugural Address, National Seminar on
Trends and Issues in Social Development, Dept of Sociology, Panjab University Chandigarh (2 March)</li>
<li>Srinivasan,A. (2016). “Politics &amp; Marginalisation”, Keynote Lecture, Conference on Marginalisation,
Poverty and De-centralisation, KILA, Trissur, Kerala (19 November)</li>
</ul>
<h3>Invited Lectures </h3>
<ul>
<li>Srinivasan, A. 2018. India: Introduction to partners, SLA Kick Off, Wuppertal Institute for Climate,
Environment &amp; Energy, Germany (June 4)</li>
<li>Srinivasan, A. 2018. Working with Secondary Data, Workshop on Research Methodology Jamia MIllia
Islamia &amp; Maulana Abul Kalam Azad Institute of Asian Studies Kolkata, JMI, Delhi (February 27)</li>
<li>Srinivasan, A. 2018. Outsourcing Caste. The sociology of the digital Brahmin, R&amp;D Forum, Dept of
HSS, IIT Madras, Chennai (February 13)</li>
<li>Srinivasan, A. 2017. De-Classifying the Classical, A MAP talk, India International Centre, Delhi (July
21)</li>
<li>Srinivasan, A. 2017. The Woman’s Gharana, The Tagore National Fellowship for Cultural Research
Public Lecture, Sangeet Natak Akademi, Delhi (March 24)</li>
<li>Srinivasan, A. (Chair).2019. Justice Ruma Pal “Gender and Religion”, Lecture series on Women in Law
in India, India International Centre, Delhi (November 7)</li>
<li>Srinivasan, A. (Chair).2019. Plenary I “Caste – Topology, Mediations &amp; Power”, National Conference
on Caste and Communication, Centre for Culture, Media and Governence, JMI &amp; AICMA, Jamia Millia
Islamia, Delhi (March 27)</li>

</ul> 


            "; 
        } 

    function button3()
    {
    	echo 
        "

";

    }
    function button4()
    {
    	echo 
        "
            <br><br>
        <h3>Reports</h3>
        <ul>
        <li>Srinivasan, A., Naincy (2019): “Documentation of round 1 - India: Summary”. Accelerator Report 6.
Wuppertal Institute for Climate Environment &amp; Energy and Indraprastha Institute of Information
Technology - Delhi, Wuppertal, Germany</li>
        </ul>
        <h3>Sponsored Research Projects</h3>
        <b><i>Sustainable Lifestyles Accelerator (SLA)</i></b>, IRD Project (2018-21) SRP 101. Funding KR Foundation,
Denmark. Prof Amrit Srinivasan is Principal Investigator,Co-PI is Prof Pushpendra Singh, HCD/CDNM.<br><br>
The <b>SLA</b> is a three-year program for encouraging sustainable lifestyles in Finland, Spain, Germany,
Switzerland, Denmark, Mexico and India. It is based on the four steps of a transition cycle comprising
- problem analysis, vision development, experimenting and up-scaling.<b><i>IIIT-D is India partner in the
SLA with The Wuppertal Institute for Climate, Environment and Energy, Germany in the lead.</b></i> CSSS
students of the Institute have been instrumental in the success of the field component of the pilot
study, completed last year.<br><br>


SLA partners are now working on SUSLA the online web platform/mobile App, which calculates the
unique <b><i>material footprint</b></i> (consumption of natural resources) and carbon footprint (lifestyle related
carbon emissions) of individual users and households, in order to highlight resource heavy
consumption and associated behaviour patterns. <b><i>The target is to reach 10,000 users in each partner
country</b></i>, to volunteer their lifestyle information, be informed of their footprints and mutually, in a
fun way consider actions to reduce them. The gamification designed in SUSLA encourages awareness
and participation based on ‘competition’ and comparison with users’ own targets and those of their
neighbours. Budgetary savings and community ratings and benefits are some rewards envisaged.<br><br>
SUSLA addresses the restrictions on travel and social mixing in Covid times, by encouraging more
online engagement with healthy, environmentally protective practices and lifestyles.<b><i> The Beta
version is due by September of this year.</b></i><br><br>
<b>SUSLA</b> addresses the restrictions on travel and social mixing in Covid times, by encouraging more
online engagement with healthy, environmentally protective practices and lifestyles. <b><i>The Beta
version is due by September of this year.</b></i>
        ";
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