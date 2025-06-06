
document.addEventListener('DOMContentLoaded', function () {
  const fileInput = document.getElementById('upload-input');
  const fileName = document.getElementById('file-name');
  const editBtn = document.getElementById('editBtn');
  const saveBtn = document.getElementById('saveBtn');
  const inputs = document.querySelectorAll('input[type="text"], input[type="email"]');

  // Minine kayb9a ybadel smiya dyal image
  if (fileInput) {
    fileInput.addEventListener('change', function () {
      if (this.files && this.files.length > 0) {
        fileName.textContent = this.files[0].name;
      } else {
        fileName.textContent = 'Choisir une image';
      }
    });
  }

  // L’button Modifier ykhlli les champs editable
  if (editBtn && saveBtn) {
    editBtn.addEventListener('click', () => {
      inputs.forEach(input => input.removeAttribute('readonly'));
      if (fileInput) fileInput.removeAttribute('disabled');

      editBtn.style.display = 'none';
      saveBtn.style.display = 'inline-block';
    });
  }
});

// Fonction bach tchouf image mn file input
function selectImage() {
  const uploadInput = document.getElementById('upload-input');
  if (uploadInput && !uploadInput.disabled) {
    uploadInput.click();
  }
}

