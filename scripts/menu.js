//menu.js

var isShowing = false; //flag
var menuItem = null;   //id  

function show(id)
{
    hide(); 
    menuItem = document.getElementById(id);
    if (menuItem != null)
    {
        menuItem.style.visibility = 'visible';
        isShowing = true;
    }
}


function hide()
{       
    if (isShowing) menuItem.style.visibility = 'hidden';
    isShowing = false;
}
