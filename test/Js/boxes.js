function numberOfCheckboxesSelected() {
    return document.querySelectorAll('input[type=radio]:checked').length;
  }
  
function onChange() {
    console.log(numberOfCheckboxesSelected());
    document.getElementById('enable-on-two').disabled = numberOfCheckboxesSelected() < 10;
}
  
document.querySelectorAll('input[type=radio]').forEach(node => {
    node.addEventListener('change', onChange, false);
});