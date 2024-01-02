<script>
    $(document).ready(function() { 
        let isExpanded = true;
        let isHoverEnabled = true;

        $('#logout').click(() => {
            $('#container').css('opacity', '1');
            $('#container').css('pointer-events', 'auto');
        });

        $('#cross').click(() => {
            $('#container').css('opacity', '0');
            $('#container').css('pointer-events', 'none');

            $('#container').removeClass('_anim');
        });
        
        $('#login').click(function() {
            if (isExpanded) {
                $(this).addClass('_expanded');
                $(this).css('background', '#4d4d4d');
                $(this).css('border', '1px solid #737373');
                
                setTimeout(() => {
                    $('#logout').css('opacity', '1');
                    $('#logout').css('pointer-events', 'auto');
                    $('#logout').addClass('_anim');
                    $('#link-pos').addClass('_anim');
                }, 250);
            } else {
                $(this).removeClass('_expanded');

                $('#logout').css('opacity', '0');
                $('#logout').css('pointer-events', 'none');
                $('#logout').removeClass('_anim');
                $('#link-pos').removeClass('_anim');
            }

            isExpanded = !isExpanded;
        });

        $('#login').mouseenter(function() {
            if (isHoverEnabled && isExpanded) {
                $(this).css('background', '#737373');
                $(this).css('border', '1px solid #999999');
            }
        });

        $('#login').mouseleave(function() {
            if (isHoverEnabled && isExpanded) {
                $(this).css('background', '#4d4d4d');
                $(this).css('border', '1px solid #737373');
            }
        });

        $('#login').one('click', () => {
            isHoverEnabled = false;
            setTimeout(() => {
                isHoverEnabled = true;
            }, 250);
        });
    });
</script>