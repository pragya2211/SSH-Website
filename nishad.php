<!DOCTYPE html>
<html>
<style>
	form
	{
		width:   1500px;
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
<h2> Nishad Patnaik </h2>
<br/>
<p style="float:center; "><strong><img alt="" src="https://www.iiitd.ac.in/sites/default/files/images/faculty/nishad.jpg" style="float:left;height:200px; border:1px solid; padding:2px;" /></strong><br>     </p>
<p style="margin-left: 200px">Assistant Professor<br>
Nishad received his PhD in philosophy from The New School for Social Research (NSSR), New
York, U.S.A in 2013. He holds an M.A. in philosophy from NSSR, as well as a M.A. and M.Phil. in
philosophy from Delhi University. His dissertation work is entitled, “Time, Space and Finitude;
Kant and Husserl on the Question of Transcendental Logic” In addition to his research interests
in Kantian transcendental Idealism, and Husserlian phenomenology, Nishad’s other areas of
research include Social and Political Philosophy, Marx and the Critical Theory tradition, Ethics,
and the Philosophy of Technology. He is currently engaged in writing a book length manuscript
on the genealogy of nationalist identity and its apparently paradoxical reassertion in the
context of the hegemony of the contemporary capitalist world order.
 
Before joining IIITD, he was a visiting assistant professor at IIIT Hyderabad (2018-19), Visiting
Fellow at J.N.U. (2015-17), and held visiting faculty positions at IIT Delhi (2015-16), St. Stephen’s
College, Delhi (2016-17) and Westchester Community College, New York, 2013-14.</p>
    
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
1) Forthcoming:
Heidegger and the Politics of Essence&quot;, translated into Bengali, in
Ebong Mushayera<br/><br/>
2)“Indeterminacy and Identity: Kant and Husserl on Moral Consciousness”, ed.
Ranjan Kr. Panda, to be published by the Department of Humanities and Social
Sciences, IIT Bombay.<br/><br/>

3) “Science and the Promise of Objective Knowledge: Husserl’s Intersubjective
Renewal”, in Problems of the Self: Philosophical Writings in Consciousness, Subjectivity
and Otherness, ed. Manidipa Sen, Aakar Books, New Delhi, 2019.<br/><br/>

4)“Tom Rockmore: Kant and Phenomenology” (Review Essay) in Graduate
Faculty Philosophy Journal, The New School for Social Research, Vol. 33, Issue 1,
2012, pp.250-259<br/><br/>
5)“The Emergence of Class Consciousness:  Lukács on ‘Objective Possibility”,
in Social Scientist, Vol. 45, Nos. 11-12, November-December, 2017, pp. 41-62<br><br> 
6)“On the Question of Capital Punishment” in Economic and Political Weekly, Vol.
50, Issue 32, August 08, 2015, pp. 55-61<br><br>
7)“General Elections and India’s Shift to the Right” in Economic and Political
Weekly, Vol. 49, Issue 29, 19 July 2014, pp. 22-24<br><br>
8)“The Question of Alienation in Marx” in Social Scientist, Vol. 37, No. 11/12,
November-December 2009, pp. 48<br><br>
9)“Fetishism and Its Relation to Time” in Social Scientist, Vol. 34, No. 9/10,
September - October 2006, pp. 72-93<br><br>
10)“The Politics of Essence” in Social Scientist, Vol. 31 No. 1/2, January – February,
2003, pp.85-98"; 
        } 

    function button3()
    {
    	echo "<br/><br/><br/><u><i>1. Philosophy of Technology</i></u><br/><br/><br>Semester: Winter<br>Credits:4<br>Code:PT<br>
In the past few decades, with the advent of the internet, social media, and
increasingly sophisticated modes of automation and AI, technology has come
to influence and shape almost every facet of human life – both at the
physiological and social levels—permeating our bodies and our most ‘personal’
spaces and relations. These new technologies seem to stand in stark contrast
to the technologies of the Industrial age, which arguably, had a more ‘extrinsic’
relation to our embodied selves. Further, if it is correct to say that the gap
between ‘thinking’ (design) and ‘doing’ (manufacture) has reduced significantly
with automation (CNC, 3D printing, Industrial Robots etc.), then such a contrast
emerges even between traditional industries (of the ‘first’ and ‘second’
industrial revolutions) and modern industrial production.     
               Keeping this provisional and heuristic contrast in view, this course will
examine ‘traditional’ and more contemporary philosophical understandings of
technology and its relational modalities to our embodied existence. We will

begin by analyzing Marx’s and Heidegger’s critiques of technology under (for
Marx explicitly and for Heidegger implicitly) conditions of capitalist modernity.
We trace these critiques back to the broader critique of scientific positivism that
emerged in the objective-idealist tradition in continental philosophy. We then
consider whether their conceptions of
technological alienation and determinism still hold today, by looking at the
writings of contemporary thinkers of technology such as Don Ihde, Bruno
Latour, David Chalmers and Sherry Turkle, among others. The tendencies that
the initial contrast between industrial and ‘personalized’ technologies seems to
suggest will be complicated by taking into consideration the environmental
crisis, arising with the advent of the ‘Anthropocene’. The course will focus on a
few basic recurrent and interconnected themes:<br><br><br>1)  What is Technology? How is it to be understood in relation to human
beings?<br><br>
 2) How do we conceive the relation between technology and science? Is
technology merely ‘applied science’ or is it intrinsic to the possibility of
science? Does the contemporary notion of ‘technoscience’ do justice to the
various dimensions of this relationship?<br><br>
3) How do we understand the relationship between technology and nature? If
the specifically technological mode of encountering nature is the source of the
present environmental crisis that threatens to spiral out of control, then does it
make sense to turn to technology to address environmental concerns?  <br> <br> 
4) Is the distinction between the ‘real’ and the ‘virtual’ still tenable? What
consequences does a critique that undermines this distinction have for
traditional metaphysical and epistemological conceptions of the relation
between the ‘mind’ and the ‘body’ or ‘appearance’ and ‘reality’? How do these
consequences (potentially) transform our understanding of technology?<BR> <br> 
5) Will technological progress give rise to dystopian or utopian futures? Or are
both these positions—the one reflected in a Luddite opposition to technology
and the other, in a resurgent techno-boosterism which sees it as a panacea to
all problems afflicting humanity— based on overestimating the possibilities of
technology? Are there inherent limits to the technological mode of thinking?<br/><br/><br/><br/>
";

    }
    function button4()
    {
    	echo "<br/><br/><br/><b><i><u>IP:</i></u><br><br><br> Book on Nationalism<br><br>";
    }
    function button5()
    {
    	echo "<br/><br/><br/>
        A)Presentation on &quot;Kant and Husserl on Transcendental Logic&quot;, to mark &#39;World
Logic Day&#39;, Organized by the Mathematics Department, IIITD, 16th Jan. 2020<br><br>
B)Conference Presentation: &#39;What is Thinking&#39; 4-6, School of Language, Literature,
and Cultural Studies, J.N.U., New Delhi, 4-6 Nov. 2019<br><br>
C)Presentation on at the Seminar on &#39;Understanding the Self&#39;, Philosophy Dept.,
Jadavpur University, Calcutta,  26-27 March, 2019.<br><br>
D)Presentation on &quot;The Ethics of Social Networking: Cyber Alienation and its
Relation to Traditional Forms of Alienation&quot;, at the Workshop on &quot;Philosophy
and Cyber Technology&quot;, IIITD, 11-13th Feb. 2019";
    }
    ?>







<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>