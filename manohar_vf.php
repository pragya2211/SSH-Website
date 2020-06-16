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
<h2> Manohar Khushalani </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/manohar.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<h3 style="margin-left: 200px; ">Assistant Professor</h3>
    <p style="margin-left: 200px">Manohar Khushalani, a Visiting Professor at IIIT, Delhi. The courses he teaches are: Animation
&amp; Graphics, Film Making  Radio Podcasting and Theatre Appreciation. He has won Excellence in
Teaching awards for all the courses he has taught at IIITD. Overall he has received 9 teaching
excellence awards. Received Awards at Khajuraho International Film Festival 2017 ; 2018. The
2018 Pride of Asia Lifetime Achievement Award , Bangkok. Natsamrat Best Theatre Critic
2019
He runs One Vorld a Portal on Environment and Water, www.onevorld.com and StageBuzz, Ezine
on Theatre  Culture,  www.stagebuzz.org
Author of Irrigation Practice ; Design (5 Volumes - 1500 pages) published by Oxford  IBH and
sponsored by National Book Trust. Has been a Columnist with Midday and Pioneer. Currently he
writes for IIC Diary
Was Director, National Water Academy, Director, Environment Management Directorate,
CWC, Member Secretary, National Environmental Monitoring Committee for River Valley
Projects. Was Director of Instrumentation in the Dam Safety Organisation. Was Head of
Water Resources at Scott Wilson.
Conducted Film Pedagogy / Theatre / Management Games Workshops with innumerable
Institutions, Film &amp; Theatre Festivals. Has long term association with National Radio &amp; TV. Is on
various committees. Has been a panelist in numerous talk shows on Water, Environment &amp; Science on
most major Channels
Civil Engineering from BITS Pilani. Has done courses on Finite Element analysis from IIT, Delhi.
Course on Film Appreciation from Film and Television Institute, Pune. Studied Visual Basic at
STG, Management Development at NWA, Pune. Learnt to be a Trainer in Theatre &amp; Culture of
Civilisation, from UNESCO International Theatre Institute, Studied Programming in Fortran and
Design of Hydraulic Gates from CWC.</p>
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
            echo "<br/><br/><br/>1) Had been a Columnist with Midday and Pioneer for over a decade..<br/><br/>

3) Currently he writes for IIC Diary / StageBuzz / OneVorld<br/><br/>"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1.SSH Theatre Appreciation</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:SSH211<br><br/><br/><br/><br/>

<u><i>2.DES Animation &amp; Graphics:</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:DES302<br>
<br/><br/><br/><br/>

<u><i>3. DES Film Making &amp; Radio Podcasting:</i></u><br/><br/><br>Semester: Monsoon<br>Credits:4<br>Code:DES303<br><br/><br/><br/><br/>
";

    }
    function button4()
    {
    	echo "<br/><br/><br/><b><i><u>IP supervision:</i></u><br><br><br> 
            i)Modelling of Chandrayan<br> 2 Katyani Singh / Harshit Verma<br><br>
            ii)3 D Architectural Modelling: Harshit Verma / Ajit Singh<br><br>
            iii)Enhancement of Web Design Winter 2020:<br>a. Isha Kalra <br>b. Riya Sinha<br><br><br/><br/>

<b><i><u>BTP supervision:</b></u></i><br/><br/><br/>
i)New Media &amp; Design / Dev of Apps &amp; Website<br>
a. Sahil Yadav<br>
b. Tanishq Chaudhary<br><br>
ii)New Media Research &amp; Design Monsoon 2019<br>
a. Sahil Yadav<br>
b. Sejal Kumar<br><br>
iii)Website Application Development Monsoon 2019<br>
a. Naman Kumar<br>
b. Pankaj IIITD<br><br>
iv)Spreading Environmental Awareness through Digital Media (Summer &amp; monsoon)<br>
a. Aditya Diundi<br>
b. Utsav Rohilla<br>
c. Nitin Yadav<br><br>
v)Digital documentation &amp; Media Management – Winter 2020<br>
a. Ayesha<br>
b. Rahul Patwardhan<br>
c. Sejal Kumar<br>
d. Vyshakh<br><br>";
    }
    function button5()
    {
    	echo "<b></b></u><br><br><br>A) Directors Meet, Bharat Rang Mahotsav, NSD

3rd February 2020 Onwards<br>
Bharat Rang Mahotsav is the annual International Theatre Festival of NSD. Director’s
Meet is conducted by well known Theatre Critics of India. It’s a daily seminar in which Director’s of the
plays, performed at the festival are interviewed on stage and their show is analysed and assessed by
the critic. The audience consists of general public and studends of NSD. <br>Source of funding: NSD<br><br>
B) Short Term Certificate Course in Documentary and Ethnographic Filmmaking at IGNCA <br>
Saturday/ January 4 - 2pm to 5 pm
Introduction to post production 
Sunday/ January 5- 2 pm to 5 pm 
In- camera edit- opportunities and challenges 
Funding IGNCA<br><br>
C) Short Term Certificate Course in Film Scripting at IGNCA
Tuesday / December 17 History of Film Editing
Wednesday / December 18 Mime Theory and Practice
Funding IGNCA";
    }
    ?>







<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>