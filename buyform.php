<!DOCTYPE html>

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!--Web Site title--->
	<title> 8-BIT</title>
	<title><?php print $ptitle ?></title>
	<link rel="icon" href="img/ZombieIcon.png"> <!--browser icon-->
	<!------------------>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1920, user-scalable=yes, maximum-scale=1">
	
	<!--Get Access to css-->
	<!--link href="Black%20Desert%20Online%20Register_files/css.css" rel="stylesheet" type="text/css"-->
	<!---Icons and fonts references---->
	<link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="img/ZombieIcon.png" type="image/x-icon">
	<link rel="icon" href="img/ZombieIcon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/common2.css">
	<link rel="stylesheet" type="text/css" href="css/gallerycss.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="payment_method.css">
	<style>
		@media (max-width: 1800px) {
							.gnb_comm .link_gnb{padding:34px 21px !important}
					}
	</style>
	<script type="text/javascript" async="" src="script/recaptcha__en.js"></script><script id="facebook-jssdk" src="script/sdk.js"></script><script async="" src="script/gtm.js"></script><script type="text/javascript" src="script/jquery-1.js"></script>

</head>

<!-----Navigation bar----->

<div class="inner_head">
				
<ul class="gnb_comm">
			
			
<!--Home Temp-->
<li>
<a href="index.php" class="link_gnb">HOME<span class="img_8bit ico_arr"></span></a>
</li>
<!------------->		
<!---News dropdown menu---->
<li>
<a href="news.php" class="link_gnb">NEWS<span class="img_8bit ico_arr"></span></a>
<!--Deleted-->
</li>
<!--------------------------->
				
				
				
				
<!--DELETED-->
				
				
<!--DELETED-->
		
<!----Login and register buttons----->
<div id="login"style="float:right;margin-right:10px">
<div id="login">
<li>
						<a href="account.php" class="link_gnb">ACCOUNT</a>
						<div class="gnb_sub">
							<ul class="list_sub">
								<li><a href="account.php" class="link_gnb_sub">INFO</a></li>
								<li><a href="account.php" class="link_gnb_sub">HISTORY</a></li>
								<li><a href="index.php" class="link_gnb_sub">LOGOUT</a></li>
							</ul>
						</div>
					</li>
<!--DELETED-->
					
					
					
<!----Buy now button----->
<li><a href="buyform.php" class="">
<span class="btn_regist" style="margin-top:12%;">BUY NOW</span></a></li>
</div>
</div>	

</ul>
</div>
<!----End of navigation bar------>	
<body>
	
	
	

