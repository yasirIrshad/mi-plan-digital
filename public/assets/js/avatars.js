const avatar1 = "../assets/images/avatars/sin_avatar.png"
const avatar2 = "../assets/images/avatars/001-granddaughter.png"
const avatar3 = "../assets/images/avatars/002-turistico.png"
const avatar4 = "../assets/images/avatars/032-niece.png"
const avatar5 = "../assets/images/avatars/031-mother.png"
const avatar6 = "../assets/images/avatars/007-karate.png"
const avatar7 = "../assets/images/avatars/011-cyclist.png"
const avatar8 = "../assets/images/avatars/012-swimmer-1.png"
const avatar9 = "../assets/images/avatars/016-bodybuilding.png"
const avatar10 = "../assets/images/avatars/002-mermaid.png"
const avatar11 = "../assets/images/avatars/001-jupiter-2.png"
const avatar12 = "../assets/images/avatars/003-yeti.png"
const avatar13 = "../assets/images/avatars/004-juno.png"
const avatar14 = "../assets/images/avatars/021-dog.png"
const avatar15 = "../assets/images/avatars/023-bear.png"
const avatar16 = "../assets/images/avatars/086-fox.png"
const avatar17 = "../assets/images/avatars/087-zebra.png"


const avatarsArr1 = [avatar1, avatar2, avatar3, avatar4, avatar5, avatar6, avatar7, avatar8, avatar9, avatar10]
const avatarsArr2 = [avatar11, avatar12, avatar13, avatar14, avatar15, avatar16, avatar17]
const avatarsArr = avatarsArr1.concat(avatarsArr2)

const imageShow = document.querySelector('#imageShow');
const changeAvatar = document.querySelector('#changeAvatar');

const cambiarAvatar = (id) => {
    changeAvatar.addEventListener('click', () => {
        console.log('clicked')
        imageShow.src = avatarsArr[id]
    })    
}