const loder = document.getElementById("loder")
const body = document.getElementById("body")
body.onload = () => {
    loder.style.display='block'
    setTimeout(()=> {
        loder.style.display='none'
    },1000)

    const nexturl = window.location.href
    localStorage.setItem('win', `${nexturl}`)
}

const nav = document.getElementById("nav")
const menu = document.getElementById("menu")
menu.onclick = () => {
    nav.style.display="block"
}

const close = document.getElementById("close")
close.onclick = () => {
    nav.style.display="none"
}

window.onclick = (event) => {
    if (event.target == nav) {
        nav.style.display="none"
    }
}
// alert("done")
