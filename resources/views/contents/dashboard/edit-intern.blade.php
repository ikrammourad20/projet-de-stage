<div class="container">
  <h1>Modifier un Stagiaire</h1>

  <div class="input-container">
    <input
      type="text"
      id="searchInput"
      placeholder="Filtrer les stagiaires..."
    />
    <i class="fas fa-filter search-icon"></i>
  </div>

  <div class="intern-list">
    @foreach ($interns as $intern)
      <div class="intern-item" style="cursor: pointer" data-id="{{ $intern->id }}">
        <div class="intern-card">
          <div class="image-card-container">
            <img src="{{ asset($intern->image) }}" alt="Stagiaire {{ $intern->id }}">
          </div>
          <div class="intern-details">
            <span class="intern-id">{{ $intern->id }}</span>
            <span class="intern-name">{{ $intern->firstName }} {{ $intern->lastName }}</span>
            <span class="hidden-info" style="display: none;">
              <span class="intern-image">{{ $intern->image }}</span>
              <span class="intern-firstname">{{ $intern->firstName }}</span>
              <span class="intern-lastname">{{ $intern->lastName }}</span>
              <span class="intern-age">{{ $intern->age }}</span>
              <span class="intern-cin">{{ $intern->cin }}</span>
              <span class="intern-level">{{ $intern->level }}</span>
              <span class="intern-phone">{{ $intern->phone }}</span>
              <span class="intern-address">{{ $intern->address }}</span>
              <span class="intern-school">{{ $intern->school }}</span>
              <span class="intern-sector">{{ $intern->sector }}</span>
              <span class="intern-supervisor">{{ $intern->supervisor }}</span>
              <span class="intern-start-date">{{ $intern->startDate }}</span>
              <span class="intern-end-date">{{ $intern->endDate }}</span>
              <span class="intern-cv">{{ $intern->cv }}</span>
              <span class="intern-cinFile">{{ $intern->cinFile }}</span>
              <span class="intern-demande">{{ $intern->demande }}</span>
            </span>
          </div>
        </div>
      </div>
    @endforeach
  </div>

    @if ($interns->isEmpty())
        <p class="text-explanation">Aucun Stagiaire !</p>
    @else

        <p id="nothing-found" class="text-explanation" style="display: none">
            Rien trouvé !
        </p>
        
        <p id="textExplanation" class="text-explanation">
          Selectionnez un stagiaire à modifier.
        </p>
    @endif

  <h2 class="edit-form-h2" style="display: none">
    Modifier le Stagiaire Sélectionné
  </h2>

  @if(isset($intern))
    <form
      id="internForm"
      class="edit-form"
      style="display: none"
      method="POST"
      action="{{ route('interns.update', ['id' => $intern->id]) }}"
      enctype="multipart/form-data"
    >
      @csrf
      @method('PUT')

      <div id="imageContainer">
        <div id="imagePreviewContainer">
          <label for="image" id="uploadLabel">
            <img
              id="imagePreview"
              src="{{ asset($intern->image) }}"
              alt="Image par défaut"
            />
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
            value="{{ $intern->firstName }}"
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
            value="{{ $intern->lastName }}"
          />
          @error('lastName')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <label for="age"><i class="fas fa-birthday-cake"></i> Âge</label>
          <input type="number" id="age" name="age" value="{{ $intern->age }}" />
          @error('age')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-row">
          <label for="address"><i class="fas fa-id-card-alt"></i> CIN</label>
          <input type="text" id="cin" name="cin" value="{{ $intern->cin }}" />
          @error('cin')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <label for="phone"><i class="fas fa-phone"></i> Téléphone</label>
          <input
            type="text"
            id="phone"
            name="phone"
            value="{{ $intern->phone }}"
          />
          @error('phone')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-row">
          <label for="address"><i class="fas fa-map-marker-alt"></i> Adresse</label>
          <input
            type="text"
            id="address"
            name="address"
            value="{{ $intern->address }}"
          />
          @error('address')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="form-group">

      <div class="form-row">
        <label for="level"><i class="fas fa-layer-group"></i> Niveau</label>
        <input type="text" 
          id="level" 
          name="level"
          value="{{ old('level') }}"
         />
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
            value="{{ $intern->school }}"
          />
          @error('school')
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
              value="{{ $intern->sector }}"
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
          <label for="startDate"><i class="fas fa-calendar-alt"></i> Date de début</label>
          <input
            type="date"
            id="startDate"
            name="startDate"
            value="{{ $intern->startDate }}"
          />
          @error('startDate')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-row">
          <label for="endDate"><i class="fas fa-calendar-alt"></i> Date de fin</label>
          <input
            type="date"
            id="endDate"
            name="endDate"
            value="{{ $intern->endDate }}"
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
  @endif
</div>
