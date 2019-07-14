<?php
session_start();
$link=mysqli_connect("localhost","root","");     
mysqli_select_db($link,"seat_demo");
$final1= $_SESSION['moviecode'];
$final2= $_SESSION['timecode'];
$final3= $_SESSION['day'];
$final4 = $final1.$final2.$final3;
$_SESSION['table_name'] = $final4;
$query = "select seat from $final4 where status = '1'";
$res=mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Cardo|Signika|Allerta Stencil" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"> </script>
<style>
    .logo{
        width: 250px;
        height: 200px;
        position: relative;
        left: 1000px;
        top: -190px;
    }
.grid-container {
  position: relative;
  left: 100px;
  display: grid;
  grid-template-columns: 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px;
  grid-template-rows:auto;
  grid-gap: 10px;
}
    
  div div{
  display: grid;
  justify-content: center;
  /*align-items: center;*/
  border: 3px solid rgba(0, 0, 0, 0.3);
  background-color: 3px solid rgba(0, 0, 0, 0.05);
  border-radius: 5px;
}
    
    div{
        font-family: 'Allerta Stencil',sans-serif;
    }
    

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 5px 0;
  font-size: 7pt;
  font-family: 'Allertia Stencil', sans-serif;
}  
    .grid-container2 {
 position: relative;
 left: 550px;
 top: -386px;
 display: grid;
 grid-template-columns: 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px;
 grid-template-rows:auto;
 grid-gap: 10px;
}
.grid-container2 > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 5px 0;
  font-size: 7pt;
  font-family: 'Allertia Stencil', sans-serif;
}
    p{
        position: relative;
        left: 100px;
        top: 18px;
        font-family:'Cardo',sans-serif;
        color:#68696d;
    }
    
    img{
        position: relative;
        top: -350px;
        left: -200px;
    }
    .jumbotron-fluid{
     background-color:#003366; 
     height: 200px;
    }
    #jumbo{
     border-style: none;
         text-align: left;
    }
    #h1{
       position:absolute;
       float: left;
    }
    #h2{
         position:absolute;
       float: left;
       padding-top: 120px;
        padding-left: 110px;
    }
    

</style>

</head>
<body>
    
    	<div class="jumbotron jumbotron-fluid" >
  <div class="container" id="jumbo">
      <h1 id="h1" class="display-4"style="font-family:'Allerta Stencil',sans-serif;"><font color="white">Rendezvous</font></h1>
      <p  id="h2" class="lead" style="font-family:'Cardo',sans-serif"><font color="white">Your one step booking application</font></p>
      <img class="logo" src="Logo1.png"/>
  </div>
