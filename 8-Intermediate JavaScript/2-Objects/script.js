function area(a, b){
    this.input1 = a;
    this.input2 = b;


    this.getarea = function(){
        return this.input1 * this.input2;
    }
}

var input1 = prompt("Enter First Value");
var input2 = prompt("Enter Second Value");
var result = 0;

input1 = parseInt(input1);
input2 = parseInt(input2);

var a1 = new area(input1, input2);
result = a1.getarea();

document.write("Area: " +result);