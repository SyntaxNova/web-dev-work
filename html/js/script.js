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
document.write("\n");

// Day 2

//while loop
let l = 0 ;
while(l<= 10){
    document.write(l);
    l++;
}


//do while loop
document.write("\n");
let dwl = 1 ;
do{
    document.write(dwl);
    dwl++;
}while(dwl<=10);


//for of loop
document.write("\n");
const arr = [2,4,6,8,0,10];
for(let element of arr){
    document.write(element+" ");
}

//for in loop
document.write("\n");
const obj = {"george" : 2001 , "barack":2004 , "trump":2010 , "joe":2016 };
for(let name in obj){
    document.write( name + " got selected in " + obj[name] +" ");
}

//functions 
function getmax(w=0,e=3){
    if(w<e){
        return " w is greater ";
    }else{
        return " e is greater ";
    }
}
let max = getmax(5,6); 
document.write(max);

//anonymous function
let any = function (r=3,t=0){
    if(r<t){
        return " r is greater ";
    }else{
        return " t is greater ";
    }
}
let anay = any(5,6); 
document.write(anay);

//function as an argument
//focus, tricky part
let mult = function(x,y){
    return x*y ;
}
let addition = function(x,y){
    return x+y ;
}
let u = 5 ;
let v = 20 ;

let action = function (x,y,z){
    let c = z(x,y);
    return c;
}

let argf = action(u,v,addition);
document.write(argf);

//arrow function 
let multiply = (j,k)=>{ //just function is replaced by arrows
    return j*k;
}

//creating object using functions
let car = function(make , model , year){
    this.make = make;
    this.model = model ;
    this.yaer = year ;
    this.display = function(){
        document.write(this.make + this.model + this.year );
    }
}

let car1 = new car("Hyundai" , "i10" , 2012);
let car2 = new car("maruti" , "baleno" , 2010);

document.write(" "+ car1.make + " " + car1.model);

//


