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

function checkoutCart() {
  getform = document.querySelector("#checkoutCart");
  if (getform.checkValidity()) {
    fetch(`sepet.php?option=checkout&
                            sepet_id=${1}&
                            buyer_fname=${getform.querySelector('input[id="firstName"]').value}&
                            buyer_sname=${getform.querySelector('input[id="lastName"]').value}&
                            buyer_adress=${getform.querySelector('input[id="address"]').value}&
                            buyer_adress2=${getform.querySelector('input[id="address2"]').value}&
                            buyer_country=${getform.querySelector('select[id="country"]').value}&
                            buyer_city=${getform.querySelector('select[id="state"]').value}&
                            buyer_zip=${getform.querySelector('input[id="zip"]').value}&
                            buyer_cc_owner=${getform.querySelector('input[id="cc-name"]').value}&
                            buyer_cc_number=${getform.querySelector('input[id="cc-number"]').value}&
                            buyer_cc_expiry=${getform.querySelector('input[id="cc-expiration"]').value}&
                            buyer_cc_cvv=${getform.querySelector('input[id="cc-cvv"]').value}&
                            buyer=${getform.querySelector('input[id="hidden-buyer"]').value}
                            `)
                            .finally(() => location.href = "orders.php")
  }
};