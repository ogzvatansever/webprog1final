// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

$( document ).ready(function(){
  refreshSepet();
})

function refreshSepet() {
  getSepetCheckout("sepet-body-checkout");
  getAraToplam("sepet-toplam");
  getSepetMiktar("sepet-miktar-badge");
};

function test() {
  forms = document.querySelectorAll('.needs-validation')
  //var test = forms.querySelector('input').value
  
  Array.from(forms.querySelector('input').value).forEach(form => {
    console.log(form)
  })
};