let isFahrenheit = false;

function toggleUnit() {
    isFahrenheit = !isFahrenheit;
    getWeather();
}

async function getWeather() {
    const city = document.getElementById('city-input').value;
    const apiKey = '8e8c799afc604fb6a31110653243009'; // Replace with your OpenWeatherMap API key
    const unit = isFahrenheit ? 'imperial' : 'metric';
    const url = `http://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${city}&units=${unit}`;

    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error('City not found');
        }
        const data = await response.json();
        displayWeather(data);
    } catch (error) {
        document.getElementById('weather').innerHTML = `<p>${error.message}</p>`;
    }
}

function displayWeather(data) {
    const weatherDiv = document.getElementById('weather');
    const MoreInfo = document.getElementById('more-info');
    const tempUnit = isFahrenheit ? '°F' : '°C';
    const temperature = isFahrenheit ? data.current.temp_f : data.current.temp_c;
    const weatherHTML = `
        <h2>${data.location.name}</h2>
        <p>Temperature: ${temperature}${tempUnit}</p>
        <p>Condition: ${data.current.condition.text}</p>
        <img src="${data.current.condition.icon}" alt="${data.current.condition.text}">
    `;
    const moreInfoHTML = `
        <p>Wind: ${data.current.wind_kph} km/h</p>
        <p>Humidity: ${data.current.humidity}%</p>
    `;
    weatherDiv.innerHTML = weatherHTML;
    MoreInfo.innerHTML = moreInfoHTML;
}