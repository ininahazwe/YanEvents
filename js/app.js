let scrollpos = window.scrollY
const header = document.querySelector(".menu")
const header_height = header.offsetHeight

const add_class_on_scroll = () => header.classList.add("visible")
const remove_class_on_scroll = () => header.classList.remove("visible")

window.addEventListener('scroll', function() { 
    scrollpos = window.scrollY;

if (scrollpos >= 730) { add_class_on_scroll() }
else { remove_class_on_scroll() }
})