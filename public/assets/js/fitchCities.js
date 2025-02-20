    document.addEventListener("DOMContentLoaded", async function () {
        const locationSelect = document.getElementById("location");
        const citiesUrl = "assets/js/cities.json";

        try {
            const response = await fetch(citiesUrl);
            if (!response.ok) throw new Error("Failed to fetch cities");

            const cities = await response.json();

            locationSelect.innerHTML = '<option value="" disabled selected>Choisissez une ville</option>';

            cities.forEach(cityData => {
                const option = document.createElement("option");
                option.value = cityData.city;
                option.textContent = cityData.city;
                locationSelect.appendChild(option);
            });

        } catch (error) {
            console.error("Error fetching cities:", error);
            locationSelect.innerHTML = '<option value="" disabled selected>Erreur de chargement</option>';
        }
    });
