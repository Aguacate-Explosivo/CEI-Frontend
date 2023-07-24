var slider = document.getElementById("cantidad_producire");
  var output = document.getElementById("cantidad_producire_barra");
  output.innerHTML = slider.value + "%"; // Display the default slider value with a percentage symbol

  // Update the current slider value (each time you drag the slider handle)
  slider.oninput = function() {
    output.innerHTML = this.value + "%";
}
 
var slidere = document.getElementById("cantidad_productose");
var outpute = document.getElementById("cantidad_productose_barra");
outpute.innerHTML = slidere.value + "%"; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slidere.oninput = function() {
    outpute.innerHTML = this.value + "%";
}
var slideree = document.getElementById("valor_total_gastoe");
var outputee = document.getElementById("valor_total_gastoe_barra");
outputee.innerHTML = slideree.value + "%"; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slideree.oninput = function() {
    outputee.innerHTML = this.value + "%";
}

var slidereee = document.getElementById("valor_total_costoe");
var outputeee = document.getElementById("valor_total_costoe_barra");
outputeee.innerHTML = slidereee.value + "%" ; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slidereee.oninput = function() {
    outputeee.innerHTML = this.value + "%";
}