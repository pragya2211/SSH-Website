<?php include ('main-header.php'); ?>

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
        width:270px;
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
<div class="page">

	<p align="justify" style="font-size: 16px"> 
		SSH department currently offers PhD in following two streams:
		<ul>
<li><a style="font-size: 16px">Sociology/Social anthropology</a></li>
<li><a style="font-size: 16px">Economics</a></li>
</ul>
</p>

<form method="post"> 
          
        <input type="submit" name="button2"
                class="button" value="Sociology/Social anthropology" />

        <input type="submit" name="button3"
                class="button" value="Economics" /> 
        
    </form> 

<?php
        if(array_key_exists('button2', $_POST)) { 
            echo "
            <br><br> <br>
            <h1>Sociology/Social Anthropology</h1>


IIIT–Delhi offers PhD in Sociology/Social Anthropology with a focus on following <strong>research
areas:</strong>
<br><br>
Information Communication Technologies; Privacy and Surveillance;  Gig Economy;  Smart
Aging;  Technology and Society;  Education and Technology; Urban Sociology; Urban
Politics; Infrastructure Studies; Environment; Waste and Pollution; Urban E-waste practices;
Ecology; Anthropocene; Precarious Caste; Class; Labour; Gender; Childhood; Inequality;
Civility, Migration and Transnationalism; Demographic Anthropology; Kinship Studies
<br><br>
The curriculum for PhD programs in Sociology and Social Anthropology is designed to
strengthen fundamentals in theory and research methods through Core/Compulsory courses
and provide sufficient scope to cultivate critical and innovative thinking through Independent
Studies and Seminar style courses.  The aim is to impart training to conduct high quality
research.

<h3>Criteria:</h3>
<ul>
	<li>MA/MSc/ MPhil in Sociology, Anthropology, Political Science, Development Studies or any
other related Social Sciences discipline.</li>
<li>BTech/MTech. in any discipline and/or MBA/MSW.</li>
<li>Students applying with MA/MSc/MPhil/MSW need to have secured at least second division
(at least 50% marks or 5.5 CGPA on a scale of 10).</li>
<li>Students applying with BTech/MTech need to have secured at least 70% marks or 7.5 CGPA
on a scale of 10</li>
<li>Students applying with MBA need to have secured at least 70% marks or 3.0 CGPA on a
scale of 4.</li>
</ul>

<h3>Selection Process:</h3>

Eligible candidates will be invited to write an entrance examination that will test the
candidate's knowledge in foundational Sociology and Anthropology topics.Short-listed
candidates from the entrance examination stage will be interviewed by an expert committee
and the final decision on the admission will be made based on the candidate’s overall
performance.
<br><br>
Candidates applying for Ph.D. in Sociology/Anthropology should submit a 2-page statement
of purpose (SoP) delineating research theme(s) within Sociology/Anthropology that may
include specific questions of potential research interest to the candidate when applying. The
candidate is expected to clearly express his/her interest in the outlined research theme(s) or
questions to the extent possible.
<br><br>
Preference will be given to those with a post-graduate degree in Sociology/Anthropology.
Preference will also be given to those who have cleared either NET/JRF or SLET.

<h3>Coursework requirement:</h3>

<ul>
<li>PhD students will be required to complete 32 credits of PhD level coursework.
Students who enter after an MPhil will need to complete a minimum of 24 credits

(implying a waiver of maximum 8 credits). This waiver in coursework may only be
provided with the permission from the thesis advisor and the dissertation committee.</li>
<li>In addition, students are required to complete 56 research credits.</li>
<li>500-level courses (or higher) will be considered towards the PhD program. However,
students may be allowed to take at most two advanced undergraduate courses (300-
level or higher) with the permission of the thesis advisor and PGC.</li>
<li>Maximum of 2 Independent Study courses are allowed to be counted towards PhD
credits. Independent Project credits are disallowed for PhD program in Social
Sciences and Humanities disciplines.</li>
<li>Specialized coursework in addition to the general requirements above. Students are
expected to compulsorily take three courses - Research Methods in
Sociology/Anthropology, Theories in Sociology/Anthropology and
Sociology/Anthropology of India worth 12 credits in total.</li>
<li>The total of 32 course credits will be divided as 16 credits for Courses and 16 credits
for PhD level research seminar style classes (where research papers are intensively
discussed by the course instructor).</li>
<li>Students are encouraged to actively audit any related courses other than those
expected for credit coursework with the permission of the thesis adviser.</li>
</ul>

<br><br>"; 
        } 
        else if(array_key_exists('button3', $_POST)) { 
            echo "<br><br><br>
            <h1>Economics</h1>

IIIT–Delhi offers PhD in Economics with focus on
<ul>
	<li>Industrial Organization</li>
	<li>Behavioural Economics</li>
	<li>Game Theory and Market Design</li>
	<li>Political Economy and Development</li>
	<li>Applied Econometrics</li>
	<li>Natural Resource Economics</li>
	<li>Agricultural Economics</li>
</ul>
<h3>Criteria:</h3>
<ul>
	<li>MA/MSc/MPhil in Economics, Statistics, Mathematics or basic sciences</li>
<li>BTech/MTech. in any discipline and/or MBA.</li>
<li>Students applying with MA/MSc/MPhil need to have secured at least second division
(at least 50% marks or 5.5 CGPA on a scale of 10).</li>
<li>Students applying with BTech/MTech need to have secured at least 70% marks or 7.5
CGPA on a scale of 10</li>
<li>Students applying with MBA need to have secured at least 70% marks or 3.0 CGPA
on a scale of 4.</li>
</ul>

<h3>Selection Process:</h3>
Admission is generally offered on the basis of an interview, which may be
supplemented by a written test, if necessary. The Institute will invite a limited number
of candidates for a written test and interview based on the academic records. The final
selection will be mainly based on academic credentials, written test and/or interview.
The candidates who do not qualify in the written test need not appear for an interview.
The reserved category candidates will be given due relaxation in cutoff marks as per
the norms.

<h3>Coursework requirement:</h3>

<ul>
<li>PhD students will be required to complete 32 credits of PhD level coursework.
Students who enter after an MPhil will need to complete a minimum of 24 credits
(implying a waiver of maximum 8 credits). This waiver in coursework may only be
provided with the permission from the thesis advisor and the dissertation committee.</li>
<li>In addition, students are required to complete 56 research credits</li>
<li>500-level courses (or higher) will be considered towards the PhD program.
However, students may be allowed to take at most two advanced undergraduate
courses (300-level or higher) with the permission of the thesis advisor and the PGC.</li>
<li>Maximum of 2 Independent Study courses are allowed to be counted towards PhD
credits.</li>
</ul>

<p align='justify' style='font-size: 16px;'><b>Applications for admission to the PhD program are invited for the regular
academic cycle as well as on rolling basis. For more information please contact
the department manager,<a href='mailto:binoj@iiitd.ac.in'> binoj@iiitd.ac.in</a></b></p>
<ul>
	<li>Candidates can apply only through the online application portal. There is no
provision for offline submission of application forms.</li>
<li>UGC-JRF qualified candidates are strongly encouraged to apply.</li>
<li>There is no application fee for PhD program.</li>"; 
        }
        else
        {
        	echo "
        	<br><br><Br>
        	<h1>Sociology/Social Anthropology</h1>


IIIT–Delhi offers PhD in Sociology/Social Anthropology with a focus on following <strong>research
areas:</strong>
<br><br>
Information Communication Technologies; Privacy and Surveillance;  Gig Economy;  Smart
Aging;  Technology and Society;  Education and Technology; Urban Sociology; Urban
Politics; Infrastructure Studies; Environment; Waste and Pollution; Urban E-waste practices;
Ecology; Anthropocene; Precarious Caste; Class; Labour; Gender; Childhood; Inequality;
Civility, Migration and Transnationalism; Demographic Anthropology; Kinship Studies
<br><br>
The curriculum for PhD programs in Sociology and Social Anthropology is designed to
strengthen fundamentals in theory and research methods through Core/Compulsory courses
and provide sufficient scope to cultivate critical and innovative thinking through Independent
Studies and Seminar style courses.  The aim is to impart training to conduct high quality
research.

<h3>Criteria:</h3>
<ul>
	<li>MA/MSc/ MPhil in Sociology, Anthropology, Political Science, Development Studies or any
other related Social Sciences discipline.</li>
<li>BTech/MTech. in any discipline and/or MBA/MSW.</li>
<li>Students applying with MA/MSc/MPhil/MSW need to have secured at least second division
(at least 50% marks or 5.5 CGPA on a scale of 10).</li>
<li>Students applying with BTech/MTech need to have secured at least 70% marks or 7.5 CGPA
on a scale of 10</li>
<li>Students applying with MBA need to have secured at least 70% marks or 3.0 CGPA on a
scale of 4.</li>
</ul>

<h3>Selection Process:</h3>

Eligible candidates will be invited to write an entrance examination that will test the
candidate's knowledge in foundational Sociology and Anthropology topics.Short-listed
candidates from the entrance examination stage will be interviewed by an expert committee
and the final decision on the admission will be made based on the candidate’s overall
performance.
<br><br>
Candidates applying for Ph.D. in Sociology/Anthropology should submit a 2-page statement
of purpose (SoP) delineating research theme(s) within Sociology/Anthropology that may
include specific questions of potential research interest to the candidate when applying. The
candidate is expected to clearly express his/her interest in the outlined research theme(s) or
questions to the extent possible.
<br><br>
Preference will be given to those with a post-graduate degree in Sociology/Anthropology.
Preference will also be given to those who have cleared either NET/JRF or SLET.

<h3>Coursework requirement:</h3>

<ul>
<li>PhD students will be required to complete 32 credits of PhD level coursework.
Students who enter after an MPhil will need to complete a minimum of 24 credits

(implying a waiver of maximum 8 credits). This waiver in coursework may only be
provided with the permission from the thesis advisor and the dissertation committee.</li>
<li>In addition, students are required to complete 56 research credits.</li>
<li>500-level courses (or higher) will be considered towards the PhD program. However,
students may be allowed to take at most two advanced undergraduate courses (300-
level or higher) with the permission of the thesis advisor and PGC.</li>
<li>Maximum of 2 Independent Study courses are allowed to be counted towards PhD
credits. Independent Project credits are disallowed for PhD program in Social
Sciences and Humanities disciplines.</li>
<li>Specialized coursework in addition to the general requirements above. Students are
expected to compulsorily take three courses - Research Methods in
Sociology/Anthropology, Theories in Sociology/Anthropology and
Sociology/Anthropology of India worth 12 credits in total.</li>
<li>The total of 32 course credits will be divided as 16 credits for Courses and 16 credits
for PhD level research seminar style classes (where research papers are intensively
discussed by the course instructor).</li>
<li>Students are encouraged to actively audit any related courses other than those
expected for credit coursework with the permission of the thesis adviser.</li>
</ul>

<br><br>
<h1>Economics</h1>

IIIT–Delhi offers PhD in Economics with focus on
<ul>
	<li>Industrial Organization</li>
	<li>Behavioural Economics</li>
	<li>Game Theory and Market Design</li>
	<li>Political Economy and Development</li>
	<li>Applied Econometrics</li>
	<li>Natural Resource Economics</li>
	<li>Agricultural Economics</li>
</ul>
<h3>Criteria:</h3>
<ul>
	<li>MA/MSc/MPhil in Economics, Statistics, Mathematics or basic sciences</li>
<li>BTech/MTech. in any discipline and/or MBA.</li>
<li>Students applying with MA/MSc/MPhil need to have secured at least second division
(at least 50% marks or 5.5 CGPA on a scale of 10).</li>
<li>Students applying with BTech/MTech need to have secured at least 70% marks or 7.5
CGPA on a scale of 10</li>
<li>Students applying with MBA need to have secured at least 70% marks or 3.0 CGPA
on a scale of 4.</li>
</ul>

<h3>Selection Process:</h3>
Admission is generally offered on the basis of an interview, which may be
supplemented by a written test, if necessary. The Institute will invite a limited number
of candidates for a written test and interview based on the academic records. The final
selection will be mainly based on academic credentials, written test and/or interview.
The candidates who do not qualify in the written test need not appear for an interview.
The reserved category candidates will be given due relaxation in cutoff marks as per
the norms.

<h3>Coursework requirement:</h3>

<ul>
<li>PhD students will be required to complete 32 credits of PhD level coursework.
Students who enter after an MPhil will need to complete a minimum of 24 credits
(implying a waiver of maximum 8 credits). This waiver in coursework may only be
provided with the permission from the thesis advisor and the dissertation committee.</li>
<li>In addition, students are required to complete 56 research credits</li>
<li>500-level courses (or higher) will be considered towards the PhD program.
However, students may be allowed to take at most two advanced undergraduate
courses (300-level or higher) with the permission of the thesis advisor and the PGC.</li>
<li>Maximum of 2 Independent Study courses are allowed to be counted towards PhD
credits.</li>
</ul>

<p align='justify' style='font-size: 16px;'><b>Applications for admission to the PhD program are invited for the regular
academic cycle as well as on rolling basis. For more information please contact
the department manager,<a href='mailto:binoj@iiitd.ac.in'> binoj@iiitd.ac.in</a></b></p>
<ul>
	<li>Candidates can apply only through the online application portal. There is no
provision for offline submission of application forms.</li>
<li>UGC-JRF qualified candidates are strongly encouraged to apply.</li>
<li>There is no application fee for PhD program.</li>";
        }
        function button2() { 
            echo "<br/><br/><br/><u>Academic</u><br><br>1) &#39;Representations of Rape in Popular Culture: Gone Girl and Badlapur&#39; (Co-authored with
Dipti Tamang). In International Feminist Journal of Politics, Volume 18, Issue 4, 14th
December, 2016; pp. 614-618.<br/><br/>2)'The Bitter Aftertaste of the Beef Ban; Choice, Caste and Consumption'. In Economic and
Political Weekly, Volume 51, Issue 10, 2016; pp 14-15. ISSN-0012-9976<br/><br/>

