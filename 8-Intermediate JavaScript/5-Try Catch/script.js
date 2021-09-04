try{

        var input1 = prompt("Enter Some Number");
        if(input1 == "") throw "No Value Mentioned!!";

           alert("Input is correct!"); 

}catch(error){

    alert(error);

}finally{

    alert("Have a Good Day");
}