
var slider = document.querySelectorAll('input[type=range]');
var output = document.getElementById("output");

slider.forEach(element => {
    var idname = 'output_' + element.name;
    var output = document.getElementById(idname);
    element.oninput  = function() {
        output.innerHTML = this.value;
      }
});