</div>

    
  <p >CLASSIC 200</p>
  <hr color="#DADADA" width="90%">
  <div class="grid-container">
  A<div id="1"  class="item">1</div>
  <div id="2"  class="item">2</div>
  <div id="3"  class="item">3</div>  
  <div id="4"  class="item">4</div>
  <div id="5" class="item">5</div>
  <div id="6" class="item">6</div>
  <div id="7" class="item">7</div>
  <div id="8" class="item">8</div>
  <div id="9" class="item">9</div>
  <div id="10" class="item">10</div>
  <div id="11" class="item">11</div>
  <div id="12" class="item">12</div>
	  
  B<div id="13" class="item">13</div>
  <div id="14" class="item">14</div>
  <div id="15" class="item">15</div>  
  <div id="16" class="item">16</div>
  <div id="17" class="item">17</div>
  <div id="18" class="item">18</div>
  <div id="19" class="item">19</div>
  <div id="20" class="item">20</div>
  <div id="21" class="item">21</div>
  <div id="22" class="item">22</div>
  <div id="23" class="item">23</div>
  <div id="24" class="item">24</div>

  C<div id="25" class="item">25</div>
  <div id="26" class="item">26</div>
  <div id="27" class="item">27</div>  
  <div id="28" class="item">28</div>
  <div id="29" class="item">29</div>
  <div id="30" class="item">30</div>
  <div id="31" class="item">31</div>
  <div id="32" class="item">32</div>
  <div id="33" class="item">33</div>
  <div id="34" class="item">34</div>
  <div id="35" class="item">35</div>
  <div id="36" class="item">36</div>
  
  D<div id="37" class="item">37</div>
  <div id="38" class="item">38</div>
  <div id="39" class="item">39</div>  
  <div id="40" class="item">40</div>
  <div id="41" class="item">41</div>
  <div id="42" class="item">42</div>
  <div id="43" class="item">43</div>
  <div id="44" class="item">44</div>
  <div id="45" class="item">45</div>
  <div id="46"class="item">46</div>
  <div id="47" class="item">47</div>
  <div id="48" class="item">48</div>

  E<div id="49" class="item">49</div>
  <div id="50" class="item">50</div>
  <div id="51" class="item">51</div>  
  <div id="52" class="item">52</div>
  <div id="53" class="item">53</div>
  <div id="54" class="item">54</div>
  <div id="55" class="item">55</div>
  <div id="56" class="item">56</div>
  <div id="57" class="item">57</div>
  <div id="58" class="item">58</div>
  <div id="59" class="item">59</div>
  <div id="60" class="item">60</div>
  
  
  F<div id="61" class="item">61</div>
  <div id="62" class="item">62</div>
  <div id="63" class="item">63</div>  
  <div id="64" class="item">64</div>
  <div id="65" class="item">65</div>
  <div id="66" class="item">66</div>
  <div id="67" class="item">67</div>
  <div id="68" class="item">68</div>
  <div id="69" class="item">69</div>
  <div id="70" class="item">70</div>
  <div id="71" class="item">71</div>
  <div id="72" class="item">72</div>
  
  G<div id="73" class="item">73</div>
  <div id="74" class="item">74</div>
  <div id="75" class="item">75</div>  
  <div id="76" class="item">76</div>
  <div id="77" class="item">77</div>
  <div id="78" class="item">78</div>
  <div id="79" class="item">79</div>
  <div id="80" class="item">80</div>
  <div id="81" class="item">81</div>
  <div id="82" class="item">82</div>
  <div id="83" class="item">83</div>
  <div id="84" class="item">84</div>

  H<div id="85" class="item">85</div>
  <div id="86" class="item">86</div>
  <div id="87" class="item">87</div>  
  <div id="88" class="item">88</div>
  <div id="89" class="item">89</div>
  <div id="90" class="item">90</div>
  <div id="91" class="item">91</div>
  <div id="92" class="item">92</div>
  <div id="93" class="item">93</div>
  <div id="94" class="item">94</div>
  <div id="95" class="item">95</div>
  <div id="96" class="item">96</div>
  
  I<div id="97" class="item">97</div>
  <div id="98" class="item">98</div>
  <div id="99" class="item">99</div>  
  <div id="100" class="item">100</div>
  <div id="101" class="item">101</div>
  <div id="102" class="item">102</div>
  <div id="103" class="item">103</div>
  <div id="104" class="item">104</div>
  <div id="105" class="item">105</div>
  <div id="106" class="item">106</div>
  <div id="107" class="item">107</div>
  <div id="108" class="item">108</div>
  
  J<div id="109" class="item">109</div>
  <div id="110" class="item">110</div>
  <div id="111" class="item">111</div>  
  <div id="112" class="item">112</div>
  <div id="113" class="item">113</div>
  <div id="114" class="item">114</div>
  <div id="115" class="item">115</div>
  <div id="116" class="item">116</div>
  <div id="117" class="item">117</div>
  <div id="118" class="item">118</div>
  <div id="119" class="item">119</div>
  <div id="120" class="item">120</div>
