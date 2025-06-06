
<h1>Stagiaires</h1>
<div class="interns-container">
@if($interns->isNotEmpty())
  @foreach ($interns as $intern)
  <div class="intern-card" data-id="{{ $intern->id }}" onclick="showInternDetails({{ $intern->id }})">
    <div class="image-container">
      <img
        class="intern-image-card"
        src="{{ asset($intern->image) }}"
        alt="Image du stagiaire"
      />
    </div>
    <div class="details">
      <h3 class="name">
      @php
        $fullName = $intern->firstName . ' ' . $intern->lastName;
        $shortName = strlen($fullName) > 8 ? substr($fullName, 0, 8) . '.' : $fullName;
        echo $shortName;
      @endphp
      </h3>
      <p class="sector">
        @php
          $sector = $intern->sector;
          $shortSec = strlen($sector) > 10 ? substr($sector, 0, 10) . '.' : $sector;
          echo $shortSec;
        @endphp
      </p>
      <span>{{ $intern->id }}</span>
    </div>
  </div>

  <div id="overlay-container-{{ $intern->id }}" class="overlay-container">
    <div class="overlay-card-info">
      <div class="overlay-card">
        <div class="close-button" onclick="hideInternDetails({{ $intern->id }})">×</div>
        <div class="image-container">
          <img class="overlay-image" src="{{ $intern->image }}" alt="Image du stagiaire" />
        </div>
        <div class="details">
          <h3 class="overlay-name">{{ $intern->firstName }} {{ $intern->lastName }}</h3>
          <p class="overlay-sector">{{ $intern->sector }}</p>

          <ul class="overlay-info">
            <li>  
              <strong>ID :</strong>
              <span class="overlay-id">{{ $intern->id }}</span>
            </li>
            <li>
              <strong>Prénom :</strong>
              <span class="overlay-firstname">{{ $intern->firstName }}</span>
            </li>
            <li>
              <strong>Nom :</strong>
              <span class="overlay-lastname">{{ $intern->lastName }}</span>
            </li>
            <li>
              <strong>Âge :</strong>
              <span class="overlay-age">{{ $intern->age }}</span>
            </li>
            <li>
              <strong>CIN :</strong>
              <span class="overlay-cin">{{ $intern->cin }}</span>
            </li>
            <li>
              <strong>Niveau:</strong>
              <span class="overlay-level">{{ $intern->level }}</span>
            </li>
            <li>
              <strong>Téléphone :</strong>
              <span class="overlay-phone">{{ $intern->phone }}</span>
            </li>
            <li>
              <strong>Adresse :</strong>
              <span class="overlay-address">{{ $intern->address }}</span>
            </li>
            <li>
              <strong>École :</strong>
              <span class="overlay-school">{{ $intern->school }}</span>
            </li>
            <li>
              <strong>Secteur :</strong>
              <span class="overlay-sector">{{ $intern->sector }}</span>
            </li>
            <li>
              <strong>Encadrant :</strong>
              <span class="overlay-supervisor">{{ $intern->supervisor }}</span>
            </li>
            <li>
              <strong>Date de début :</strong>
              <span class="overlay-startdate">{{ $intern->startDate }}</span>
            </li>
            <li>
              <strong>Date de fin :</strong>
              <span class="overlay-enddate">{{ $intern->endDate }}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@else
<p class="text-explanation">Aucun stagiaire !</p>
@endif
</div>