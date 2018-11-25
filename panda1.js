//  ---------------------------------------------------------
            // color change on amount buttons
//  ---------------------------------------------------------

var select_amount = document.querySelectorAll(".select_amount");

for (var i=0; i<select_amount.length; i++){
    select_amount[i].addEventListener('click', function(e){
        
        for (var j=0; j<select_amount.length; j++){
            select_amount[j]= select_amount[j]+1;
            select_amount[j].style.backgroundColor="#777880";
        }
        
        if (e.target.parentNode.nodeName == "DIV") {
            e.target.parentNode.style.backgroundColor="#ea890d";
        }
        else {
            e.target.style.backgroundColor="#ea890d";
        }

    });  
}

// ---------------------------------------------------------
//          Give Monthly
// ---------------------------------------------------------

var donate_orange = document.querySelectorAll(".donate_orange");
var donate_links = document.querySelectorAll(".donate_orange>a");
var display_donate = document.querySelectorAll('.display_donate');
console.log(display_donate);
for (var i=0;i<donate_orange.length; i++){
    donate_orange[i].addEventListener('click', function(e){
        for (var j=0;j<donate_orange.length; j++){
            donate_orange[j] = donate_orange[j] +1;
            donate_orange[j].style.backgroundColor = '#777880';
        }
        if (e.target.parentNode.nodeName == "DIV") {
            e.target.parentNode.style.backgroundColor="#ea890d";
        }
        else {
            e.target.style.backgroundColor="#ea890d";
        }
        
    });
}
for (var i=0;i<donate_links.length-1; i++){
    donate_links[i].addEventListener('click', function(e){
        e.preventDefault();
        return false;
    });
}

// ---------------------------------------------------------
//          Change to give once/renew
// ---------------------------------------------------------



// ---------------------------------------------------------
//          change on 'other' amount when clicked
// ---------------------------------------------------------

var user_amount = document.getElementById("user_amount");

user_amount.addEventListener('click', function(e){

        var label = user_amount.lastElementChild;
        label.style.display= 'none';

        user_amount.style.backgroundColor='white';
        user_amount.style.color='black';
        user_amount.style.border='1px solid black';
        user_amount.style.boxShadow="0px 0px 15px blue";
        user_amount.style.textAlign="left";

        var input_field = document.getElementById("other_amount");
        input_field.style.display='block';
        input_field.style.backgroundColor='white';
        input_field.style.color='black';
        input_field.style.border='0.5px solid black';
        input_field.style.boxShadow="0px 0px 15px blue";
        input_field.style.textAlign="left";
        input_field.style.width='inherit';
        input_field.style.height='inherit';
        input_field.style.fontSize='18px';
        input_field.style.borderRadius='5px';
        // input_field.style.all='inherit';
        var inputValue= input_field.value;
        input_field.value = '$ ';

        input_field.addEventListener('blur', function(){
            input_field.style.display= 'none';
            label.style.display = 'block';
            //var div_other= input_field.parentNode;
            user_amount.backgroundColor="#777880";
            user_amount.color="white";
            user_amount.border= "2px solid #777880";
        });
        
});


// ---------------------------------------------------------
//         setting function for gift option display
// ---------------------------------------------------------

var select_amount = document.querySelectorAll(".select_amount");
var water_bottle=document.querySelector("#water_bottle");
var grocery_kit=document.querySelector("#grocery_kit");
var tiger_socks=document.querySelector("#tiger_socks");
var tiger_cooler=document.querySelector("#tiger_cooler");


function show_gift_options (theAmount){
    if (theAmount >=10 && theAmount<15){
        water_bottle.style.display="block";
        tiger_socks.style.display="none";
        grocery_kit.style.display="none";
        tiger_cooler.style.display="none";
    }
    if (theAmount >=15 && theAmount<20){
        tiger_socks.style.display="block";
        grocery_kit.style.display="block";
        water_bottle.style.display="block";
        tiger_cooler.style.display="none";
    }
    if (theAmount >=20){
        tiger_socks.style.display="block";  
        grocery_kit.style.display="block";
        water_bottle.style.display="block";
        tiger_cooler.style.display="block";
    }
}

// ---------------------------------------------------------
//      gift option display function execution when clicked
// ---------------------------------------------------------

for (var i=0; i<select_amount.length; i++){
    select_amount[i].addEventListener('click', function(e){
    
        if (e.target.parentNode.nodeName == "DIV") {
            var input_gift= e.target;
            var theAmount=input_gift.value;
            show_gift_options(theAmount);
        }
        else {
            var input_gift= e.target.firstElementChild;
            var theAmount=input_gift.value;
            show_gift_options(theAmount);
        }
    }); 
}

// ---------------------------------------------------------
//          
// ---------------------------------------------------------