<script type="text/javascript">
$(document).ready(function($) {
	var language_json = {"gamePassGrade":"GAMEPASS_STR"};
	var form = $("<form/>", {id:'__languageForm',action:'',method:"GET"} );
	for(var key in language_json) {
		form.append( $("<input>",{type:'hidden',name:key,value:language_json[key]}) );
	}
	$("#_languageForm").append(form);
	
	$(".gnb_lang_link").on("click",function(){
		var form =$("#__languageForm");
		form.append( $("<input>",{type:'hidden',name:'lang',value:$(this).attr("data-value")}) );
		form.submit();
	});
});
</script>
<hr class="hide">



	
<div class="cont_payment" id="kakaoContent">
	<div id="cMain">
		<div id="mArticle">
			<div class="bg_cover"></div>
			<div class="detail_black">
				<div class="wrap_tit">
					<h2 class="tit_detail" id="kakaoBody"><span class="img_black"></span>PAYMENT</h2>
				</div>
				<h3 class="tit_group">ORDER</h3>
				<div class="group_detail group_order">
					<table class="tbl_comm">
						<caption class="ir_caption">
							order detail table
						</caption>
						<colgroup>
							<col style="width:280px">
							<col style="width:440px">
							<col style="width:200px">
							<col style="width:200px">
						</colgroup>
						<thead>
							<tr>
								<th scope="col">ITEM</th>
								<th scope="col">ITEM DETAILS</th>
								<th scope="col">ORDER NUMBER</th>
								<th scope="col">PRICE</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="item_thumb">
										<span class="ico_item">Starter's Package</span>
									</div>
									<strong class="tit_item">Starter's Package</strong>
								</td>
								<td>
									<ul class="list_detail" style="margin-left:130px">
										







                                        	
                                <li>8-BIT GAME</li>
								<li>10 Guest Passes (7 days)</li>
								<li>Version 2.0</li>
                                        									</ul>
								</td>
								<td>1</td>
								<td>
									<span class="txt_price"> 9.99 <span>	 USD </span></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--CONTENT BOXE-->
				<fieldset>
						<legend class="screen_out">Payment form</legend>
				<h3 class="tit_group">PAYMENT METHOD</h3>
				<div class="group_detail group_billing">
				<label class="lab_comm" for="cardNumber" style="color:#111;">Input boxes with Symbol * is Required</label>
									<input type="hidden" name="GC_CREDIT" value="AD,AE,AF,AG,AI,AL,AM,AO,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,ER,ES,ET,EU,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GT,GU,GW,GY,HK,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW" />
									<input type="hidden" name="PAYPAL" value="AD,AE,AF,AG,AI,AL,AM,AO,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,ER,ES,ET,EU,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GT,GU,GW,GY,HK,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW" />
									<input type="hidden" name="GC_SOFORT" value="AT,BE,DE,ES,FR,IT,NL" />
									<input type="hidden" name="PW_PAYSAFECARD" value="AR,AT,AU,BE,BG,CA,CH,CY,CZ,DE,DK,ES,FI,FR,GB,GI,GR,HR,HU,IE,IT,KW,LI,LT,LU,LV,MT,MX,NL,NO,PE,PL,PT,RO,SE,SI,SK,TR,US,UY" />
									<input type="hidden" name="PW_SOFORT" value="AT,BE,DE,ES,FR,IT,NL" />
									<input type="hidden" name="PW_CREDIT" value="AD,AE,AF,AG,AI,AL,AM,AO,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,ER,ES,ET,EU,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GT,GU,GW,GY,HK,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW" />
									<input type="hidden" name="PAYSAFECARD" value="AR,AT,AU,BE,BG,CA,CH,CY,CZ,DE,DK,ES,FI,FR,GB,GI,GR,HR,HU,IE,IT,KW,LI,LT,LU,LV,MT,MX,NL,NO,PE,PL,PT,RO,SE,SI,SK,TR,US,UY" />
									<input type="hidden" name="PW_PAYPAL" value="AD,AE,AF,AG,AI,AL,AM,AO,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,ER,ES,ET,EU,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GT,GU,GW,GY,HK,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW" />
					
					<form id="paymentForm" name="paymentForm" method="POST" action="PayConfirm.php">
					<div class="group_set" style="">
						
					<dl class="list_regist">
								<dt><label class="lab_comm" for="cardNumber">Credit Card Number <span class="txt_require">*</span></label></dt>
								<dd>
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="cardNumber" name="cardNumber" type="text" required> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								</dd>
							</dl>

					
					</div>
					<div class="group_set" style="">
						
					<dl class="list_regist">
								<dt><label class="lab_comm" for="cardNumber">Name on card <span class="txt_require">*</span></label></dt>
								<dd>
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="cardNumber" name="cardNumber" type="text" required> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								</dd>
							</dl>

					
					</div>
					<div class="group_set" style="">
						
					<dl class="list_regist">
								<dt><label class="lab_comm" for="cardNumber">Expiry date<span class="txt_require">*</span></label></dt>
								<dd>
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="cardNumber" name="cardNumber" type="text" required> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								</dd>
							</dl>

					
					</div>
					<div class="group_set" style="">
						
					<dl class="list_regist">
								<dt><label class="lab_comm" for="cardNumber">Security Number<span class="txt_require">*</span></label></dt>
								<dd>
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="cardNumber" name="cardNumber" type="text" required> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								</dd>
							</dl>

					
					</div>
					
					
					
					
					<input type="hidden" name="gamePassGrade" value="GAMEPASS_STR" >
					<input type="hidden" id="stateName" name="stateName" >
					<input type="hidden" id="lang" name="lang" >
					<input type="hidden" id="userSelectstate" name="userSelectstate" >
					<input type="hidden" id="countryCode" name="countryCode">
					<input type="hidden" id="countryName" name="countryName" >
					
					
												
																	</ul>
											</div>
											<div class="wrap_btn  group_billing">	
							<button style="margin-bottom:50px;" class="btn_cancel" type="submit" onclick="goBack();"><span class="btn_bit">BACK</span></button>
							<br>
							<button class="btn_submit" href="account.php" type="submit" ><span class="btn_bit">CONFIRM</span></button>
							<!--GOTO ACCOUNT ADD TO PURCHASE HISTORY 21600681-->
						</div>	
										</div>
										
									</div>
								</dd>
							</dl>
						</div>
					</div>
						
						
					</fieldset>
				</form>
			</div>
					</div><!--// mArticle -->
		
	</div><!-- // cMain -->
