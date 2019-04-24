import mapboxgl from "mapbox-gl";

if (document.querySelector('#map')) {

    let coorLat = $("[name='coorLat']").val();
    let coorlLon = $("[name='coorLon']").val();
    let iconName = $("[name='iconName']").val();

    mapboxgl.accessToken = 'pk.eyJ1IjoibWFwLWJveC1kZXYiLCJhIjoiY2p0bzNzbDR2MnJhZTQ5bXg5NGpzdHp3OCJ9.kojuOFOVnCAGX_KYUlr0xw';
    let map;
    if(coorLat && coorlLon) {
        map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/map-box-dev/cjto3zr0k0j7c1fmmmtzsgl0i',
            center: [coorLat, coorlLon],
            zoom: 12.7
        });
    } else {
        map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/map-box-dev/cjto3zr0k0j7c1fmmmtzsgl0i',
            center: [35.091832, 47.824176],
            zoom: 12.7
        });
    }



    map.on('style.load', function (e) {
        map.addSource('markers', {
            "type": "geojson",
            "data": {
                "type": "FeatureCollection",
                "features": [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [coorLat, coorlLon]
                    },
                    "properties": {
                        "marker-symbol": `${iconName}`
                    }
                }
                ]
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

}