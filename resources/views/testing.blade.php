
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>AUTOCOMPLETE + GEOCODING</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/tomickigrzegorz/autocomplete@1.8.6/dist/css/autocomplete.min.css"
    />
    <script src="https://cdn.jsdelivr.net/gh/tomickigrzegorz/autocomplete@1.8.6/dist/js/autocomplete.min.js"></script>
    <script src="./github-corner.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato&display=swap);

:root {
  --icon-place: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cpath d='M16 0C10.477 0 6 4.477 6 10c0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zm0 16a6 6 0 110-12 6 6 0 010 12z'/%3E%3C/svg%3E");
}

*,
:after,
:before {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

html,
#map {
  height: 100%;
}

body,
html,
#map {
  margin: 0;
  padding: 0;
}

#map {
  margin: 0 -15px;
}

body {
  display: flex;
  flex-direction: column;
  height: 100%;
  font-family: Lato, sans-serif;
  min-height: 100%;
  background: #ebebeb;
  padding: 0 15px;
}

h1 {
  letter-spacing: 1px;
}

.container {
  width: 100%;
  max-width: 400px;
  margin: 20px auto;
}

.auto-search-wrapper {
  margin: 10px auto;
}

    </style>
  </head>

  <body>
    <!-- search container -->
    <div class="container">
      <div class="row">
        <h4>AUTOCOMPLETE + GEOCODING</h4>
        <div class="auto-search-wrapper loupe">
          <input
            type="text"
            autocomplete="off"
            id="search"
            class="full-width"
            placeholder="enter the city name"
          />
        </div>
      </div>
    </div>

    <!-- map -->
    <div id="map"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
