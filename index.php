<?php include ('main-header.php'); ?>
<!--Concatenate with the particular page HTML followed by the FOOTER HTML-->
<!--Append to the common top HTML-->

<style type="text/css">

	form input: hover
	{
		background: gray;
	}
	form input[value]
	{
		color: white;
		font-variant: small-caps;

	}
	input[type=submit] {
	  width: 100%;
	  font-size: 15px;
	  background-color: #3fada8;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  border-radius: 50%;
	}
	input[type=image] {
		height: 10%;
	  width: 10%;
	  font-size: 15px;
	  color: white;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  border-radius: 50%;
	}
	a:hover 
	{
  		text-decoration: underline;
	}
</style>

<div class="page">

<div class="container" style="width: 880px; height: 50px;">
    
    <input type="radio" id="i1" name="images" checked />
    <input type="radio" id="i2" name="images" />   
    
     <div class="slide_img" id="one">            
            <iframe src="./gallery/Economics.pdf#view=fitH" style="width: 880px;height: 420px;"></iframe>
            
                <label class="prev" for="i2"><span>&#x2039;</span></label>
                <label class="next" for="i2"><span>&#x203a;</span></label>  
        
    </div>
    <div class="slide_img" id="two">
        
            <img src="./gallery/3.jpg" >
            
                <label class="prev" for="i1"><span>&#x2039;</span></label>
                <label class="next" for="i1"><span>&#x203a;</span></label>
        
    </div>
            


    <div id="nav_slide">
        <label for="i1" class="dots" id="dot1"></label>
        <label for="i2" class="dots" id="dot2"></label>
    </div>
        
</div>

<script language="javascript">
ScrollRate = 100;

function scrollDiv_init() {
	DivElmnt = document.getElementById('MyDivName');
	ReachedMaxScroll = false;
	
	DivElmnt.scrollTop = 0;
	PreviousScrollTop  = 0;
	
	ScrollInterval = setInterval('scrollDiv()', ScrollRate);
}

function scrollDiv() {
	
	if (!ReachedMaxScroll) {
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop++;
		
		ReachedMaxScroll = DivElmnt.scrollTop >= (DivElmnt.scrollHeight - DivElmnt.offsetHeight);
	}
	else {
		ReachedMaxScroll = (DivElmnt.scrollTop == 0)?false:true;
		
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop--;
	}
}

function pauseDiv() {
	clearInterval(ScrollInterval);
}

function resumeDiv() {
	PreviousScrollTop = DivElmnt.scrollTop;
	ScrollInterval    = setInterval('scrollDiv()', ScrollRate);
}
</script>
<br>
<body onLoad="scrollDiv_init()">
	<h2 style="position: absolute;margin-left: 710px;">Latest news</h2>
<div id="MyDivName" style="overflow:auto;width:300px;height:350px; position: absolute;margin-left: 640px; margin-top: 50px;" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">

On 7th February, 2020, Dr. Paro Mishra presented a paper at the 'Economy and Society in India' Seminar at The Centre for Development Studies, Trivandrum Kerala.<br><br>

On 21st February, 2020, Dr. Paro Mishra presented a paper at the International Conference on 'Reproduction, Demography and Cultural Anxieties in India and China in the 21st Century' at IIT, Delhi.<br><br>

On the 29th Jan 2020, Dr. Gayatri Nair presented a paper at the Indian Association of Women's Studies Conference titled 'Gender, Sustainability and Identity: Responses to Technology and the Future of Work'.<br><br>

On the May 17th, Dr. Kiriti Kanjilal presented a paper titled Endogenous Equity in Cournot Competition:<a href="http://semen.buaa.edu.cn/info/1006/14555.htm"> Welfare Analysis and Policy at Beihang University, Beijing</a><br><br>

An abstract of Sumedha Shukla has been selected "The Role of Formal and Informal Rural Credit on Crop Yield Distributions and Downside Risk" in INSEE-CESS International Conference.<br><br>

A paper by Dr Manohar Kumar titled 'Understanding emerging forms of dissent. Civil Disobedience or Uncivil Action?' has been accepted for presentation at the 11th International Conference on Applied Ethics to be held on December 15 and 16, 2018, University of Kyoto, Japan.<br><br>

Paper titled, "Understanding Health Literacy through the lens of Phronesis: The Case of Coronary Artery Disease Patients" authored by Dr. Venkata Ratnadeep Suri (Faculty, IIIT-D) co-authored by the faculty of Wee Kim Wee School of Communication and Information, Nanyang Technological University; (Shaheen Majid, Schubert Foo, Dumaual Sibal, Trinity Hannah, Yun Ke Chang) was presented at European Conference on Information Literacy (ECIL 2018) held in Oulu, Finland, from 24th - 27th September, 2018<br><br>

Our Faculty member, Manohar Kumar's book titled, 'Speaking Truth to Power. A Theory of Whistleblowing' co-authored with Daniele Santoro, has been published by Springer (2018). Whistleblowing is the public disclosure of information with the purpose of revealing wrongdoings and abuses of power that harm the public interest. This book presents a comprehensive theory of whistleblowing: it defines the concept, reconstructs its origins, discusses it within the current ethical debate, and elaborates a justification of unauthorized disclosures.

</div>
	<h2 style="position: absolute;margin-left: 680px; margin-top: 450px;">Events/Seminars Corner</h2>
	<br><br>
