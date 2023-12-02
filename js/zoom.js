const zoomItems = document.querySelectorAll('.paragraph_1');
const zoomP2 = document.querySelectorAll('.paragraph_2');
const zoomHeading3 = document.querySelectorAll('.heading_3');
const zoomHeading2 = document.querySelectorAll('.heading_2');
const zoomPadsMS = document.querySelectorAll('.microchips');
const zoomPadsSS = document.querySelectorAll('.shtukovins');

if (zoomPadsMS.length > 0) {
    window.addEventListener('resize', zoomTextOnScaling);

    function zoomTextOnScaling() {
        var currentZoom = Math.round(window.devicePixelRatio * 100);
        
        for (let index = 0; index < zoomPadsMS.length; index++) {
            const zoomItemP1 = zoomItems[index];
            const zoomItemP2 = zoomP2[index];
            const zoomItemMS = zoomPadsMS[index];
            const zoomItemSS = zoomPadsSS[index];
            const zoomItemH3 = zoomHeading3[index];
            const zoomItemH2 = zoomHeading2[index];

            // Микросхемы
            if (currentZoom >= 500) {
                zoomItemMS.classList.add('_zoomPadd');
            } else {
                // setTimeout(removeZoomPaddMicrochips)
                zoomItemMS.classList.remove('_zoomPadd');
                zoomItemMS.classList.remove('_active');
                zoomItemMS.classList.add('_newActive');
            }

            // Штуковины
            if (currentZoom >= 500) {
                zoomItemSS.classList.add('_zoomPadd');
            } else {
                // setTimeout(removeZoomPaddShtukovins)
                zoomItemSS.classList.remove('_zoomPadd');
                zoomItemSS.classList.remove('_active');
                zoomItemSS.classList.add('_newActive');
            }

            // Параграф микросхем
            if (currentZoom >= 500) {
                zoomItemP1.classList.add('_zoom5');
            } else {
                zoomItemP1.classList.remove('_zoom5');
                zoomItemP1.classList.remove('_active');
                zoomItemP1.classList.add('_newActive');
            }

            // Параграф штуковин
            if (currentZoom >= 500) {
                zoomItemP2.classList.add('_zoom5');
            } else {
                zoomItemP2.classList.remove('_zoom5');
                zoomItemP2.classList.remove('_active');
                zoomItemP2.classList.add('_newActive');
            }

            // Заголовок штуковин
            if (currentZoom >= 500) {
                zoomItemH3.classList.add('_zoom5h');
            } else {
                zoomItemH3.classList.remove('_zoom5h')
                zoomItemH3.classList.remove('_active');
                zoomItemH3.classList.add('_newActive');
            }

            // Заголовок микросхем
            if (currentZoom === 500) {
                zoomItemH2.classList.add('_zoom5h');
            } else {
                zoomItemH2.classList.remove('_zoom5h')
                zoomItemH2.classList.remove('_active');
                zoomItemH2.classList.add('_newActive');
            }
        }
    }
}
