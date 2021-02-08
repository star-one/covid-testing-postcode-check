<?php
// If you are going to use this, please let me know at simon.gray@birmingham.gov.uk so I can
// let you know when I've done V2. A big long trail of switch() case values to look through
// is a rubbish way to do it, so V2 is going to look through an uploaded .csv file instead

function postcodeValid($postcode)
{
   return preg_match('/^([A-Za-z][A-Ha-hJ-Yj-y]?[0-9][A-Za-z0-9]??[0-9][A-Za-z]{2}|[Gg][Ii][Rr] ?0[Aa]{2})$/', $postcode);
}
function postcodeWalsall($postcode)
{
	if(substr($postcode, 0, 2) == "WS") { return 1; } else { return 0; }
}
function postcodeB($postcode)
{
	if(substr($postcode, 0, 1) == "B") { return 1; } else { return 0; } // This should check for a B plus a number, not just a B. I'll do that later
}

$postcode = strtoupper($_REQUEST["postcode"]); // There is no pressing need to sanitise this input at source with a mysqli function since we won't be carrying out any database actions
$postcodeUnspaced = preg_replace('/\s+/', '', $postcode); // Because not everybody puts a space in when they enter their postcodes
$goodPostcode = postcodeValid($postcodeUnspaced); // However we do want to check it's a valid postcode
$walsallPostcode = postcodeWalsall($postcode); // If it's a Walsall postcode we want to send the user to the Walsall checker
$birminghamPostcode = postcodeB($postcode); // And we finally check it's a B postcode; we may do something with this information later on

