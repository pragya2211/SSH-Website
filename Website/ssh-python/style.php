<?php
    header("Content-type: text/css; charset: UTF-8");
?>
body {
    font-family:'Droid sans', normal;
    text-align:left;
    margin:auto;
    position:relative;
    font-size:90%;
    background:white;
    margin:0px auto;
    padding:20px 0px;
    width:100px;
    height:800px;
    min-width:1000px;
    max-width:1000px;
    line-height:120%;
}

a {
    text-decoration:none;
}

a.plainlink {
    text-decoration:none;
    color:#000; 
}

ul li {
    padding-top:5px;
    padding-bottom:5px;
}

ol li {
    padding-top:5px;
    padding-bottom:5px;
}

h1 {
    font-size:170%;
    margin-top:2px;
    padding-top:5px;
    padding-bottom:5px;
    color:#3fada8;
}

h2 {
    font-size:140%;
    margin-top:3px;
    padding-top:15px;
    padding-bottom:0px;
    color:#3fada8;
}

h3 {
    font-size:115%;
    margin-top:3px;
    padding-top:10px;
    padding-bottom:0px;
    color:#3fada8;
}

.top_links {
    position:absolute;
    width:100%;
    left:0px;
    font-size:91%;
    margin-left:0px;
    margin-top:-61px;
	text-align:right;
}

.top_links a {
    color:#444;
    text-decoration:underline;
    /*font-variant:small-caps; */
}

.search{
    position:absolute;
    width:350px;
    height:25px;
    left:0px;
    margin-left:0px;
    margin-top:-70px;
    display:inline-block;
}

.searchbox {
    display:inline-block;
    position:relative;
    width:280px;
    height:25px;
    left:0px;
    border:1px solid #CCCCCC;
}
.searchlens {
    display:inline-block;
    height:25px;
}

.cselogo {
    text-align:left;
    padding-bottom:2px;
    margin-top:-14px;
}

.page {
    /*position:absolute;*/
    margin:15px;
    margin-top:30px;
}

.page2 {
    font-size:105%;    
    padding:10px;
    /*width:100;*/
    left:0;
    font-family: 'Droid Sans', sans-serif;
    line-height:140%;
    /*border:1px solid #AAAAAA;*/
}

.page td, th {
    border-bottom:1px dotted #AAAAAA;
    padding:5px;
}

.menu ul{
    list-style-type: none;
    font-size:107%;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background-color: #3fada8;
    font-variant:small-caps;
}

.menu li {
    float:left;
    padding:0px;
}

.menu li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 12px 13px;
    text-decoration: none;
}

.menu li a:hover, .dropdown:hover .dropbtn {
    background-color: gray;
}

.menu li.dropdown {
    display: inline-block;
    z-index:1000;
}

.menu .dropdown-content {
    display:none;
    font-size:85%;
    position:absolute;
    z-index:1000;
    /*background-color: #f9f9f9;*/
    background-color: #f1f9f9;
    min-width: 140px;
    max-width: 160px;
    border:1px solid #999;
    box-shadow: 0px 10px 18px 0px rgba(0,0,0,0.3);
    /*border-radius:5px;*/
    font-variant:normal;
}

.menu .dropdown-content a {
    color: black;
    padding: 8px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    border:1px solid #ddd;
    /*border-radius:5px;*/
    z-index:1000;
}

.menu .dropdown-content a:hover {
    /*background-color: #f1f1f1;*/
    background-color: #ddd;
    text-decoration:underline;
    z-index:1000;
}

.menu .dropdown:hover .dropdown-content {
    display: block;
    z-index:1000;
}

.news {
    z-index:0;
    font-size:90%;    
    position:absolute;
    margin-top:190px;
	margin-bottom:10px;
    padding:7px;
    padding-top:10px;
    /*padding-right:3px;*/
    width:26%;
    margin-left:29.7%;
    left:0;
    border:1px solid #CCCCCC;
    min-width:100px;
    height:50.5%;
    font-family: 'Droid Sans', sans-serif;
}

.news h1 {
    font-size:170%;
    padding:2px;
    padding-left:2px;
    padding-bottom:8px;
    margin-top:2px;
    margin-bottom:5px;
    font-variant:small-caps;
    border-bottom:1px solid #AAAAAA;
}

.news .news_body {
    margin:-7px;
    margin-top:-5px;
    padding-right:10px;
    position:relative;
    overflow-y:scroll;
    height:95.2%;
    z-index:0;
}

