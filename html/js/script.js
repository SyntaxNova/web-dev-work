"use strict";

let abc = "hello world!";   // declaring variable

document.write(abc);        //print function

//cannot declare variable twice 

const pqr = " Hello! ";
// constant variable cannot change value of the variable

// naming convention : can have _abc , $abc , abc123
//cannot start with a number 
//cannot contain special char like ! - #
//case sensitive

//operators are same as php
let a = 2;
let b = 5;
let add = a**b;  //exponential a raise to b
document.write(" "+add);

//typeof
let tp = 3 ;
document.write(" "+typeof tp);
// it prints the data type; here op is number

// conditional statements
if(a == b ){
    document.write(" a and b is same ");
}else if(a <= b){
    document.write(" b is greater than a ");
}else{
    document.write("invalid");
}

let n = 3;
switch(n){
    case 1 :
        document.write(" n is one");
        break;
    case 2 :
        document.write(" n is two");
        break;
    case 3 :
        document.write(" n is three");
        break;
    default :
        document.write(" anything");
}




