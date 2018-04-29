document.querySelector('#btn_login').addEventListener("click", function(ev){
  ev.preventDefault();
  var formulario = new ValidatorFrm('#frm_login');

  //
});

class ValidatorFrm {
  constructor(form) {
    var frm = document.querySelector(form);
    frm.setAttribute("action","controllers/login_controller.php?action=login");
    (this.validaremail(document.querySelector('#inp_email').value)) ? frm.submit() : alert("El correo no es vlido");
  }

  validaremail(email){
    var regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (regex.test(email)) return true;
    else return false;
  }
}
