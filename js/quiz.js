var numCorrect = 0;
var name = "";
var own = false;
var enjoyed = "";

function displayResults() {
    $("#thankyou").empty();
    $("#return").empty();
    
    getData();
    
    document.getElementById("thankyou").innerHTML += "Thank you <u>" + name + "</u> for participating in this questionnaire";
    
    if (own == true)
        document.getElementById("thankyou").innerHTML += ",<br>as well as for purchasing Breath of the Wild!";
    else
        document.getElementById("thankyou").innerHTML += "!";
        
    if (enjoyed == "yes")
        document.getElementById("thankyou").innerHTML += "<br> We're glad you enjoyed your time in the land of Hyrule!";
    else if (enjoyed == "no")
        document.getElementById("thankyou").innerHTML += "<br> We're sorry that you did not enjoy your stay in the land of Hyrule.";
        
    getScore();
    
    document.getElementById("return").innerHTML += "Your score: " + numCorrect + "/3";
}

function getData() {
    name = document.getElementById("name").value;
    
    if (document.getElementById("own").value == "yes")
        own = true;
    else
        own = false;
    
    if (document.getElementById("rating").value == "yes")
        enjoyed = "yes";
    else if (document.getElementById("rating").value == "no")
        enjoyed = "no";
    else
        enjoyed = "";
}

function getScore() {
    numCorrect = 0;
    
    if ($("input[name=q1]:checked").val() == "hylian")
        numCorrect += 1;
             
    if ($("input[name=q2]:checked").val() == "100")
        numCorrect += 1;
        
    if ($("input[name=q3]:checked").val() == "hyrule")
        numCorrect += 1;
}

$("#submit").click(function(){
   displayResults(); 
});

$("#reset").click(function(){
    location.reload();
})