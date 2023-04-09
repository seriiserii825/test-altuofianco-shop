export default function streetMap() {

    let container = L.DomUtil.get('mymap');
    if(container != null){
        container._leaflet_id = null;
    }
	let mymap = L.map('mymap').setView(
		[45.094462053341054, 7.691014727194472],
		16
	);
	let myIcon = L.icon({
		iconUrl: '/wp-content/themes/bs-micci-giovani/assets/i/static/map-icon.png',
		iconSize: [38, 38],
		iconAnchor: [38, 38],
		shadowSize: [68, 95],
		shadowAnchor: [22, 94]
	});

	let marker = L.marker([45.094462053341054, 7.691014727194472], {icon: myIcon}).addTo(mymap);

  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 24,
    attribution:
      '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);
}
