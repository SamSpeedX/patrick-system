const show = document.getElementById("show")
const hide = document.getElementById("hide")
const passi = document.getElementById("password")
show.onclick = () => {
    show.style.display='none'
    hide.style.display='block'
    passi.type='text'
}

hide.onclick = () => {
    show.style.display='block'
    hide.style.display='none'
    passi.type='password'
}

const user = document.getElementById("username")
const box1 = document.getElementById("name")
user.onblur = () => {
    if (user.value == "") {
        box1.style.border='2px solid red'
    } else {
        box1.style.border='2px solid green'
    }
}

const msimbo = document.getElementById("password")
const box2 = document.getElementById("box2")
msimbo.onblur = () => {
    if (msimbo.value == "") {
        box2.style.border='2px solid red'
    } else {
        box2.style.border='2px solid green'
    }
}

const pepe = document.getElementById("email")
const box3 = document.getElementById("box3")
pepe.onblur = () => {
    if (pepe.value == "") {
        box3.style.border='2px solid red'
    } else {
        box3.style.border='2px solid green'
    }
}