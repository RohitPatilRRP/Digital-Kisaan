 function initAutocomplete() {
    autocomplete = new google.maps.places.Autocomplete(
     (document.getElementById('location')),
        {types: ['geocode']});
    autocomplete.addListener('place_changed', fillInAddress);
  }

  function fillInAddress() {
    var place = autocomplete.getPlace();

  }