</div>
  
  <div class="grid-container2">
  <div id="121" class="item">121</div>
  <div id="122" class="item">122</div>
  <div id="123" class="item">123</div>  
  <div id="124" class="item">124</div>
  <div id="125" class="item">125</div>
  <div id="126" class="item">126</div>
  <div id="127" class="item">127</div>
  <div id="128" class="item">128</div>
  <div id="129" class="item">129</div>
  <div id="130" class="item">130</div>
  <div id="131" class="item">131</div>
  <div id="132" class="item">132</div>
  
  <div id="133" class="item">133</div>
  <div id="134" class="item">134</div>
  <div id="135" class="item">135</div>  
  <div id="136" class="item">136</div>
  <div id="137" class="item">137</div>
  <div id="138" class="item">138</div>
  <div id="139" class="item">139</div>
  <div id="140" class="item">140</div>
  <div id="141" class="item">141</div>
  <div id="142" class="item">142</div>
  <div id="143" class="item">143</div>
  <div id="144" class="item">144</div>
  
  <div id="145" class="item">145</div>
  <div id="146" class="item">146</div>
  <div id="147" class="item">147</div>  
  <div id="148" class="item">148</div>
  <div id="149" class="item">149</div>
  <div id="150" class="item">150</div>
  <div id="151" class="item">151</div>
  <div id="152" class="item">152</div>
  <div id="153" class="item">153</div>
  <div id="154" class="item">154</div>
  <div id="155" class="item">155</div>
  <div id="156" class="item">156</div>
  
  
  <div id="157" class="item">157</div>
  <div id="158" class="item">158</div>
  <div id="159" class="item">159</div>  
  <div id="160" class="item">160</div>
  <div id="161" class="item">161</div>
  <div id="162" class="item">162</div>
  <div id="163" class="item">163</div>
  <div id="164" class="item">164</div>
  <div id="165" class="item">165</div>
  <div id="166" class="item">166</div>
  <div id="167" class="item">167</div>
  <div id="168" class="item">168</div>
  
  <div id="169" class="item">169</div>
  <div id="170" class="item">170</div>
  <div id="171" class="item">171</div>  
  <div id="172" class="item">172</div>
  <div id="173" class="item">173</div>
  <div id="174" class="item">174</div>
  <div id="175" class="item">175</div>
  <div id="176" class="item">176</div>
  <div id="177" class="item">177</div>
  <div id="178" class="item">178</div>
  <div id="179" class="item">179</div>
  <div id="180" class="item">200</div>
  
  <div id="181" class="item">181</div>
  <div id="182" class="item">182</div>
  <div id="183" class="item">183</div>  
  <div id="184" class="item">184</div>
  <div id="185" class="item">185</div>
  <div id="186" class="item">186</div>
  <div id="187" class="item">187</div>
  <div id="188" class="item">188</div>
  <div id="189" class="item">189</div>
  <div id="190" class="item">190</div>
  <div id="191" class="item">191</div>
  <div id="192" class="item">192</div>
  
  <div id="193" class="item">193</div>
  <div id="194" class="item">194</div>
  <div id="195" class="item">195</div>  
  <div id="196" class="item">196</div>
  <div id="197" class="item">197</div>
  <div id="198" class="item">198</div>
  <div id="199" class="item">199</div>
  <div id="200" class="item">200</div>
  <div id="201" class="item">201</div>
  <div id="202" class="item">202</div>
  <div id="203" class="item">203</div>
  <div id="204" class="item">204</div>
  
  <div id="205" class="item">205</div>
  <div id="206" class="item">206</div>
  <div id="207" class="item">207</div>  
  <div id="208" class="item">208</div>
  <div id="209" class="item">209</div>
  <div id="210" class="item">210</div>
  <div id="211" class="item">211</div>
  <div id="212" class="item">212</div>
  <div id="213" class="item">213</div>
  <div id="214" class="item">214</div>
  <div id="215" class="item">215</div>
  <div id="216" class="item">216</div>
  
  <div id="217" class="item">217</div>
  <div id="218" class="item">218</div>
  <div id="219" class="item">219</div>  
  <div id="220" class="item">220</div>
  <div id="221" class="item">221</div>
  <div id="222" class="item">222</div>
  <div id="223" class="item">223</div>
  <div id="224" class="item">224</div>
  <div id="225" class="item">225</div>
  <div id="226" class="item">226</div>
  <div id="227" class="item">227</div>
  <div id="228" class="item">228</div>
  
  <div id="229" class="item">229</div>
  <div id="230" class="item">230</div>
  <div id="231" class="item">231</div>  
  <div id="232" class="item">232</div>
  <div id="233" class="item">233</div>
  <div id="234" class="item">234</div>
  <div id="235" class="item">235</div>
  <div id="236" class="item">236</div>
  <div id="237" class="item">237</div>
  <div id="238" class="item">238</div>
  <div id="239" class="item">239</div>
  <div id="240" class="item">240</div>
  </div>
	
	<!--<button onclick="pay()">pay</button>-->
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" onclick="pay()" style="width:25%">PAY</button>
	</center>
	<script type="text/javascript">
	    <?php 
		while($row=mysqli_fetch_array($res))
		{   
		echo "document.getElementById(" .$row["seat"].").style.backgroundColor='red';";
			
		} 
		
		?> 
	</script>
    
 <script type="text/javascript" >
	/* <?php 
		while($row=mysqli_fetch_array($res))
		{   
		echo "document.getElementById(" .$row["seat"].").style.backgroundColor='red';";
			
		}
	 ?>
	 	 */
 var a=[];  
  jQuery(".item").click(function(){
        var test=jQuery(this).attr("id");
	    //var name = jQuery(this).attr("name");
	    if(document.getElementById(test).style.backgroundColor!='red'&& document.getElementById(test).style.backgroundColor!="green"){
			document.getElementById(test).style.backgroundColor="green";
			a.push(test);
		}
	   
	  
  }); 
		  
  
  jQuery(".item").dblclick(function(){
      test1=jQuery(this).attr("id");
	 // name1=jQuery(this).attr("name");
	  if(document.getElementById(test1).style.backgroundColor=="green"){
			 document.getElementById(test1).style.backgroundColor="white";
			 var index = a.indexOf(test1);
			if(index>-1){
		  a.splice(index,1);
	            }
		}
  });
	 
	 function pay(){
		var num =a.length;
		var amount = num*200;
		$.post('pay_record.php',{postamount:amount,'postarray':a},
			function(data){
				if(data>0){
					alert(data);
					
				}else{
					alert("NO SEATS SELECTED");
				}
			
			});
		if(amount!=0){
			window.location.href = "update_db.php";
		}
	}
  
  
  	</script>
  <center>
  <img src="screen.png"/>  
  </center>
  </body>
</html>