</div><!-- // kakaoContent -->

<script>
var billingAddress = null;

$(document).ready(
	function() {
		if(billingAddress != null){
			Object.getOwnPropertyNames(billingAddress).forEach(
				function(name, idx, array) {
					if( name == 'countryCode'){
						$('#country .selected_text').text(billingAddress[name]);
						
						$('.opt_comm a').each(function() {
						    if ( $(this).data('value') === billingAddress[name]) {
						    	$('#country .selected_text').text($(this).text());
						    }
						});
					}
					if( name == 'state' ){
						var stateCode = billingAddress[name];
						displayState();
						if( $('#countryCode').val() == "US" ){
							$('#USstate .selected_text').text(getSelectedCountryName("US", stateCode.toUpperCase()));
							$('#state').val(stateCode.toUpperCase());
							$('#stateName').val(getSelectedCountryName("US", stateCode.toUpperCase()));
						}else if( $('#countryCode').val() == "CA" ){
							$('#CAstate .selected_text').text(getSelectedCountryName("CA", stateCode.toUpperCase()));
							$('#state').val(stateCode.toUpperCase());
							$('#stateName').val(getSelectedCountryName("CA", stateCode.toUpperCase()));
						}else{
							$('#state').val(billingAddress[name]);
						}
					}
					
					$('form#paymentForm').find('input').each(
						function(){
							var formId = $(this).attr('id');
							if(name == formId){
								$(this).val(billingAddress[name]);
							}
						}
					);			
				}
			);
		} else {
			$('#country .selected_text').text($('#country a.link_option[data-value=NZ]').text());
			$('#countryCode').val("NZ");
			$('#countryName').val($('#country a.link_option[data-value=NZ]').text());
			
			displayState();	
		}
});


var previous = "";

function goBack() {
	$('#paymentForm').attr('action','index.php');
	$('#paymentForm').submit();
}


function checkOut(){
	if (formValidation('#paymentForm')){
		$('#paymentForm').submit();
		return true;
	}
	else{
		return false;
	}
}

function getSelectedCountryName(countryCode, stateCode){
	if (countryCode == "CA") {
		return $('#CAstate a.link_option[data-value=' + stateCode + ']').text();	
	}
	else if (countryCode == "US") {
		return $('#USstate a.link_option[data-value=' + stateCode + ']').text();
	}
}


// Country, State Dropdownlist
$('.opt_comm').click(function() {
	if ($(this).hasClass('opt_open')) {
		$(this).removeClass('opt_open');
	} else {
		$(this).addClass('opt_open');
	}
});

// Selected Country, State item  
$('.link_option').click(function() {
	var group_set = $(this).closest(".group_set");
	group_set.find('.selected_text').text($(this).text());
	
	if (group_set.is("#country")) {
		$('#countryCode').val($(this).attr('data-value'));
		$('#countryName').val($(this).text());
		displayState();
		previous = $(this).attr('data-value');
	} else if (group_set.is("#CAstate")) {
		$('#state').val($(this).attr('data-value'));
		$('#stateName').val($(this).text());
	} else if (group_set.is("#USstate")) {
		$('#state').val($(this).attr('data-value'));
		$('#stateName').val($(this).text());
	}
});