3) ‘Structures of Discrimination: A Response’ (co- authored with Rahul Menon). In
Economic and Political Weekly, Volume 48, Issue 15, 2013; pp 77-78. ISSN- 0012-9976.<br/><br/>

4) 'Fade in …Fade Out: Mapping the Emergence and Disappearance of the Vamp on the
Terrain of Hindi Cinema’ in Exploring the Popular: Texts, Identities and Politics; pp.
153-171. (Pune: Krantijyoti Savitribai Phule Women’s Studies Center, 2008).<br/><br/>
5)Contributed to ‘Isn’t this Plate Indian? Dalit Memories and Histories about Food’ (Pune:
Krantijyoti Savitribai Phule Women’s Studies Center, 2009, pp. 101-105)<br><br><br><u>Newspaper, News Sites and Non Academic</u><br><br> 1) Can the Spirit of California’s Gig Economy Bill Spread to India? In<a href=. 'https://thewire.in/economy/can-the-spirit-of-californias-gig-economy-bill-spread-to-india'> thewire.in</a>,
September19, 2019<br><br>2) ‘Upholding Patriarchy in the Name of Choice’ in The Hindu, January 31 st , 2013 (Web
Edition)<br><br>3) State of Dalit Society in India. In Malayala Manorama Yearbook 2017 (Kottayam:
Manorama Manorama Press, 2017, pp. 805-811"; 
        } 

    function button3()
    {
    	echo 
        "
          <br><br>  <br/><u><i>1. Sociological Theory :</i></u><br/><br/><br>Semester: Winter Semester<br>
Sociology is a fundamental social science that builds an understanding of the dynamics of an
increasingly complex world. As a discipline it fosters an understanding not merely of the
social element of human life but of how economic, social and political arrangements intersect
to create and transform institutions, groups and communities of which we are a part. To that
end a fundamental course in Sociological Theory will build an understanding on some of the
big questions we confront today- globalisation, the entrenchment of information technology in
our lives, the rise of social inequalities and an increased concern for the environment.
<br><br>
The course will do this by turning to classical sociological theories that offer us an ‘epic
theory’ to understand the development of the modern world. The second half of the course
will focus on contemporary issues and theories tracing their links to and away from the
classical approaches. A study of theory will allow students to critically analyse the
development of values and institutions that have been the foundation of modern society both
in India and across the world.
<br/><br/><br/><br/>

<u><i>2. Key Concepts in Economic Sociology:</u></i><br/><br/><br/>
Course Code: SOC 212<br>
Traditional economic analysis takes the rational individual as its starting point. Economic
Sociology on the other hand encourages students to see rational self-interest and action as
embedded in society, influenced by group dynamics, legal institutions, power, organizations
and even culture. It justifies the application of independent sociological methods and
concepts to the examination and understanding of the Economy as a sphere of production,
consumption and exchange of goods and services, which is observable in all human
societies, not only the modern and advanced. It thereby encourages students to relate
economic actions to all other forms of social actions observable in society – the religious, the
familial, the technological and the political. In sum, Economic sociology identifies the
obligatory, symbolic and power seeking motivations underlying human economic action, not
only the useful or utilitarian.<br/><br/>
This course provides students with a corrective perspective. It re-ignites awareness of
fundamental questions and looks to the contributions of thinkers like Karl Polanyi, Marcell
Mauss and Granovetter and Swedberg to reconsider our assumptions on how we
produce,consume and exchange, and live.
        ";

    }
     ?>



<?php include ('main-footer.php'); ?>
	
</div><!--page content End-->


</div>
</body>
</html>