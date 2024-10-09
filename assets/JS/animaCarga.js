document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.getElementById('loadingOverlay');
    const mainContent = document.getElementById('mainContent');
    
    // Simulate loading time (1 seconds)
    setTimeout(() => {
        // Remove overlay
        overlay.style.display = 'none';
        
        // Make content fully visible
        mainContent.classList.add('loaded');
    }, 1000);
});