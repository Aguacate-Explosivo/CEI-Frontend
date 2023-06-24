var slider = document.getElementById("cantidad_productos");
  var output = document.getElementById("cantidad_productos_barra");
  output.innerHTML = slider.value + "%"; // Display the default slider value with a percentage symbol

  // Update the current slider value (each time you drag the slider handle)
  slider.oninput = function() {
    output.innerHTML = this.value + "%";
}
 
var slidere = document.getElementById("precio_unitario");
var outpute = document.getElementById("precio_unitario_barra");
outpute.innerHTML = slidere.value + "%"; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slidere.oninput = function() {
    outpute.innerHTML = this.value + "%";
}
var slideree = document.getElementById("precio_venta");
var outputee = document.getElementById("precio_venta_barra");
outputee.innerHTML = slideree.value + "%"; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slideree.oninput = function() {
    outputee.innerHTML = this.value + "%";
}

var slidereee = document.getElementById("gastos_generales");
var outputeee = document.getElementById("gastos_generales_barra");
outputeee.innerHTML = slidereee.value + "%" ; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slidereee.oninput = function() {
    outputeee.innerHTML = this.value + "%";
}