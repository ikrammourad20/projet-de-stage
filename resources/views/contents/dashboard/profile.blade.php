<div class="profile-container">
  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="profile-form">
    @csrf
    @method('PUT')

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
      <h1>Mon Profil</h1>
      <div style="display: flex; flex-direction: column; align-items: center;">
        @if($user->image)
          <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover;">
        @else
          <img src="{{ asset('images/default-avatar.png') }}" alt="Default" style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover;">
        @endif
      </div>
    </div>

    <div class="input-group">
      <i class="fa fa-user"></i>
      <input type="text" name="fullname" value="{{ $user->fullname }}" placeholder="Nom complet" readonly />
    </div>

    <div class="input-group">
      <i class="fa fa-envelope"></i>
      <input type="email" name="email" value="{{ $user->email }}" placeholder="Email" readonly />
    </div>


    <div class="button-group">
      <button type="button" id="editBtn">Modifier</button>
      <button type="submit" id="saveBtn" style="display:none;">Enregistrer</button>
    </div>
  </form>
</div>


<script>
  function selectImage() {
    if(!document.getElementById('upload-input').disabled) {
      document.getElementById('upload-input').click();
    }
  }

  document.getElementById('upload-input').addEventListener('change', function() {
    var fileInput = this;
    var fileName = document.getElementById('file-name');

    if (fileInput.files && fileInput.files.length > 0) {
      fileName.textContent = fileInput.files[0].name;
    } else {
      fileName.textContent = 'Choisir une image';
    }
  });

  const editBtn = document.getElementById('editBtn');
  const saveBtn = document.getElementById('saveBtn');
  const inputs = document.querySelectorAll('input');

  editBtn.addEventListener('click', () => {
    inputs.forEach(input => {
      input.removeAttribute('readonly');
      input.removeAttribute('disabled');
    });
    editBtn.style.display = 'none';
    saveBtn.style.display = 'inline-block';
  });
</script>