.news .news_body:hover {
    overflow-y:scroll;
}

.news li {
    list-style-type: none;
    margin-left:-30px;
    margin-bottom:15px;
    padding-bottom:5px;
    padding-left:0px;
    border-bottom:1px dotted #333333;
}

.newsa {
    z-index:0;
    font-size:90%;    
    margin-top:1px;
	margin-bottom:10px;
	margin-right:15px;
    padding:7px;
    padding-top:10px;
    width:30%;
    left:0;
	float:left;
    border:1px solid #CCCCCC;
    min-width:100px;
	min-height:400px;
	max-height:400px;
	overflow-y:scroll;
	height:50.5%;
    font-family: 'Droid Sans', sans-serif;
}

.newsa h1 {
    font-size:170%;
    padding:2px;
    padding-left:2px;
    padding-bottom:8px;
    margin-top:2px;
    margin-bottom:5px;
    font-variant:small-caps;
    border-bottom:1px solid #AAAAAA;
}

.newsa .news_body {
    margin:-7px;
    margin-top:-5px;
    padding-right:10px;
    
    /*overflow-y:scroll;*/
	/*overflow-x:scroll;*/
	max-height:545px;
    height:95.2%;
    z-index:0;
}

.newsa .news_body:hoverrr {
    overflow-y:scroll;
}

.newsa li {
    list-style-type: none;
    margin-left:-30px;
    margin-bottom:15px;
    padding-bottom:5px;
    padding-left:0px;
    border-bottom:1px dotted #333333;
}
.welcome {
    font-size:93%;    
   /* position:absolute;
    margin-top:-13px;
    padding:10px;*/
    padding-top:5px;
	padding-bottom:25px;
   /* width:55.2%;*/
    left:0;
    min-width:100px;
    /*height:160px;*/
    overflow:auto;
    overflow:clip;
    font-family: 'Droid Sans', sans-serif;
    /*border:1px solid #AAAAAA;*/
}


.welcome h1 {
    font-size:170%;
    margin-top:0px;
    margin-bottom:12px;
    font-variant:small-caps;
}

.images {
    font-size:95%;    
    position:absolute;
    margin-top:-13px;
    padding:0px;
    width:41.5%;
    right:0;
    /*border:1px dotted #AAAAAA;*/
    text-align:center; 
	min-width:100px;
    height:180px;
   overflow:hidden;
    font-family: 'Droid Sans', sans-serif;
}

.images img {
    max-width:100%;
    max-height:100%;
}

.publications {
    font-size:90%;    
    position:absolute;
    margin-top:190px;
    margin-bottom:10px;
	padding:7px;
    padding-top:10px;
    width:40%;
    right:0;
    border:1px solid #CCCCCC;
    min-width:100px;
    height:50.5%;
    font-family: 'Droid Sans', sans-serif;
}

.publications h1 {
    font-size:170%;
    padding:2px;
    padding-left:2px;
    padding-bottom:8px;
    margin-top:2px;
    margin-bottom:5px;
    font-variant:small-caps;
    border-bottom:1px solid #AAAAAA;
}

.publications li {
    list-style-type: none;
    margin-left:-28px;
    margin-bottom:13px;
    padding-bottom:2px;
    border-bottom:1px dotted #333333;
}

.publications .publications_body {
    margin:-7px;
    margin-top:-5px;
    padding-right:10px;
    position:relative;
    overflow-y:scroll;
    height:95.2%;
}

.publications .publications_body:hover {
    overflow-y:scroll;
}

.publications .title {
    color:#811;
    font-size:102%;
}

.publications .authors{
    font-style:italic;
}

.publications .venue a {
    font-weight:bold;
    font-size:96%;
    /*color:#900;*/
}

.events {
    z-index:0;
    font-size:90%;    
    position:absolute;
    margin-top:190px;
    margin-bottom:10px;
	padding:7px;
    padding-left:9px;
    padding-top:10px;
    width:27%;
    left:0;
    border:1px solid #CCCCCC;
    min-width:100px;
    height:50.5%;
    font-family: 'Droid Sans', sans-serif;
}

.events .events_body {
    z-index:0;
    margin:-7px;
    margin-top:-5px;
    padding-right:10px;
    position:relative;
    overflow-y:scroll;
    height:95.2%;
}

.events .events_body:hover {
    overflow-y:scroll;
}


