import mapboxgl from "mapbox-gl";

mapboxgl.accessToken = 'pk.eyJ1IjoibWFrczExMTEyMjIyIiwiYSI6ImNqc29ueHk3cjBvdG40NHBkeGNwbjF4ZmsifQ.lpgDwJ4Ha50KcbkDTjcKWA';
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/maks11112222/cjsos6tda0ugc1fp88fyhrxij',
center: [35.090,47.818],
zoom: 12.4
});


  map.on('style.load', function (e) {
    map.addSource('markers', {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [35.092,47.825]
                },
                "properties": {
                    "title": "",
                    "marker-symbol": "tower"
                }
            }]
        }
    });

    map.addLayer({
        "id": "markers",
        "source": "markers",
        "type": "symbol",
        "layout": {
            "icon-image": "{marker-symbol}",
            "text-field": "{title}",
            "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
            "text-offset": [0, 0.6],
            "text-anchor": "top"
        }
    });
});

