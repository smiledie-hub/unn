// FIXES
import "./fixes"

import Router from './utils/Router';
import common from './routes/common';
import home from './routes/home';
import map from '@images/map.png';

/** Populate Router instance with DOM routes */
const routes = new Router({
    common,
    home,
})

window.addEventListener("DOMContentLoaded", () => {
    routes.loadEvents()


    ymaps.ready(function () {
        const myMap = new ymaps.Map('map', {
                center: [56.820282, 60.647613],
                zoom: 18,
                type: 'yandex#map',
                controls: []
            }, {
            }),

            myPlacemark = new ymaps.Placemark([56.820282, 60.649613], {
                hintContent: '620100, Екатеринбург, Сибирский тракт, дом 12, строение 4, помещение 8'
            }, {
                iconLayout: 'default#image',
                iconImageHref: map,
                iconImageSize: [62, 55],
                iconImageOffset: [-31, -26]
            });

        myMap.geoObjects
            .add(myPlacemark)
    });
})