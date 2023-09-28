<!DOCTYPE html>
<html lang="en">

<head>

<style>
div{
  display:block;
}

.frame{
  min-width: 400px;
  border-radius: 10px;

}

.center{
   position: relative;
}

h1, h5{
  display: block;
  text-align: center;
  color:white;
}

#odometer{
  color: white; 
  font-size: 30px;
  letter-spacing: 10px;
  border-radius: 10px;
  padding: 0px 16px;
}
#marquee1 {
	font-size: 25px;
	line-height: 2.5;
	color:white;
}
 
@media (max-width: 998px) {
  #odometer{
    font-size: 18px;
	  left:10%;
  }
  #marquee1{
    font-size: 18px;
}
}
@media (max-width: 1024px) {
  #odometer{
    font-size: 20px;
	  left:10%;
  }
  #marquee1{
    font-size: 18px;
}
}
	
@media (max-width: 786px) {
  #odometer{
    font-size: 14px;
  width: 100%;
	  left:5%;
  }
  #marquee1{
    font-size: 18px;
}
}
</style>

</head>
<body onload="loadjackpots2()">
<div class="wp-block-columns">

<div class="wp-block-column">
<div id="xmlcontent" class="demo" style=" color:#fff; width:100%; cursor:pointer">                    
<marquee behaviour="scroll" scrollamount="5">
<span id="marquee1">a</span>
</marquee>                   
</div>
</div>
</div>

<div class="wp-block-columns" style="margin-top:-40px;">
<div class="wp-block-column" style="text-align:center">

<h5 style="margin-top:5px;margin-bottom:0">Total Winnings of Players</h5>
<div id="odometer"></div>

</div>

</div>
						
						
<div class="wp-block-columns">
<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.lutarlac.com/wp-content/uploads/2021/12/naughtyornice.gif" alt="" class="wp-image-172">
<figcaption> 
<h6 class="post-title"id="gamename1"style="text-align:left !important;"> </h6>
<span id="jackpot1"style="color:#b99425;font-size:16px"></span>
<p>RealTimeGaming</p>
</figcaption>
</figure>
</div>
</div>



<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.lutarlac.com/wp-content/uploads/2021/12/rudolphsrevenge.gif" alt="" class="wp-image-174">
<figcaption> 
<h6 class="post-title"id="gamename2" style="text-align:left !important;"> </h6>
<span id="jackpot2"style="color:#b99425;font-size:16px"></span>
<p>RealTimeGaming</p>
</figure>
</div>
</div>



<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.lutarlac.com/wp-content/uploads/2021/12/returnoftherudolph.gif" alt="" class="wp-image-173">
<figcaption> 
<h6 class="post-title"id="gamename3"style="text-align:left !important;"> </h6>
<span id="jackpot3"style="color:#b99425;font-size:16px"></span>
<p>RealTimeGaming</p>
</figure>
</figure>
</div>
</div>



<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.lutarlac.com/wp-content/uploads/2021/12/3stoogesbridelessgroom.gif" alt="" class="wp-image-176">
<figcaption> 
<h6 class="post-title"id="gamename4"style="text-align:left !important;"> </h6>
<span id="jackpot4"style="color:#b99425;font-size:16px"></span>
<p>RealTimeGaming</p>
</figure>
</figure>
</div>
</div>



<div class="wp-block-column">
<div class="wp-block-image"><figure class="aligncenter size-full"><img loading="lazy" width="200" height="150" src="https://www.lutarlac.com/wp-content/uploads/2021/12/trex2.gif" alt="" class="wp-image-175">
<figcaption> 
<h6 class="post-title"id="gamename5"style="text-align:left !important;"> </h6>
<span id="jackpot5"style="color:#b99425;font-size:16px"></span>
<p>RealTimeGaming</p>
</figure>
</figure>
</div>
</div>
</div>
</div>
</body>



<script>

 

