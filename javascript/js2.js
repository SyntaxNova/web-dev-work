// "use strict";

// class car {
//     constructor(make, model, year) {
//         this.make = make;
//         this.model = model;
//         this.year = year;
//     }

//     display(){
//         document.write(this.make , this.model , this.year);
//     }
// }

// let car1 = new car("h", "a" , 100);
// let car2 = new car("h", "a" , 100);

// car1.display();

// class calsum{
//     constructor(){

//     };
//     calculatesum(...args){
//         let sum = 0 ;
//         args.forEach(function (elements){
//             sum += elements ;
//        }); 
//        return sum ; 
//     }
// }

// let s = new calsum();
// let sum = s.calculatesum(1,2,3,4,5,6);
// document.write(sum);

// let odd = [1,3,5,7,9];
// let even = [2,4,6,8,0];

// let numbers = [...odd , ...even];
// numbers.forEach(function (elements){
//     document.write(elements+" ");
// });

// let name = "joe"; 
// document.write(`Hello ${name} !`)//template litral

let el = document.getElementById("a");
alert(el.innerHTML); // pop up message!

el.innerHTML = "This is new para!" ;
el.style.color = "orange" ;

el.onclick = function (){
    // this code will be executed
    alert("element is clicked");
}
