/* order.js */


function processOrder()
{
    var gunQty = document.getElementById("numGuns").value;
    var swordQty = document.getElementById("numSwords").value;
    var greekQty = document.getElementById("numGreek").value;
    var romanQty = document.getElementById("numRoman").value;
    var swordChoice = document.getElementById("sword");
    var gunChoice = document.getElementById("gun");
    var greekChecked = document.getElementById("Greek").value;
    var romanChecked = document.getElementById("Roman").value;
    var gunsOk;
    var swordsOk;
    var greekOk;
    var romanOk;    


swordQty = processChoice(swordChoice, swordQty);
gunQty = processChoice(gunChoice, gunQty);
greekQty = processChecked(greekChecked, greekQty);
romanQty = processChecked(romanChecked, romanQty);
gunsOk = validateNumber(gunQty);
swordsOk = validateNumber(swordQty);
greekOk = validateNumber(greekQty);
romanOk = validateNumber(romanQty);
//orderProcessed(everythingOk);

if(gunsOk && swordsOk && greekOk && romanOk)
	window.alert("Your order has been processed successfully!\nAn invoice will be emailed to you shortly.");

return false;
}

function processChoice(choice, qty)
    {
        if(choice === "---NONE---")
            qty = 0;
        return qty;
    }

    function processChecked(checkChoice, qty)
    {
        if(checkChoice != "checked")
            qty = 0;
        return qty;    
    }
    
    function validateNumber(qty)
    {
	 var trueFalse = true;
        if(isNaN(qty))
        {
            window.alert("Invalid order quantity. \nAll order quantities must be a number\n");
            trueFalse = false;            
        }                      
        return trueFalse;    
    }

    function orderProcessed(okay)
    {
        if(okay == true)        {
            window.alert("Your order has been processed successfully!\nAn invoice will be emailed to you shortly.");            
        } 
    }
    
