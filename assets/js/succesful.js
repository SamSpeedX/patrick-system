const next = document.getElementById("continuous")

next.onclick = () => {
    const window = localStorage.getItem('win')

    const nexturl = window
    location.href = nexturl
}