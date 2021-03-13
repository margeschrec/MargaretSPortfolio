// // function greetings(name) {
// //     console.log("Hey " + name + " , whats up?");
// // }
// // greetings("Jennifer");

// // function greeting(age) {
// //     return "So I understand you're "+ age + " years old.";
// // }
// // console.log(
// //     greeting(27)
// // );

// // function fullGreeting(age, name) {
// //     return "Hi " + name + ", I believe you are " + age + " years old.";
// // }
// // console.log(
// //     fullGreeting(27, "Jenny"));

// // function area(length, width){
// // //     console.log(length * width);
// // // }

// // // area(10, 2);

// // // var hello = function(){
// // //     console.log("How are you?");
// // // }
// // // hello();

// // // function hello(){
// // //     var blah = "it's early";
// // //     console.log(blah);
// // // }
// // // hello();

// // // var blah = "Please give me coffee";
// // // console.log(blah);

// // // function hello(name) {
// // //     return "Hi " + name + "!";
// // // }
// // // var name = prompt("your name:", "");
// // // document.write(hello(name));

// // // var num1 = 4;
// // // var num2 = 5;
// // // var num3 = 9;

// // // function ishighest(num1, num2, num3){
// // //     largest = 0;
// // //     if(num1 >= num2 && num1 >= num3) {
// // //         largest = num1;
// // //     }
// // //     else if (num2 >= num1 && num2 >= num3){
// // //         largest = num2;
// // //     }
// // //     else{
// // //         largest = num3;
// // //     }
// // //     document.write(largest);
// // // }
// // // ishighest();

// // // var num = [1, 2, 3, 4, 5]
// // // var names = ['reed', 'susan', 'mike']

// // // var pets = ['moxie', 'pickle', 'hootchie'];

function isHighest(...num) {
    var maxnumber = num[0];
    for (var x = 0; x < num.length; x++) {
        if (isFinite(num[x])) {
            if (num[x] > maxnumber) {
                maxnumber = num[x];
            }
        }
    }
    return maxnumber;
}


console.log(isHighest(10, 22, 38, 1000, "million"));

// var object = {
//     backgroundColor: "orange",
//     fontSize: "48px",
//     border: "4px solid green"
//     };

//     $("#burger").css(object);

//     $("div").css("backgroundColor", "blue");
//     $(".fun").css("fontSize", "48px");
//     $("#food").css("border", "8px solid green");
//     $("div:first").css("color", "orange");

//     $("img").click(function(){
//         alert("hey");
//     })

//     $("#food").click(function(){
//         var text = $(this).text();
//         alert("you clicked on " + text);
//     })
//     $("input").keypress(function(){
//         alert("you are typing");
//     })
// function expressiion needs semicolon, hoisting will not work with expressions, only function declaration 
// const speak = function(){
//     console.log("have a good day");

// };

// speak();
// speak();
//pass values into function  
// name is parameter, argument is linda
// const speak = function(name){
//     console.log("good day " + name );
// };

// speak("linda");
// you can pass arguments into the function object, but as soon as you pass it in when you call it, it ovewrites it 
// const speak = function(name = "minny", time = "night"){
//     console.log("good " + time +" " + name );
// };

// speak();

// const calcArea = function(radius){
//     let area = 3.14 * radius**2;
//     return area;
// }
// // return the value (area) into the constant to be called 
// const area = calcArea(5);
// console.log(area);

// const myCal = number => 10 * number**2;

// const answer = myCal(5);
// console.log(answer);

// const greet = function(){
//     return 'hello,world';
// };



// const greet = () => "hello, world";
// // to return to console//

// const result = greet();
// console.log(result);

//  let user = {
//     name: "crystal",
//     age: 30,
//     email: "h@gmail.com",
//     location: "berlin",
//     blogs: ["I like food", "and pets"]
//  };

//  console.log(user);
//  console.log(user.name);

//  let user = {
//     name: "crystal",
//     age: 30,
//     email: "h@gmail.com",
//     location: "berlin",
//     blogs: ["I like food", "and pets"],
//     login: function(){
//         console.log("the suer logged in");
//     },
//     logout: function(){
//         console.log("the user logged out");
//     },
//     log Blogs: function(){

//     }
//  };

// user.login()

