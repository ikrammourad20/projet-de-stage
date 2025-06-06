<div class="container">
  <h1>Ajouter un Nouveau Stagiaire</h1>

  <form
    class="edit-form"
    method="POST"
    action="{{ route('intern.store') }}"
    enctype="multipart/form-data">
    @csrf
    <div id="imageContainer">
      <div id="imagePreviewContainer">
        <label for="image" id="uploadLabel">
          <img id="imagePreview" src="" alt="Image par défaut" />
          <div class="imageOverlay"></div>
        </label>
        <div id="removeImage" title="Supprimer l'Image">
          <i class="fas fa-trash-alt"></i>
        </div>
      </div>
      <div id="uploadImageInfo">
        <label for="image" class="uploadLabel">Importer une Image</label>
        <input type="file" id="image" name="image" style="display: none" />
        <button type="button" id="uploadImageButton" class="uploadBtn">
          Uploader
        </button>
        <p class="uploadInfo">Fichier PNG ou JPG d'au moins 256 x 256 pixels</p>
      </div>
      @error('image')
      <div class="error-message">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <div class="form-row">
        <label for="firstName"><i class="fas fa-user"></i> Prénom</label>
        <input
          type="text"
          id="firstName"
          name="firstName"
          value="{{ old('firstName') }}"
        />
        @error('firstName')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-row">
        <label for="lastName"><i class="fas fa-user"></i> Nom de famille</label>
        <input
          type="text"
          id="lastName"
          name="lastName"
          value="{{ old('lastName') }}"
        />
        @error('lastName')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <label for="age"><i class="fas fa-birthday-cake"></i> Âge</label>
        <input
          type="number"
          id="age"
          name="age"
          value="{{ old('age') }}"
          min="16"
          max="50"
        />
        @error('age')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-row">
        <label for="cin"><i class="fas fa-id-card-alt"></i> CIN</label>
        <input type="text" id="cin" name="cin" value="{{ old('cin') }}" />
        @error('cin')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    </div>

    


    <div class="form-group">
      <div class="form-row">
        <label for="level"><i class="fas fa-layer-group"></i> Niveau</label>
        <input type="text" id="level" name="level" value="{{ old('level') }}" placeholder="ex : Bac+2, Master..." />
        @error('level')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-row">
          <label for="school"><i class="fas fa-graduation-cap"></i> École</label>
          <input
            type="text"
            id="school"
            name="school"
            value="{{ old('school') }}"
          />
          @error('school')
          <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
    </div>




    <div class="form-group">
      <div class="form-row">
        <label for="phone"><i class="fas fa-phone"></i> Téléphone</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" />
        @error('phone')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-row">
        <label for="address"
          ><i class="fas fa-map-marker-alt"></i> Adresse</label
        >
        <input
          type="text"
          id="address"
          name="address"
          value="{{ old('address') }}"
        />
        @error('address')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <label for="sector"><i class="fas fa-industry"></i> Secteur</label>
        <input
          type="text"
          id="sector"
          name="sector"
          value="{{ old('sector') }}"
        />
        @error('sector')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-row">
        <label for="supervisor"><i class="fas fa-chalkboard-teacher"></i> Encadrant(e)</label>
        <input type="text" id="supervisor" name="supervisor" value="{{ old('supervisor') }}" />
        @error('supervisor')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <label for="startDate"
          ><i class="fas fa-calendar-alt"></i> Date de Début</label
        >
        <input
          type="date"
          id="startDate"
          name="startDate"
          value="{{ old('startDate') }}"
        />
        @error('startDate')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-row">
        <label for="endDate"
          ><i class="fas fa-calendar-alt"></i> Date de Fin</label
        >
        <input
          type="date"
          id="endDate"
          name="endDate"
          value="{{ old('endDate') }}"
        />
        @error('endDate')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    </div>



    <div class="form-group">
          <!-- Upload CV -->
    <div id="uploadCVInfo" class="upload-section">
      <label for="cv" class="uploadLabel">Importer le CV</label>
      <input type="file" id="cv" name="cv" style="display: none" />
      <button type="button" id="uploadCVButton" class="uploadBtn">Uploader</button>
      <span id="cvFileName" class="file-name"></span>
      <p class="uploadInfo">Fichier PDF ou DOCX requis</p>
      @error('cv')
        <div class="error-message">{{ $message }}</div>
      @enderror
    </div>

    <!-- Upload CIN -->
    <div id="uploadCINInfo" class="upload-section">
      <label for="cinFile" class="uploadLabel">Importer la CIN (scannée)</label>
      <input type="file" id="cinFile" name="cinFile" style="display: none" />
      <button type="button" id="uploadCINButton" class="uploadBtn">Uploader</button>
      <span id="cinFileName" class="file-name"></span>
      <p class="uploadInfo">Fichier PDF ou Image (JPG, PNG)</p>
      @error('cinFile')
        <div class="error-message">{{ $message }}</div>
      @enderror
    </div>

    <!-- Upload Demande -->
    <div id="uploadDemandeInfo" class="upload-section">
      <label for="demande" class="uploadLabel">Importer la Demande</label>
      <input type="file" id="demande" name="demande" style="display: none" />
      <button type="button" id="uploadDemandeButton" class="uploadBtn">Uploader</button>
      <span id="demandeFileName" class="file-name"></span>
      <p class="uploadInfo">Fichier PDF ou DOCX recommandé</p>
      @error('demande')
        <div class="error-message">{{ $message }}</div>
      @enderror
    </div>

    </div>






    @if(session('success'))
    <p class="success-message">{{ session('success') }}</p>
    @endif

    <div class="buttons">
      <button type="submit" class="saveBtn">
        <i class="fas fa-save"></i> Enregistrer
      </button>
      <button type="button" class="cancelBtn">
        <i class="fas fa-times"></i> Effacer
      </button>
    </div>
  </form>

</div>
