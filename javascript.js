// Redirect to custom page/website 1
window.location = "https://lab387.com"; 
// Redirect to custom page/website 2 (simulate a mouse click)
window.location.href = "https://lab387.com"; 
// Redirect to custom page/website 3 (simulate HTTP redirect)
window.location.replace("https://lab387.com");
// Get currect URL/location
var url = window.location.href;

// Get browser's width (full function, with cross-browser support) #function
function width() {
    return Math.max(
        document.body.scrollWidth,
        document.documentElement.scrollWidth,
        document.body.offsetWidth,
        document.documentElement.offsetWidth,
        document.documentElement.clientWidth
    );
}
// Get browser's height (full function, with cross-browser support) #function
function height() {
    return Math.max(
      document.body.scrollHeight,
      document.documentElement.scrollHeight,
      document.body.offsetHeight,
      document.documentElement.offsetHeight,
      document.documentElement.clientHeight
    );
}

// Check if id exists and then do something
var idExists = document.getElementById("id-name");
if(idExists.length > 0){
    // Id exists
}else{
    // Id doesn't exists
}

// Check if class exists and then do something
var classExists = document.getElementsByClassName("class-name")[0];
if(classExists.length > 0){
    // Class exists
}else{
    // Class doesn't exists
}

// Get elements width (without border)
var element = document.getElementById("element").clientWidth;
// Get elements width (with border width)
var element = document.getElementById("element").offsetWidth;

// Get elements height (without border)
var element = document.getElementById("element").clientHeight;
// Get elements height (with border width)
var element = document.getElementById("element").offsetWidth;