$('input[type=text]').keypress(function (){
	var regularStr = /[~!@\#$%<>^&*\()\=+\’]/gi;
	if(regularStr.test($(this).val())){
		$(this).val($(this).val().replace( regularStr, ""));
	}
});


//Payment Method
$(".group_payment ul.list_method li").click(function() {
	$(".group_payment ul.list_method li").removeClass("on");
	$(this).addClass("on");
	$("input[name=pgCode]").val($(this).attr("id"));
	paymentMethodSupportCheck();
});


// Check Payment Method
function paymentMethodSupportCheck() {
	var elementValue = $('.group_payment li.on').attr('id');
	var isSupport = false;
	
	$('#error_msg_payment_method').hide();
	
	if(elementValue != null) {
		var countryList = $('[name="' + elementValue + '"]').val().split(",");
		for(i = 0 ; i <= countryList.length ; i++ ){
			if(countryList[i] == $('#countryCode').val()){
				$('#error_msg_not_support_payment_method').hide();
				isSupport = true;
			}
		}
		if( !isSupport ){
			$('#error_msg_not_support_payment_method').show();
			$('.group_payment li').removeClass('on');
			$('input[name=pgCode]').val("");
		}
	}
}


function displayState(){
	paymentMethodSupportCheck();
	
	$('.state').addClass('off');
	var countryCode = $('#countryCode').val();
	$('#countryName').val($('#country a.link_option[data-value=' + countryCode + ']').text());
	
	if(countryCode == "US"){
		$('.state_require').css('visibility','visible')
		$('#USstate').removeClass('off');
		$('#USstate .selected_text').text($('#USstate a.link_option').first().text());
		$('#state').val($('#USstate a.link_option').first().attr("data-value"));
		$('#stateName').val($('#USstate a.link_option').first().text());
	}else if(countryCode == "CA"){
		$('.state_require').css('visibility','visible')
		$('#CAstate').removeClass('off');
		$('#CAstate .selected_text').text($('#CAstate a.link_option').first().text());
		$('#state').val($('#CAstate a.link_option').first().attr("data-value"));
		$('#stateName').val($('#CAstate a.link_option').first().text());
	}else{
		$('.state_require').css('visibility','hidden')
		$('#txtState').removeClass('off');
		$('#countryCode').val()
		
		$('#state').val('');
		$('#stateName').val('');
	}
}

function formValidation(formId){
	var passed = true;
	
	if($('input[name=pgCode]').val() == "" || $('#paymentForm').val() == null){
		$('.error_msg').hide();
		$('#error_msg_not_support_payment_method').hide();
		$('#error_msg_payment_method').show();
		passed = false;
	}
	
	if( !$('#isAgreeToU').prop('checked') ){
		$('#txt_agreeTOU').css('color', '#a00d0a');
		$('#txt_agreeTOU').css('font-weight', 'bold');
		$('#txt_agreeTOU_error').show();
		passed = false;
	}
	else {
		$('#txt_agreeTOU').css('color', '');
		$('#txt_agreeTOU').css('font-weight', '');
		$('#txt_agreeTOU_error').hide();
	}

	if( $('#isAgreeWaive').length && !$('#isAgreeWaive').prop('checked') ){
		$('#txt_agreeWaive').css('color', '#a00d0a');
		$('#txt_agreeWaive').css('font-weight', 'bold');
		$('#txt_isAgreeWaive_error').show();
		passed = false;
	}
	else {
		$('#txt_agreeWaive').css('color', '');
		$('#txt_agreeWaive').css('font-weight', '');
		$('#txt_isAgreeWaive_error').hide();
	}
	
	$('form'+ formId).find('input').each(function(){
		$(this).val($.trim($(this).val()));
	    if($(this).prop('required') && $(this).val() == ""){
	    	$(this).parent().parent().addClass("error");
	        passed = false;
	    } else {
	        $(this).parent().parent().removeClass("error");
	    }
	});
	
	if(($('#countryCode').val() == "US") || $('#countryCode').val() == "CA"){
		if($('#state').val() == ""){
			passed = false;
		}
	}
	
	$('.error_msg').css('display','none');
	if( !passed ) {
		$('#error_msg_field').show();
	}

	return passed;
}
</script>

<hr class="hide">




</body>
	
<div class="bot">	
	<center>
           <b>&copy;8-Bit Game 2018. All rights reserved.</b>

</div>
<div style="background-color: #fff; border: 1px solid #ccc; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2); position: absolute; left: 0px; top: -10000px; transition: visibility 0s linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: #fff; opacity: 0.05;  filter: alpha(opacity=5)"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="bframe.htm" style="width: 100%; height: 100%;" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" name="3obl0eddig8" frameborder="0"></iframe></div></div></body></html><!--21600681-->