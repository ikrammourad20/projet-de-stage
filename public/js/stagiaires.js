function showInternDetails(id) {
  // Affiche l'overlay correspondant
  const overlay = document.getElementById(`overlay-container-${id}`);
  if (overlay) {
    overlay.style.display = 'block';
  }
}

function hideInternDetails(id) {
  // Cache l'overlay correspondant
  const overlay = document.getElementById(`overlay-container-${id}`);
  if (overlay) {
    overlay.style.display = 'none';
  }
}
