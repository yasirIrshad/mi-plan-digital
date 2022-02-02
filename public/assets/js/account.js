document.addEventListener('DOMContentLoaded', () => {



    // modal borrar cuenta 
    const deleteAccount = document.querySelector('#deleteAccount');
    if(deleteAccount)
        deleteAccount.addEventListener('click', function(e){
            swal({
                title: 'Seguro/a que deseas continuar?',
                text: "Esta acción es final y causara la perdida de todos los datos!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                confirmButtonText: 'Si, Borralo!'
            }).then(function (result) {
                if(result.value === true){
                    swal(
                        'Eliminado!',
                        'Tus datos han sidos eliminados.',
                        'success'
                    )
                }else {
                    swal(
                        'Cancelado!',
                        'Acción cancelada.',
                        'error'
                    )
                }            
            })
        })
    // modal borrar cuenta 

    const closeNoti = document.querySelector('.closeNoti');



    const accountCard = document.querySelector('#accountCard');
    const closeCard = document.querySelector('.closeCard');
    const showAccountCard = document.querySelector('#showAccountCard');
    
    // --------- Email -------------
    const emailUpdateBtn = document.querySelector('#emailUpdate');
    const emailInput = document.querySelector('#emailInput');
    const emailOptions = document.querySelector('#emailOptions');
    const emailOptions2 = document.querySelector('#emailOptions2');
    const emailSave = document.querySelector('#emailSave');
    // --------- Email -------------

    // --------- Phone -------------
    const phoneUpdateBtn = document.querySelector('#phoneUpdate');
    const phoneInput = document.querySelector('#phoneInput');
    const phoneOptions = document.querySelector('#phoneOptions');
    const phoneOptions2 = document.querySelector('#phoneOptions2');
    const phoneSave = document.querySelector('#phoneSave');
    // --------- Phone -------------

    // --------- password -------------
    const passwordBtn = document.querySelector('#passwordBtn');
    const passwordInput = document.querySelector('#passwordInput');
    const passOptions = document.querySelector('#passOptions');
    const passOptions2 = document.querySelector('#passOptions2');
    const passOptions3 = document.querySelector('#passOptions3');
    const passwordSave = document.querySelector('#passwordSave');
    const passwordNew = document.querySelector('#passwordNew');
    const passLabelNew = document.querySelector('#passLabelNew');
    const passLabelOld = document.querySelector('#passLabelOld');
    // --------- password -------------


    if(emailUpdateBtn)
        emailUpdateBtn.addEventListener('click', () => {
            emailInput.removeAttribute('disabled');
            emailOptions.classList.remove('d-flex');
            emailOptions.style.display = 'none';
            emailOptions2.style.display = 'flex';
        })
    if(emailSave)
        emailSave.addEventListener('click', () => {
            emailInput.setAttribute('disabled', 'true');
            emailOptions2.classList.remove('d-flex')
            emailOptions.style.display = 'flex';
            emailOptions2.style.display = 'none';
        })

    if(phoneUpdateBtn)
        phoneUpdateBtn.addEventListener('click', () => {
            phoneInput.removeAttribute('disabled');
            phoneOptions.classList.remove('d-flex');
            phoneOptions.style.display = 'none';
            phoneOptions2.style.display = 'flex';
        })
    if(phoneSave)
        phoneSave.addEventListener('click', () => {
            phoneInput.setAttribute('disabled', 'true');
            phoneOptions2.classList.remove('d-flex');
            phoneOptions.style.display = 'flex';
            phoneOptions2.style.display = 'none';
        })
    
    if(passwordBtn)
        passwordBtn.addEventListener('click', () => {
            passwordInput.removeAttribute('disabled');
            passOptions.classList.remove('d-flex');
            passOptions.style.display = 'none';
            passOptions2.style.display = 'flex';
        })
    if(passwordSave)
        passwordSave.addEventListener('click', () => {
            if(passwordInput.value == 'yes'){
                passwordInput.value = "";
                passwordInput.style.display = 'none';
                passwordInput.setAttribute('disabled', 'true');
                passOptions2.classList.remove('d-flex');
                passOptions2.style.display = 'none';
                passLabelOld.style.display = 'none';

                passwordNew.style.display = 'block'
                passOptions3.style.display = 'flex';
                passLabelNew.style.display = 'block'

                passwordUpdate.addEventListener('click', () => {
                    if(passwordNew.value == ""){
                        swal("Contraseña vacia!", 
                            "El campo contraseña no debe quedar vacio!", 
                            "warning"
                        );
                        return;
                    }else if(passwordNew.value.length < 4 ){
                        swal("Contraseña muy corta!", 
                            "El campo contraseña no puede tener menos de 4 caracteres!", 
                            "warning"
                        );
                        return;
                    }else {
                        passwordNew.style.display = 'none'
                        passOptions3.classList.remove('d-flex');
                        passOptions3.style.display = 'none';
                        passLabelNew.style.display = 'none'                       
                        
                        passLabelOld.style.display = 'block'
                        passwordInput.style.display = 'block'
                        passOptions.style.display = 'flex'
                    }
                })
            }else if (passwordInput.value == ""){
                swal("Contraseña vacia!", 
                    "El campo contraseña no debe quedar vacio!", 
                    "warning"
                );
                return;
            }else{
                swal("Contraseña incorrecta!", 
                    "La contraseña introducida es incorrecta!", 
                    "error"
                );
                return;
            }
        })
    
        



    if(closeCard)
        closeCard.addEventListener('click', () => {
            emailInput.setAttribute('disabled', 'true');
            emailOptions2.classList.remove('d-flex')
            emailOptions.style.display = 'flex';
            emailOptions2.style.display = 'none';            

            phoneInput.setAttribute('disabled', 'true');
            phoneOptions2.classList.remove('d-flex');
            phoneOptions.style.display = 'flex';
            phoneOptions2.style.display = 'none';

            passwordNew.style.display = 'none'
            passOptions3.classList.remove('d-flex');
            passOptions3.style.display = 'none';
            passLabelNew.style.display = 'none'

            passOptions2.classList.remove('d-flex');
            passOptions2.style.display = 'none';
            
            passLabelOld.style.display = 'block'
            passwordInput.style.display = 'block'
            passwordInput.setAttribute('disabled', 'true');
            passOptions.style.display = 'flex'

            accountCard.style.display = 'none'
        })
        
    if(showAccountCard)
        showAccountCard.addEventListener('click', () => {
            if(closeNoti) closeNoti.click()
            accountCard.style.display = 'block'
        })
})