if($goodPostcode)
{
	if($walsallPostcode)
	{
		echo "<p>It appears you're looking in Walsall - you can check if you need to take a test in Walsall on the <a href=\"https://cag.walsall.gov.uk/Home/SouthAfricanVariantChecker\" title=\"Check whether you should be tested for the South African variant in Walsall\">Walsall Council website</a></p>";
	}
	else
	{
		// What follows is an abominable way to do this, such that I'm faintly reluctant to share it in this state! V2 which I'm working on now will be based on paging through an uploaded .csv file instead
		switch($postcodeUnspaced)
		{
case 'B312SA':
case 'B312SR':
case 'B312SS':
case 'B312ST':
case 'B312SU':
case 'B312SY':
case 'B312SZ':
case 'B312TT':
case 'B312TU':
case 'B312TX':
case 'B312TY':
case 'B312TZ':
case 'B312UA':
case 'B312UB':
case 'B312UD':
case 'B312UE':
case 'B312UF':
case 'B312UG':
case 'B312UH':
case 'B312UJ':
case 'B312UL':
case 'B312UN':
case 'B312UP':
case 'B312UR':
case 'B312UW':
case 'B315AJ':
case 'B315AL':
case 'B315BN':
case 'B315BP':
case 'B315DB':
case 'B315DD':
case 'B315DE':
case 'B315DF':
case 'B315DG':
case 'B315DH':
case 'B315DJ':
case 'B315DL':
case 'B315DQ':
case 'B315DU':
case 'B315DW':
case 'B315DX':
case 'B315DY':
case 'B315DZ':
case 'B315EA':
case 'B315EB':
case 'B315EE':
case 'B315EF':
case 'B315EG':
case 'B315EH':
case 'B315EJ':
case 'B315EL':
case 'B315EN':
case 'B315EP':
case 'B315EQ':
case 'B315ER':
case 'B315ES':
case 'B315ET':
case 'B315EW':
case 'B315EX':
case 'B315EY':
case 'B315EZ':
case 'B315FL':
case 'B315GA':
case 'B315GB':
case 'B315GD':
case 'B315HA':
case 'B315HB':
case 'B315HD':
case 'B315HE':
case 'B315HF':
case 'B315HG':
case 'B315HH':
case 'B315HJ':
case 'B315HL':
case 'B315HN':
case 'B315HP':
case 'B315HQ':
case 'B315HR':
case 'B315HS':
case 'B315HT':
case 'B315HU':
case 'B315HW':
case 'B315HX':
case 'B315HY':
case 'B315HZ':
case 'B315JA':
case 'B315JB':
case 'B315JD':
case 'B315JE':
case 'B315JF':
case 'B315JG':
case 'B315JH':
case 'B315JJ':
case 'B315JL':
case 'B315JN':
case 'B315JP':
case 'B315JQ':
case 'B315JR':
case 'B315JS':
case 'B315JT':
case 'B315JU':
case 'B315JW':
case 'B315JX':
case 'B315JY':
case 'B315JZ':
case 'B315LA':
case 'B315LB':
case 'B315LD':
case 'B315LE':
case 'B315LF':
case 'B315NJ':
case 'B315NL':
case 'B315NN':
case 'B315NR':
case 'B315NS':
case 'B315NT':
case 'B315PF':
case 'B450AJ':
case 'B450BD':
case 'B450BE':
case 'B450BG':
case 'B450BH':
case 'B450BJ':
case 'B450BL':
case 'B450BP':
case 'B450BQ':
case 'B450DA':
case 'B450DB':
case 'B450DD':
case 'B450DE':
case 'B450DF':
case 'B450DG':
case 'B450DH':
case 'B450DJ':
case 'B450DL':
case 'B450DN':
case 'B450DP':
case 'B450DQ':
case 'B450DR':
case 'B450DS':
case 'B450DT':
case 'B450DU':
case 'B450DW':
case 'B450EE':
case 'B450EF':
case 'B450EG':
case 'B450EH':
case 'B450EJ':
case 'B450EL':
case 'B450EN':
case 'B450EP':
case 'B450EQ':
case 'B450ER':
case 'B450ES':
case 'B450ET':
case 'B450EU':
case 'B450EW':
case 'B450HA':
case 'B450HB':
case 'B450HD':
case 'B450HE':
case 'B450HF':
case 'B450HG':
case 'B450HH':
case 'B450HJ':
case 'B450HL':
case 'B450HN':
case 'B450HP':
case 'B450HQ':
case 'B450HR':
case 'B450HS':
case 'B450HT':
case 'B450HU':
case 'B450HW':
case 'B450HX':
case 'B450HY':
case 'B450HZ':
case 'B450JA':
case 'B450JB':
case 'B450JD':
case 'B450JE':
case 'B450JF':
case 'B450JG':
case 'B450JH':
case 'B450JJ':
case 'B450JL':
case 'B450JN':
case 'B450JP':
case 'B450JQ':
case 'B450JR':
case 'B450JS':
case 'B450JT':
case 'B450JU':
case 'B450JW':
case 'B450JX':
case 'B450JY':
case 'B450JZ':
case 'B450LA':
case 'B450LB':
case 'B450LD':
case 'B450LG':
case 'B450LH':
case 'B450LJ':
case 'B450LL':
case 'B450LN':
case 'B450LP':
case 'B450LQ':
case 'B450LR':
case 'B450LS':
case 'B450LT':
case 'B450LU':
case 'B450LW':
case 'B450LX':
case 'B450LY':
case 'B450LZ':
case 'B450NA':
case 'B450NB':
case 'B450ND':
case 'B450NE':
case 'B450NF':
case 'B450NG':
case 'B450NH':
case 'B450NJ':
case 'B450NL':
case 'B450NN':
case 'B450NP':
case 'B450NQ':
case 'B450NR':
case 'B450NS':
case 'B450NT':
case 'B450NU':
case 'B450NW':
case 'B450NX':
case 'B450NZ':
case 'B450PB':
case 'B450PD':
case 'B459AF':
case 'B459AH':
case 'B459AN':
case 'B459AU':
case 'B459AY':
case 'B459BE':
case 'B459FD':
case 'B459FF':
case 'B459FH':
case 'B459FN':
case 'B459FP':
case 'B459NY':
case 'B459NZ':
case 'B459PA':
case 'B459PB':
case 'B459PD':
case 'B459PE':
case 'B459PL':
case 'B459PZ':
case 'B459QF':
case 'B459RQ':
case 'B459RX':
case 'B459SD':
case 'B459SF':
case 'B459SJ':
case 'B459SN':
case 'B459SQ':
case 'B459SZ':
case 'B459TF':
case 'B459TQ':
case 'B459TX':
case 'B459UA':
case 'B459UB':
case 'B459UD':
case 'B459UF':
case 'B459UQ':
case 'B459WA':
case 'B459WB':
case 'B459WD':
case 'B459WE':
case 'B459WF':
case 'B459WL':
case 'B459YD':
case 'B459YE':
case 'B459YF':
case 'B459YG':
case 'B459YH':
case 'B459YN':
case 'B459YP':
case 'B459YQ':
case 'B459YW':
				echo "<p><strong><em>" . $postcode . "</em> is in the affected area</strong>; if you have no symptoms please <a href=\"https://www.birmingham.gov.uk/info/50233/support_for_residents_during_the_coronavirus_covid-19/2319/extra_testing_to_monitor_and_suppress_spread_of_covid-19_variant/2\" title=\"Extra testing to monitor and suppress spread of COVID-19 variant\">attend one of the designated testing sites</a>. If you have symptoms please book a test via the <a href=\"https://www.gov.uk/get-coronavirus-test\" title=\"Get a free NHS test to check if you have coronavirus\">NHS testing service</a>.</p>";
				break;
			default:
				echo "<p><strong><em>" . $postcode . "</em> is not currently in an area identified for targeted testing</strong>, however please continue to take care, remembering <a href=\"https://www.gov.uk/coronavirus\" title=\"Coronavirus (COVID‑19) Guidance and Support\">hands, face, and space</a>.</p>";
		}
	}
}
else
{
	if($postcode)
	{
		echo "<p>We're sorry, but you don't appear to have entered a valid postcode here - please try again.</p>";
	}
}
?>
<form class="form form--block boxed" action="." id="C19Check" method="get">
<div class="form__control">
<label class="form__label" for="postcode">Postcode:</label>
<div class="form__control-group">
<input type="text" name="postcode" id="postcode" required />
</div>
</div>
<div class="form__footer">
<button class="button button--primary" type="submit" name="commit" value="Check!">Check!</button>
</div>
</form>
