const zoomItems = document.querySelectorAll('.paragraph_1');
const zoomP2 = document.querySelectorAll('.paragraph_2');
const zoomHeading3 = document.querySelectorAll('.heading_3');
const zoomHeading2 = document.querySelectorAll('.heading_2');
const zoomPadsMS = document.querySelectorAll('.microchips');
const zoomPadsSS = document.querySelectorAll('.shtukovins');

if (zoomItems.length > 0) {
    window.addEventListener('resize', zoomTextOnScaling);

    function zoomTextOnScaling() {
        var currentZoom = Math.round(window.devicePixelRatio * 100);

        // меняем размер шрифта в блоке "микросхемы"
        for (let index = 0; index < zoomItems.length; index++) {
            const zoomItem = zoomItems[index];
            if (currentZoom === 400) {
                zoomItem.classList.add('_zoom4');
            } else {
                zoomItem.classList.remove('_zoom4')
            }
            if (currentZoom === 500) {
                zoomItem.classList.add('_zoom5');
            } else {
                zoomItem.classList.remove('_zoom5');
            }
            if (currentZoom === 300) {
                zoomItem.classList.add('_zoom3')
            } else {
                zoomItem.classList.remove('_zoom3')
            }
        }

        // меняем размер шрифта в блоке "штуковины"
        for (let index = 0; index < zoomP2.length; index++) {
            const zoomItem = zoomP2[index];
            if (currentZoom === 400) {
                zoomItem.classList.add('_zoom4');
            } else {
                zoomItem.classList.remove('_zoom4')
            }
            if (currentZoom === 500) {
                zoomItem.classList.add('_zoom5');
            } else {
                zoomItem.classList.remove('_zoom5')
            }
            if (currentZoom === 300) {
                zoomItem.classList.add('_zoom3')
            } else {
                zoomItem.classList.remove('_zoom3')
            }
        }
        
        // меняем размер шрифта в блоке штуковины и микросхемы 300
        // for (let index = 0; index < zoomItems.length; index++) {
        //     const zoomItem = zoomItems[index];
        //     if (currentZoom === 300) {
        //         zoomItem.classList.add('_zoom3')
        //     } else {
        //         zoomItem.classList.remove('_zoom3')
        //     }
        // }

        // меняем размер заголовка микросхем
        for (let index = 0; index < zoomHeading2.length; index++) {
            const zoomItem = zoomHeading2[index];
            if (currentZoom === 400) {
                zoomItem.classList.add('_zoom4h');
            } else {
                zoomItem.classList.remove('_zoom4h')
            }
            if (currentZoom === 500) {
                zoomItem.classList.add('_zoom5h');
            } else {
                zoomItem.classList.remove('_zoom5h')
            }
            if (currentZoom === 300) {
                zoomItem.classList.add('_zoom3h')
            } else {
                zoomItem.classList.remove('_zoom3h')
            }
        }

        // меняем размер заголовка штуковин
        for (let index = 0; index < zoomHeading3.length; index++) {
            const zoomItem = zoomHeading3[index];
            if (currentZoom === 400) {
                zoomItem.classList.add('_zoom4h');
            } else {
                zoomItem.classList.remove('_zoom4h')
            }
            if (currentZoom === 500) {
                zoomItem.classList.add('_zoom5h');
            } else {
                zoomItem.classList.remove('_zoom5h')
            }
            if (currentZoom === 300) {
                zoomItem.classList.add('_zoom3h')
            } else {
                zoomItem.classList.remove('_zoom3h')
            }
        }

        
        // меняем padding микросхем
        for (let index = 0; index < zoomPadsMS.length; index++) {
            const zoomItem = zoomPadsMS[index];
            if (currentZoom >= 400) {
                zoomItem.classList.add('_zoomPadd');
            } else {
                zoomItem.classList.remove('_zoomPadd');
            }
            // меняем padding микросхем 300
            if (currentZoom === 300) {
                zoomItem.classList.add('_zoomPadd3');
            } else {
                zoomItem.classList.remove('_zoomPadd3');
            }
            // if (currentZoom === 300) {
            //     zoomItem.classList.add('_zoom3')
            // } else {
            //     zoomItem.classList.remove('_zoom3')
            // }
        }

        // меняем padding микросхем 300
        // for (let index = 0; index < zoomPadsMS.length; index++) {
        //     const zoomItem = zoomPadsMS[index];
        //     if (currentZoom === 300) {
        //         zoomItem.classList.add('_zoomPadd3');
        //     } else {
        //         zoomItem.classList.remove('_zoomPadd3');
        //     }
        // }

        // меняем padding штуковин
        for (let index = 0; index < zoomPadsSS.length; index++) {
            const zoomItem = zoomPadsSS[index];
            if (currentZoom >= 400) {
                zoomItem.classList.add('_zoomPadd');
            } else {
                zoomItem.classList.remove('_zoomPadd');
            }
            // меняем padding штуковин 300
            if (currentZoom === 300) {
                zoomItem.classList.add('_zoomPadd3');
            } else {
                zoomItem.classList.remove('_zoomPadd3');
            }
            // if (currentZoom === 300) {
            //     zoomItem.classList.add('_zoom3')
            // } else {
            //     zoomItem.classList.remove('_zoom3')
            // }
        }

        // меняем padding штуковин 300
        // for (let index = 0; index < zoomPadsSS.length; index++) {
        //     const zoomItem = zoomPadsSS[index];
        //     if (currentZoom === 300) {
        //         zoomItem.classList.add('_zoomPadd3');
        //     } else {
        //         zoomItem.classList.remove('_zoomPadd3');
        //     }
        // }
    }
}