function formatCurrency3(num) {
                var p = num.toFixed(2).split(".");
                return p[0].split("").reverse().reduce(function (acc, num, i, orig) {
                    return num == "-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
                }, "") + "." + p[1];
            }

            function loadjackpots3() {                
                var jp_rtg_url = "https://www.lutarlac.com/wp-content/plugins/tregs/home/feedstotalwinners.php";
                
                console.log(jp_rtg_url);
               jQuery.ajax({
                    type: "GET",
                    url: jp_rtg_url,
                    dataType: "json",
                    success: function (result) {
                      $marquee_AccountName_0 = result[0][0]["AccountName"];
                    var marquee_AccountName_show_0 = $marquee_AccountName_0
                    var marquee_AccountName_value_0 = marquee_AccountName_show_0

                    $marquee_payout_0 = result[0][0]["Payout"];
                    var marquee_payout_show_0 = $marquee_payout_0
                    var marquee_payout_value_0 = marquee_payout_show_0

                    $marquee_AccountName_1 = result[0][1]["AccountName"];
                    var marquee_AccountName_show_1 = $marquee_AccountName_1
                    var marquee_AccountName_value_1 = marquee_AccountName_show_1

                    $marquee_payout_1 = result[0][1]["Payout"];
                    var marquee_payout_show_1 = $marquee_payout_1
                    var marquee_payout_value_1 = marquee_payout_show_1

                    $marquee_AccountName_2 = result[0][2]["AccountName"];
                    var marquee_AccountName_show_2 = $marquee_AccountName_2
                    var marquee_AccountName_value_2 = marquee_AccountName_show_2

                    $marquee_payout_2 = result[0][2]["Payout"];
                    var marquee_payout_show_2 = $marquee_payout_2
                    var marquee_payout_value_2 = marquee_payout_show_2
                    
                    $marquee_AccountName_3 = result[0][3]["AccountName"];
                    var marquee_AccountName_show_3 = $marquee_AccountName_3
                    var marquee_AccountName_value_3 = marquee_AccountName_show_3

                    $marquee_payout_3 = result[0][3]["Payout"];
                    var marquee_payout_show_3 = $marquee_payout_3
                    var marquee_payout_value_3 = marquee_payout_show_3

                    $marquee_AccountName_4 = result[0][4]["AccountName"];
                    var marquee_AccountName_show_4 = $marquee_AccountName_4
                    var marquee_AccountName_value_4 = marquee_AccountName_show_4

                    $marquee_payout_4 = result[0][4]["Payout"];
                    var marquee_payout_show_4 = $marquee_payout_4
                    var marquee_payout_value_4 = marquee_payout_show_4

                    $marquee_AccountName_5 = result[0][5]["AccountName"];
                    var marquee_AccountName_show_5 = $marquee_AccountName_5
                    var marquee_AccountName_value_5 = marquee_AccountName_show_5

                    $marquee_payout_5 = result[0][5]["Payout"];
                    var marquee_payout_show_5 = $marquee_payout_5
                    var marquee_payout_value_5 = marquee_payout_show_5

                    $marquee_AccountName_6 = result[0][6]["AccountName"];
                    var marquee_AccountName_show_6 = $marquee_AccountName_6
                    var marquee_AccountName_value_6 = marquee_AccountName_show_6

                    $marquee_payout_6 = result[0][6]["Payout"];
                    var marquee_payout_show_6 = $marquee_payout_6
                    var marquee_payout_value_6 = marquee_payout_show_6

                    $marquee_AccountName_7 = result[0][7]["AccountName"];
                    var marquee_AccountName_show_7 = $marquee_AccountName_7
                    var marquee_AccountName_value_7 = marquee_AccountName_show_7

                    $marquee_payout_7 = result[0][7]["Payout"];
                    var marquee_payout_show_7 = $marquee_payout_7
                    var marquee_payout_value_7 = marquee_payout_show_7

                    $marquee_AccountName_8 = result[0][8]["AccountName"];
                    var marquee_AccountName_show_8 = $marquee_AccountName_8
                    var marquee_AccountName_value_8 = marquee_AccountName_show_8

                    $marquee_payout_8 = result[0][8]["Payout"];
                    var marquee_payout_show_8 = $marquee_payout_8
                    var marquee_payout_value_8 = marquee_payout_show_8

                    $marquee_AccountName_9 = result[0][9]["AccountName"];
                    var marquee_AccountName_show_9 = $marquee_AccountName_9
                    var marquee_AccountName_value_9 = marquee_AccountName_show_9

                    $marquee_payout_9 = result[0][9]["Payout"];
                    var marquee_payout_show_9 = $marquee_payout_9
                    var marquee_payout_value_9 = marquee_payout_show_9

                    var el_1 = document.getElementById('marquee1');
                    
                    el_1.innerHTML = marquee_AccountName_value_0 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_0)) + 
                    ' | ' + ' ' + marquee_AccountName_value_1 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_1)) + 
                    ' | ' + ' ' + marquee_AccountName_value_2 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_2)) +
                    ' | ' + ' ' + marquee_AccountName_value_3 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_3)) +
                    ' | ' + ' ' + marquee_AccountName_value_4 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_4)) +
                    ' | ' + ' ' + marquee_AccountName_value_5 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_5)) +
                    ' | ' + ' ' + marquee_AccountName_value_6 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_6)) +
                    ' | ' + ' ' + marquee_AccountName_value_7 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_7)) +
                    ' | ' + ' ' + marquee_AccountName_value_8 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_8)) +
                    ' | ' + ' ' + marquee_AccountName_value_9 + ' - ' + ' Amount : ' + formatCurrency(parseFloat(marquee_payout_value_9)) ;
					
					
                  
                    }
                });
            }
 
 var $rand1;

 function formatCurrency2(num) {
                var p = num.toFixed(2).split(".");
                return p[0].split("").reverse().reduce(function (acc, num, i, orig) {
                    return num == "-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
                }, "") + "." + p[1];
            }

            function loadjackpots2() {                
                var jp_rtg_url = "https://www.lutarlac.com/wp-content/plugins/tregs/home/feedstotalwinnings.php";
                
               jQuery.ajax({
                    type: "GET",
                    url: jp_rtg_url,
                    dataType: "json",
                    success: function (result) {

                        // result = JSON.parse(result);
                        console.log(result[0][0]["Payout"]);
                      //  var payout = JSON.parse(result);
                        $rand1 = result[0][0]["Payout"];

                      var el = document.querySelector('#odometer');

                    $rand2 = $rand1 - 1000.00;
                    var randomNum = Math.floor((Math.random() * ($rand2 - $rand1)) + $rand2);
                    var number_value = randomNum

                    od_numbers = new Odometer({
                      el: el,
                      value: number_value,
                      format: '(ddd,ddd,ddd,ddd).dd',
                      theme: 'minimal',
                      duration: 300000000,
                    });
                    const numbers_interval = setInterval(function() {
                    number_value += 0.13
                    od_numbers.update(number_value)
                    }, 2000);
                        

                    loadjackpots(); 
                    }
                });
            }

