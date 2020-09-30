
function myFunction() {
    var x, text;

    x = document.getElementById("num").value;
    birthYear   = 2000;
    currentYear = new Date();
    
    myAge = cuurentYear.getFullYear() - birthYear;
    if (isNaN(x) || x != myAge)
    {
        text = "Invalid age";
    } else {
        text = "Age is Valid";
    }
    document.getElementById("demo").innerHTML = text;
}