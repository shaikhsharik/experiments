<!DOCTYPE html>
<html>
<head>
<title>EMI Calculator 1</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript">
function checnum(as)
{
var dd = as.value;
if(isNaN(dd))
{
dd = dd.substring(0,(dd.length-1));
as.value = dd;
}		
}

function loan()
{
var a = document.first.aa.value;
var b = document.first.bb.value;
var c = document.first.cc.value;
var n = c * 12;
var r = b/(12*100);
var p = (a * r *Math.pow((1+r),n))/(Math.pow((1+r),n)-1);
var prin = Math.round(p*100)/100;
document.first.r1.value = prin;
var mon = Math.round(((n * prin) - a)*100)/100;
document.first.r2.value = mon;
var tot = Math.round((mon/n)*100)/100;
document.first.r3.value = tot;
for(var i=0;i<n;i++)
{
var z = a * r * 1;
var q = Math.round(z*100)/100;
var t = p - z;
var w = Math.round(t*100)/100;
var e = a-t;
var l = Math.round(e*100)/100;
a=e;

}
}
</script>



</head>

<body class="booking">
<section>

<h3>EMI Calculator</h3>

<div class="emiform"> <!-- emiform Start -->
<form name=first>  <!-- form Start -->

<ul>
<li><b>Loan Amount:</b><div class="tab1"><input name=aa type=text size=15 onkeyup=checnum(this)></div></li>
<li><b>Interest Rates:</b><div class="tab1"><input name=bb type=text size=15 onkeyup=checnum(this) ></div></li>
<li><b>Term(Years):</b><div class="tab1"><input name=cc type=text size=15 onkeyup=checnum(this)></div></li>

<li>
<div class="tab1"><input type=button name=ss value=Calculate onclick=loan() class="calc">
<input type="reset" name="Reset" id="button" value="Reset" class="calc" />
</div>
</li>
</ul>

<h4>Results:</h4>

<ul>
<li><b>Monthly Payment(EMI):</b><div class="tab1"><input name=r1 type=text readonly ></div></li>
<li><b>Total Interest Amount:</b><div class="tab1"><input name=r2 type=text readonly ></div></li>
<li><b>Monthly Interest:</b><div class="tab1"><input name=r3 type=text readonly ></div></li>
</ul>

</form>
</div>
</section>

</body>
</html>
