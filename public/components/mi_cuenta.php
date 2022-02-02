<div class="card col-md-4 col-sm-12 col-xs-12" id="accountCard" style="display: none;">
    <div class="card-body d-flex justify-content-between" style="padding: 0 0 0 10px; border-bottom: 1px solid gray">
        <h5 class="card-title">Mi Cuenta</h5>
        <button type="button" style="border: transparent; background: white" class="closeCard d-flex align-items-center" data-dismiss="modal" aria-label="Close">
            <span style="font-size: 20px;" aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="d-flex justify-content-between mt-2" id="imageContent">
    
        <div class="col-8 d-flex justify-content-between align-items-center" style="padding: 0">
            <label class="col-md-5">Avatar</label>
            <img src="../assets/images/avatars/sin_avatar.png" id="imageShow" alt="avatar" height="70" style="border-radius: 50%; margin: 0 auto">
        </div>
        
        <div class="col-3 d-flex align-items-center justify-content-end" style="padding: 0">
            <button id="imagebtn" data-toggle="modal" data-target="#avatarModal" class="btn btn-outline-primary">Actualizar</button>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-2">
        <div class="col-8 mt-3 d-flex justify-content-between align-items-center" style="padding: 0">
            <label class="col-md-5" style="margin-bottom: 0;">Correo electronico</label>
            <input class="form-control col-md-7" id="emailInput" type="email" name="email" disabled>
        </div>
        
        <div id="emailOptions" class="col-3 d-flex align-items-end justify-content-end" style="padding: 0">
            <button class="btn btn-outline-primary">Actualizar</button>
        </div>
        <div id="emailOptions2" class="col-3 d-flex align-items-end justify-content-end" style="display: none!important; padding: 0">
            <button class="btn btn-secondary">Guardar</button>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-2">
        <div class="col-8 mt-3 d-flex justify-content-between align-items-center" style="padding: 0">
            <label class="col-md-5">Telefono</label>
            <input class="form-control col-md-7" id="phoneInput" type="tel" name="phone" disabled>
        </div>
        
        <div id="phoneOptions" class="col-3 d-flex align-items-end justify-content-end" style="padding: 0">
            <button id="phoneUpdate" class="btn btn-outline-primary">Actualizar</button>
        </div>
        <div id="phoneOptions2" class="col-3 d-flex align-items-end justify-content-end" style="display: none!important; padding: 0">
            <button id="phoneSave" class="btn btn-secondary">Guardar</button>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-2">
        <div class="col-8 mt-3 d-flex justify-content-between align-items-center" style="padding: 0">
            <label id="passLabelOld" class="col-md-5">Contraseña</label>
            <input class="form-control col-md-7" id="passwordInput" type="password" name="password" disabled>
            <label id="passLabelNew" class="col-md-5" style="display: none;">Nueva Contraseña</label>
            <input class="form-control col-md-7" id="passwordNew" type="password" name="password" style="display: none;">
        </div>
        
        <div id="passOptions" class="col-3 d-flex align-items-end justify-content-end" style="padding: 0">
            <button id="passwordBtn"  type="button" class="btn btn-outline-primary">Actualizar</button>
        </div>
        <div id="passOptions2" class="col-3 d-flex align-items-end justify-content-end" style="display: none!important; padding: 0">
            <button id="passwordSave"  type="button" class="btn btn-secondary">Aceptar</button>
        </div>
        <div id="passOptions3" class="col-3 d-flex align-items-end justify-content-end" style="display: none!important; padding: 0">
            <button id="passwordUpdate"  type="button" class="btn btn-secondary">Guardar</button>
        </div>
        
    </div>

    <div class="d-flex justify-content-end mb-4 m-t-40">                   
        <div class="col-6 d-flex align-items-center justify-content-end">
            <button id="deleteAccount" class="btn btn-danger">Borrar cuenta</button>
        </div>
    </div>
</div> 