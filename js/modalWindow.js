$(document).ready(function() { 

    let isExpanded = true;
    let isHoverEnabled = true;

    $('#logout').click(() => {
        opacityPointerEventsOn('#container');
    });

    $('#cross').click(() => {
        opacityPointerEventsOff('#container');
        $('#container').removeClass('_anim');
    });

    $('.dark').click(() => {
        opacityPointerEventsOff('#container');
        $('#container').removeClass('_anim');
    });

    $('.accept').click((event) => {
        event.stopPropagation();
    })
    
    $('#login').click(function() {
        if (isExpanded) {
            $(this).addClass('_expanded')
                .css({
                    'background': '#4d4d4d',
                    'border': '1px solid #737373'
                });
            
            setTimeout(() => {
                opacityPointerEventsOn('#logout');
                $('#logout, #link-pos').addClass('_anim');
            }, 250);
        } else {
            $(this).removeClass('_expanded');

            opacityPointerEventsOff('#logout');
            $('#logout, #link-pos').removeClass('_anim');
        }

        isExpanded = !isExpanded;
    });

    $('#login').mouseenter(function() {
        if (isHoverEnabled && isExpanded) {
            $(this).css({
                'background': '#737373',
                'border': '1px solid #999999'
            });
        }
    });

    $('#login').mouseleave(function() {
        if (isHoverEnabled && isExpanded) {
            $(this).css({
                'background': '#4d4d4d',
                'border': '1px solid #737373'
            });
        }
    });

    $('#login').one('click', () => {
        isHoverEnabled = false;
        setTimeout(() => {
            isHoverEnabled = true;
        }, 250);
    });
    
    document.addEventListener('keydown', (event) => {
        let click = event.key
        if (click === 'Escape') {
            opacityPointerEventsOff('#container');
            $('#container').removeClass('_anim');
        }
    })

    function opacityPointerEventsOn(selector) {
        $(selector).css({
            'opacity': '1',
            'pointer-events': 'auto'
        });
    }

    function opacityPointerEventsOff(selector) {
        $(selector).css({
            'opacity': '0',
            'pointer-events': 'none'
        });
    }

});