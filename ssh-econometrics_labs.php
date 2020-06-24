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

<h1> Econometrics Lab</h1>
<h2> Introduction </h2>
<p align="justify" style="font-size: 14px;"> 
The Econometrics Lab is a computing environment for faculty and students of IIIT-
Delhi. The lab is meant to provide instruction in econometric methods and
applications at undergraduate and graduate level, and to provide infrastructure for
applied economics researchers who work with data and use tools like econometric
modeling, spatial analysis, and satellite image processing.  
</p> 
<h3>Software</h3>
<p align="justify" style="font-size: 14px;">
    <ul>
        <li>R studio</li>
<li>Stata</li>
<li>SAS</li>
<li>ArcGIS</li>
<li>RDAS Imagine</li>
<li>GAUSS</li>
    </ul>
</p>




    <form method="post"> 
          
        

        <input type="submit" name="button3"
                class="button" value="Blogs" /> 
        <input type="submit" name="button4"
                class="button" value="Projects" />
        <input type="submit" name="button5"
                class="button" value="People" />
    </form> 

<?php
        
       
        if(array_key_exists('button3', $_POST)) { 
            button3(); 
        }
        else if(array_key_exists('button4', $_POST)) { 
            button4(); 
        }
        else if(array_key_exists('button5', $_POST)) { 
            button5(); 
        }
        

    function button3()
    {
        echo "<br><br><br><u><b>Applied Econometric Analysis (AEA) Blog</b></u><br><br>This blog contains interesting India-centric applied econometrics applications that
were compiled by the students and research affiliates of IIIT-Delhi, often as term
papers and project reports.<br>
<h3><a href = 'aea_winter2020.php' style = 'color:#3fada8'>Inequality and Environmental Outcomes</a></h3>
Undergraduate research as part of Econometrics I (ECO 221), Winter 2020<br>
For more details, <a href = 'aea_winter2020.php'>click here</a>
    
";
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