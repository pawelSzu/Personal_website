/*functions for the menu*/
function animateThis(sel)
{
	sel.className="animated swing";
	setTimeout(function(){removeAnimate(sel)},1000);
}
function removeAnimate(sel)
{
	sel.className = "";
}