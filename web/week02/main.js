
function myFunction() {
    var x, text;

    x = document.getElementById("num").value;

    if (isNaN(x) || x != 20)
    {
        text = "Invalid age";
    } else {
        text = "Age is Valid";
    }
    document.getElementById("demo").innerHTML = text;
}