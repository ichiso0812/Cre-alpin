// le conteneur pour l'injection des informations
var displayOptions = {
    injectTo: "content"
  };
  
  /**
   * Récupère et affiche les informations d'un point dans une zone
   * @param {Int} idMarker identifiant d'un point/marker
   */
  function displayInformationFromMarker(idMarker) {
    var hasPoints = typeof point_list !== "undefined" && point_list.length >= 1;
  
    if (hasPoints) {
      // récupération des infos du point avec cet ID, si il existe
      var points = point_list.filter(point => point.id === idMarker);
      var hasPoint = points.length >= 1;
  
      if (hasPoint) {
        // mon premier point trouvé !
        var point = points[0];
        document.getElementById(displayOptions.injectTo).innerHTML = point.content;
      }
    }
  }
  