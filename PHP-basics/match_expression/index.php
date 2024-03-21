<?php 

// THE MATCH EXPRESION IS ONLY FOR THE PHP > 8.0 VERSIONS
$paymentStatus = 2;
$paymentResponse = match($paymentStatus) {
    1 => print "paid",
    2,3 => print "not paid" // MORE THAN TWO OPTIONS
};

// DIFERENCES WITH SWITCH
// MATCH CAN BE ASSIGNED TO A VARIABLE
// MATCH DOES NOT NEED BREAK
// IN MATCH YOU HAVE TO SPECIFY ALL CASES IF NOT AN ERROR WILL POP UP

// match does the comparison with === 
// switch does the comparison with == 

