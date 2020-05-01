<?php include ('main-header.php'); ?>
<div class="page">
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

<h2> Econometrics Lab</h2>

    <div class="container" style="width: 900px; height: 50px;margin-left: 20px;">
    
    <input type="radio" id="i1" name="images" checked />
    <input type="radio" id="i2" name="images" />
    <input type="radio" id="i3" name="images" />
    <input type="radio" id="i4" name="images" />
    <input type="radio" id="i5" name="images" />    
    
    <div class="slide_img" id="one">            
            
            <img src="./gallery/1.jpeg">
            
                <label class="prev" for="i5"><span>&#x2039;</span></label>
                <label class="next" for="i2"><span>&#x203a;</span></label>  
        
    </div>
    
    <div class="slide_img" id="two">
        
            <img src="./gallery/2.jpg" >
            
                <label class="prev" for="i1"><span>&#x2039;</span></label>
                <label class="next" for="i3"><span>&#x203a;</span></label>
        
    </div>
            
    <div class="slide_img" id="three">
            <img src="./gallery/3.jpeg">  
            
                <label class="prev" for="i2"><span>&#x2039;</span></label>
                <label class="next" for="i4"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="four">
            <img src="./gallery/4.jpeg"> 
            
                <label class="prev" for="i3"><span>&#x2039;</span></label>
                <label class="next" for="i5"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="five">
            <img src="./gallery/5.jpeg">  
            
                <label class="prev" for="i4"><span>&#x2039;</span></label>
                <label class="next" for="i1"><span>&#x203a;</span></label>

    </div>

    <div id="nav_slide">
        <label for="i1" class="dots" id="dot1"></label>
        <label for="i2" class="dots" id="dot2"></label>
        <label for="i3" class="dots" id="dot3"></label>
        <label for="i4" class="dots" id="dot4"></label>
        <label for="i5" class="dots" id="dot5"></label>
    </div>
        
</div>


    <form method="post"> 
          
        <input type="submit" name="button2"
                class="button" value="Introduction" />

        <input type="submit" name="button3"
                class="button" value="Blogs" /> 
        <input type="submit" name="button4"
                class="button" value="Projects" />
        <input type="submit" name="button5"
                class="button" value="People" />
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
            echo "<br><br><br>The Econometrics Lab is a computing environment for faculty and students of IIIT-
Delhi. The lab is meant to provide instruction in econometric methods and
applications at undergraduate and graduate level, and to provide infrastructure for
applied economics researchers who work with data and use tools like econometric
modeling, spatial analysis, and satellite image processing."; 
        } 

    function button3()
    {
        echo "<br><br><br><u><b>Applied Econometric Analysis (AEA) Blog</b></u><br><br>This blog contains interesting India-centric applied econometrics applications that
were compiled by the students and research affiliates of IIIT-Delhi, often as term
papers and project reports.";
    }
    function button4()
    {
        echo "<br><br><br>1) Agricultural risk management on small farms.<br><br>
2)Farmer’s perceptions and their roles in agricultural production decisions.";
    }
    function button5()
    {
        echo "<br><br><br><strong><h3>Lab Coordinator :</strong></h3><br><a style: font-size = 13px;> Gaurav Arora</a><br><br>
        <b><h3>Associates:</h3></b><br>
1) Saif Ali (Economics PhD student)<br><br>
2) Sumedha Shukla (Research Associate)";
    }
    ?>

	<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>