<div id="MyDivName2" style="overflow:auto;width:300px;height:350px; position: absolute;margin-left: 640px; margin-top: 490px;" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">

Dr. Paro Mishra (in collaboration with the Department of Humanities and Social Sciences, IIT, Delhi and Department of Liberal Arts, IIT, Hyderabad) organised an International Conference on 'Reproduction, Demography and Cultural Anxieties in India and China in the 21st Century' on 20-21 February, 2020. The event was funded by UNFPA, PFI, ICSSR, AJWS. Details available at<a href="http://tiny.cc/u4c8iz"> http://tiny.cc/u4c8iz </a><br><br>

Seminar by Prof Kalyan Chatterjee, Distinguished Professor of Economics and Management Science at the Pennsylvania State University, USA. The talk is scheduled on June 6, 2019 (Thursday) from 03:00 - 4:30 pm. <a href="https://ssh.iiitd.ac.in/images/Poster_Prof_Kalyan_Chatterjee.pdf">Read More >></a><br><br>

Seminar by Dr. Jeevant Rampal, Assistant Professor in the economics area at the Indian Institute of Management, Ahmedabad. The talk is scheduled on March 28, 2019 (Thursday) from 4:00 pm to 5:30 pm. <a href="https://ssh.iiitd.ac.in/images/Poster_Dr_Jeevant_Rampal.pdf">Read More >></a><br><br>

</div>
</body>

<!--Concatenate with the particular page HTML followed by the FOOTER HTML-->
<!--<div><img src="./images/ssh-banner.jpg" title="SSH Department IIITD"/></div> -->
<!--<div><a href="https://iiitd.ac.in/events/gisworkshop" target="_blank"><img src="./images/Training Course on Remote Sensing.jpg" title="SSH Department IIITD"/></a></div> -->
    <!--<div><a href="https://iiitd.ac.in/webstory/wpct" target="_blank"><img src="https://iiitd.ac.in/sites/default/files/images/events/wpctbanner.jpg" title="Workshop on Philosophy and Cyber-Technology, SSH Department IIITD"/></a></div> -->
    <div class="welcome">
       <!-- <h1>Welcome !</h1> -->
	
<div style="width: 550px; margin-left: 30px;">
<p align="justify">The Department of Social Science and Humanities (SSH) at the Indraprastha Institute of Information
Technology (IIIT Delhi) is home to a multi-disciplinary faculty offering courses and conducting
research in Economics, Sociology, Cognitive Science, Philosophy, Political Science and
Communication Theory.</p>
<p align="justify">Catering to undergraduate studies, the department delivers core courses and elective modules for an
innovative new degree programme, the B.Tech in computer science and Social Sciences (CSSS)
launched in 2017 in collaboration with the Department of Computer Science and Engineering at the
Institute. This unique B.Tech in CSSS, aims to develop cross-disciplinary IT knowledge and expertise
in students, very much in demand in the academia and industry. The courses offered within CSSS
program also provides to students specializing in other programs offered in the Institute and therefore
constitutes an integral part of academic planning and structure. For post-graduate studies SSH offers
Ph.D. in Economics and Sociology/Social Anthropology. The department houses a wide range of
laboratories like Econometrics, Game theory and cognitive science, enriched in facilities providing a
platform for research in these areas. </p>

<p align="justify">Located in the heart of India&#39;s capital, the department serves as a hub for IT and social sciences and
regularly hosts seminars, public talks and research related events at IIIT Delhi. It addresses the
educational needs we are likely to see in the future with even more convergence of IT with social
systems. It is concievable that an increasing role that IT will play in addressing society&#39;s problems, as
well as answering the human questions posed by social scientists, will lead to an increase in demand
for IT experts who are well versed in the social sciences and also of social scientists who understand
computing and IT and apply them innovatively to solve problems in their own domain. The SSH
department at IIIT Delhi would seek to bridge the disciplinary boundaries that exist between various IT
and social science streams and develop a cross -disciplinary research and teaching agenda that is
forward looking and cutting edge in technology education. </p>

<h2>Vision</h2>
<p align="justify">Modern university systems all over the world evolved by separating out the study of science and
technology from that of the liberal arts - philosophy, literature and history. Even the social sciences -
economics, sociology, anthropology and psychology - which emerged later under the strong influence
of the methods and goals of science, could not shake off this divide. But today, the influence of science
and technology over actual human lives and societies has increased so dramatically, that this division in
knowledge can no longer be supported. The development of Information Technology in particular, has
raised an urgent need over the last few decades, to be studied and researched in its social context, given
its huge potential for public good and the speed and intensity with which it has overtaken our everyday
lives.</p>
<p align="justify">The need to examine the societal and human implications of the vast successes and risks of IT can no
longer be denied. As a result, the Human and Social Sciences and Computer education have come
closer together in the best universities of the world. The Department of Social Sciences and Humanities
at IIIT Delhi addresses this changed environment in technology education through its teaching and
research program and offers a range of courses in Economics, Sociology and Cognitive Sciences as
well as from the broader grouping of Liberal Arts, Communications and Humanities to the students of
the Institute. The Department is home to the B.Tech. in IT and Social Sciences programme and
provides the core teaching and research support for this innovative educational offering.</p>

<br>
<br>
</p>
</div>


   

	<?php include ('main-footer.php'); ?>
	
</div><!--content End-->

</div>
</body>
</html>