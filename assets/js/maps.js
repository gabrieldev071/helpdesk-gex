// Objeto que vem da biblioteca

var map = L.map('mapid').setView([-7.22017, -35.88238], 13);
console.log(map);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var marker = L.marker([-7.22017, -35.88238]).addTo(map)
    .bindPopup('Nossa localização')
    .openPopup();

// autorização no navegador
