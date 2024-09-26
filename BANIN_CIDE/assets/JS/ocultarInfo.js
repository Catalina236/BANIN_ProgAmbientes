
const toggleButton = document.getElementById('toggleButton');
const infoContainer = document.getElementById('infoContainer');
const profileDescription = document.getElementById('profileDescription');


toggleButton.addEventListener('click', () => {
    
    if (profileDescription.classList.contains('hidden')) {
        
        infoContainer.classList.add('hidden');
        profileDescription.classList.remove('hidden');
        toggleButton.textContent = 'Ocultar';
    } else {
        
        infoContainer.classList.remove('hidden');
        profileDescription.classList.add('hidden');
        toggleButton.textContent = 'VER..';
    }
});