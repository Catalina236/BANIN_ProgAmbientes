let isDragging = false;
let offsetX, offsetY;
const infoCandidato = document.getElementById('infocandidato');
const infoHidden = document.getElementById('infoHidden');
function toggleInfo() {
    infoHidden.classList.toggle('show');
}

function startDrag(e) {
    isDragging = true;
    if (e.type === 'touchstart') {
        offsetX = e.touches[0].clientX - infoCandidato.getBoundingClientRect().left;
        offsetY = e.touches[0].clientY - infoCandidato.getBoundingClientRect().top;
    } else {
        offsetX = e.clientX - infoCandidato.getBoundingClientRect().left;
        offsetY = e.clientY - infoCandidato.getBoundingClientRect().top;
    }
}

function drag(e) {
    if (isDragging) {
        if (e.type === 'touchmove') {
            infoCandidato.style.left = (e.touches[0].clientX - offsetX) + 'px';
            infoCandidato.style.top = (e.touches[0].clientY - offsetY) + 'px';
        } else {
            infoCandidato.style.left = (e.clientX - offsetX) + 'px';
            infoCandidato.style.top = (e.clientY - offsetY) + 'px';
        }
    }
}

function stopDrag() {
    isDragging = false;
}

infoCandidato.addEventListener('mousedown', startDrag);
document.addEventListener('mousemove', drag);
document.addEventListener('mouseup', stopDrag);

infoCandidato.addEventListener('touchstart', startDrag);
document.addEventListener('touchmove', drag);
document.addEventListener('touchend', stopDrag);