.events h1 {
    font-size:170%;
    padding:2px;
    padding-left:2px;
    padding-bottom:8px;
    margin-top:2px;
    margin-bottom:5px;
    font-variant:small-caps;
    border-bottom:1px solid #AAAAAA;
}

.events h2 {
    font-size:96%;
    padding-left:0;
    padding-bottom:1px;
    margin-top:2px;
    margin-bottom:0px;
    color:#844444;
}

.events li {
    list-style-type: none;
    margin-left:-30px;
    margin-bottom:0px;
    margin-top:9px;
    padding-left:0px;
    padding-bottom:5px;
	border-bottom:1px dotted #333333;
}



.facdiv {
    font-size:90%;
    display:inline-block;
    margin:15px;
    width:46%;
    height:190px;
    border:1px solid #AAAAAA;
    box-shadow: 0px 6px 9px 0px rgba(0,0,0,0.3);
    vertical-align:center;
}

ul.faclist li {
    font-size:110%;
    /*font-weight:bold;*/
    padding-bottom:5px;
}

.facdiv .facname {
    font-size:150%;
    font-weight:bold;
    line-height:10px;
    color:#444484;
}

.facdiv .facimg {
    position:absolute;
    margin:15px;
    width:100px;
}

.facdiv .facdescr {
    position:absolute;
    margin:15px;
    margin-left:135px;
    width:30%;
}

.facdiv2 {
    font-size:90%;
    display:inline-block;
    margin:2px;
    width:32%;
    height:180px;
    border:1px dotted #AAAAAA;
    /*box-shadow: 0px 6px 9px 0px rgba(0,0,0,0.3);*/
    vertical-align:center;
    background-color:#fcfcfc;
}

.facdiv2 .facname2 {
    font-size:120%;
    font-weight:bold;
    line-height:5px;
    color:#444484;
	/*
	display: inline-block;
  	display:-moz-inline-stack;
  	zoom:1;
  	*display:inline;
	*/
}
.facdiv2 .facimg2 {
    position:absolute;
    margin:10px;
    width:80px;
    height:90px;
}
.facdiv2 .facdescr2 {
    position:absolute;
    margin:10px;
    margin-top:15px;
    margin-left:100px;
    width:30%;
}
.facdiv2 .researchi {
    font-size:90%;
	display: inline-block;
  	display:-moz-inline-stack;
  	zoom:1;
  	
	/* *display:inline; */
	/*display: -webkit-flex; /* Safari */ 
    /*-webkit-flex-wrap: wrap; /* Safari 6.1+ */
    /*display: flex;   
    /*flex-wrap: wrap;
	/*white-space: pre-wrap;      /* CSS3 */   
    /*white-space: -moz-pre-wrap; /* Firefox */   
    /*white-space: -o-pre-wrap;   /* Opera 7 */    
    /*word-wrap: break-word;      /* IE */
	width:68%;
}
.footer {
margin-top:20px;
    color:#444;
    bottom:0;
    border-top:1px solid #CCCCCC;
    font-size:90%;
    width:100%;
    text-align:center;
    height:35px;
	padding-top:5px;
}

.footer-page {
    position:relative;
    color:#444;
    border-top:1px solid #CCCCCC;
    font-size:90%;
    width:100%;
    text-align:center;
    height:5px;
}

.absdiv {
    font-size:90%;
    display:inline-block;
    margin:8px;
    width:95%;
    height:auto;
	min-height:250px;
	height:auto;
    border:1px dotted #AAAAAA;
    /*box-shadow: 0px 6px 9px 0px rgba(0,0,0,0.3);*/
    vertical-align:center;
    background-color:#fcfcfc;
}

.absdiv .absname {
    font-size:120%;
    font-weight:bold;
    line-height:5px;
    color:#444484;
}

.absdiv .absimg {
    position:absolute;
    margin:30px;
    /*border:1px solid black;*/
    width:100px;
}

.absdiv .absdescr {
    position:absolute;
    margin:10px;
    margin-top:140px;
    margin-left:30px;
    width:40%;
}

.absdiv .abscontent {
    /*position:absolute;*/
    margin:20px;
    margin-left:180px;
    width:77%;
    height:auto;
	text-align:justify;
    /*border:1px solid black;*/
}

.image-container
{
    width: 200px;
    height: 200px;
    position: relative;
    transition: left 2s;
    -webkit-transition: left 2s;
    -o-transition: left 2s;
}
.slider-image
{
    float: left;
    margin: 0px;
    padding: 0px;
    display: inline-table;
}

/*EOF*/