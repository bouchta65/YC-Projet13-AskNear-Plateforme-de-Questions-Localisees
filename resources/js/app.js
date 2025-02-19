
// Moroccan cities data with coordinates
const moroccanCities = [
    { name: "Casablanca", lat: 33.5731, lon: -7.5898 },
    { name: "Rabat", lat: 34.0209, lon: -6.8416 },
    { name: "Fès", lat: 34.0333, lon: -5.0000 },
    { name: "Marrakech", lat: 31.6295, lon: -7.9811 },
    { name: "Agadir", lat: 30.4278, lon: -9.5981 },
    { name: "Tanger", lat: 35.7595, lon: -5.8340 },
    { name: "Meknès", lat: 33.8935, lon: -5.5547 },
    { name: "Oujda", lat: 34.6867, lon: -1.9114 },
    { name: "Kénitra", lat: 34.2610, lon: -6.5802 },
    { name: "Tétouan", lat: 35.5789, lon: -5.3689 }
];

// Function to calculate distance between two points
function getDistance(lat1, lon1, lat2, lon2) {
    const R = 6371; // Earth's radius in km
    const dLat = (lat2 - lat1) * Math.PI / 180;
    const dLon = (lon2 - lon1) * Math.PI / 180;
    const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
              Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) * 
              Math.sin(dLon/2) * Math.sin(dLon/2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
    return R * c;
}

// Function to find nearest city
function findNearestCity(userLat, userLon) {
    let nearestCity = moroccanCities[0];
    let shortestDistance = getDistance(userLat, userLon, moroccanCities[0].lat, moroccanCities[0].lon);

    moroccanCities.forEach(city => {
        const distance = getDistance(userLat, userLon, city.lat, city.lon);
        if (distance < shortestDistance) {
            shortestDistance = distance;
            nearestCity = city;
        }
    });

    return nearestCity;
}

// Populate city selects
function populateCitySelects(defaultCity = '') {
    const citySelectors = ['cityFilter', 'formCitySelect'];
    
    citySelectors.forEach(selectorId => {
        const select = document.getElementById(selectorId);
        if (select) {
            select.innerHTML = '<option value="">Sélectionner une ville</option>';
            moroccanCities.forEach(city => {
                const option = document.createElement('option');
                option.value = city.name.toLowerCase();
                option.textContent = city.name;
                if (city.name === defaultCity) {
                    option.selected = true;
                }
                select.appendChild(option);
            });
        }
    });
}

// Get user location and set default city
async function getUserLocation() {
    try {
        const position = await new Promise((resolve, reject) => {
            navigator.geolocation.getCurrentPosition(resolve, reject);
        });

        const { latitude, longitude } = position.coords;
        const nearestCity = findNearestCity(latitude, longitude);
        populateCitySelects(nearestCity.name);
    } catch (error) {
        console.log('Location access denied or error:', error);
        populateCitySelects();
    }
}

// Modal functions
function openModal() {
    document.getElementById('questionModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('questionModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Form submission
document.getElementById('questionForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(e.target);
    
    // Create question object
    const newQuestion = {
        title: formData.get('title'),
        content: formData.get('content'),
        city: formData.get('city'),
        category: formData.get('category'),
        timestamp: new Date().toISOString()
    };

    // Here you would typically send this to your backend
    console.log('New question:', newQuestion);
    
    // Clear form and close modal
    e.target.reset();
    closeModal();

    // Show success message
    alert('Votre question a été publiée avec succès!');
});

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    feather.replace();
    getUserLocation();
});