function formatCurrency(num) {
                var p = num.toFixed(2).split(".");
                return p[0].split("").reverse().reduce(function (acc, num, i, orig) {
                    return num == "-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
                }, "") + "." + p[1];
            }

            function loadjackpots() {                
                var jp_rtg_url = "https://www.lutarlac.com/wp-content/plugins/tregs/home/feeds.php";
                
               jQuery.ajax({
                    type: "GET",
                    url: jp_rtg_url,
                    dataType: "xml",
                    success: function (xml) {

                        jQuery(xml).find('data').each(function(){
                            var gameName = jQuery(this).find('gameName').text();
                            var jackpotAmount = jQuery(this).find('jackpotAmount').text();
                            var jackpotCategory = jQuery(this).find('jackpotCategory').text();
                            
                            if(gameName == 'Naughty Or Nice') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename1").html(gameName);
                                jQuery("#jackpot1").html(formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#jackpot11111").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            if(gameName == 'Rudolphs Revenge') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename2").html(gameName);
                                jQuery("#jackpot2").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            if(gameName == 'Return of the Rudolph') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename3").html(gameName);
                                jQuery("#jackpot3").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            if(gameName == 'The Three Stooges') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename4").html(gameName);
                                jQuery("#jackpot4").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            if(gameName == 'T-Rex II' && jackpotCategory == 'Major') {
                                console.log(gameName + ': ' + formatCurrency(parseFloat(jackpotAmount)));
                                jQuery("#gamename5").html(gameName);
                                jQuery("#jackpot5").html(formatCurrency(parseFloat(jackpotAmount)));
                            }

                            loadjackpots3();
                        });
                        
                    }
                });
            }
         
         
</script>

</html>