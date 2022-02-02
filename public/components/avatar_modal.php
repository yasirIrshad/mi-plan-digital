<div class="modal fade" id="avatarModal" style="z-index: 1051" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content col-xs-12 avatar-modal">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Seleccione un avatar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col col-12">
            <p style="margin-bottom: 5px; font-weight: bold">Sin Avatar</p>
            <div class="d-flex justify-content-between ">
                <div>
                    <img class="hoverAvatar" src="../assets/images/avatars/sin_avatar.png" height="50" alt="Sin Avatar" onclick="cambiarAvatar(0)">
                </div>
                <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" style="cursor: pointer;">Mostrar mas...</a>
                </div>
            </div>
            
        </div>
        <div class="col col-12 mt-2">
            <p style="margin-bottom: 5px; font-weight: bold">Avatar</p>
            <div class="d-flex justify-content-between ">
                <div>
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/001-granddaughter.png" height="50" alt="Avatar" onclick="cambiarAvatar(1)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/002-turistico.png" height="50" alt="Avatar" onclick="cambiarAvatar(2)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/032-niece.png" height="50" alt="Avatar" onclick="cambiarAvatar(3)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/031-mother.png" height="50" alt="Avatar" onclick="cambiarAvatar(4)" >
                </div>
                <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" style="cursor: pointer;">Mostrar mas...</a>
                </div>
            </div>
            <a href=""></a>
            
        </div>
        <div class="col col-12 mt-2">
            <p style="margin-bottom: 5px; font-weight: bold">Avatar deporte favorito</p>
            <div class="d-flex justify-content-between ">
                <div>
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/007-karate.png" height="50" alt="Avatar" onclick="cambiarAvatar(5)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/011-cyclist.png" height="50" alt="Avatar" onclick="cambiarAvatar(6)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/012-swimmer-1.png" height="50" alt="Avatar" onclick="cambiarAvatar(7)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/016-bodybuilding.png" height="50" alt="Avatar" onclick="cambiarAvatar(8)" >
                </div>
                <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" style="cursor: pointer;">Mostrar mas...</a>
                </div>
            </div>        
        </div>
        <div class="col col-12 mt-2">
            <p style="margin-bottom: 5px; font-weight: bold">Avatar mitologico</p>
            <div class="d-flex justify-content-between ">
                <div>
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/002-mermaid.png" height="50" alt="Avatar" onclick="cambiarAvatar(9)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/001-jupiter-2.png" height="50" alt="Avatar" onclick="cambiarAvatar(10)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/003-yeti.png" height="50" alt="Avatar" onclick="cambiarAvatar(11)" >
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/004-juno.png" height="50" alt="Avatar" onclick="cambiarAvatar(12)" >
                </div>
                <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" style="cursor: pointer;">Mostrar mas...</a>
                </div>
            </div>        
        </div>
        <div class="col col-12 mt-2">
            <p style="margin-bottom: 5px; font-weight: bold">Avatar animal favorito</p>
            <div class="d-flex justify-content-between ">
                <div>
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/021-dog.png" height="50" alt="Avatar" onclick="cambiarAvatar(13)">
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/023-bear.png" height="50" alt="Avatar" onclick="cambiarAvatar(14)">
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/086-fox.png" height="50" alt="Avatar" onclick="cambiarAvatar(15)">
                    <img class="mr-2 hoverAvatar" src="../assets/images/avatars/087-zebra.png" height="50" alt="Avatar" onclick="cambiarAvatar(16)">
                </div>
                <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" style="cursor: pointer;">Mostrar mas...</a>
                </div>
            </div>        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <button id="changeAvatar" data-dismiss="modal" type="button" class="btn btn-outline-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>