/* ============================================================
 * Notifications
 * Triggers notifications using Pages Notification plugin.
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */
(function($) {

    'use strict';

    $(document).ready(function() {

        $('#idNotification').click(function(e) {
            
            reloadNotification('Flip' , 'Hola' , 'top-right','warning');
            
        });
        

    });


    function reloadNotification(style,message,type,position) {

       if (style == 'Bar') {
                // Show an bar notification attached to top and bottom of the screen
                $('body').pgNotification({
                    style: 'bar',
                    message: message,
                    position: position,
                    timeout: 0,
                    type: type
                }).show();
            } else if (style == 'Flip') {
                // Show a flipping notification animated
                // using CSS3 transforms and animations
                $('body').pgNotification({
                    style: 'flip',
                    message: message,
                    position: position,
                    timeout: 0,
                    type: type
                }).show();
            } else if (style == 'Circle') {
                // Slide-in a circle notification from sides
                // You have to provide the HTML for thumbnail 
                $('body').pgNotification({
                    style: 'circle',
                    title: 'John Doe',
                    message: message,
                    position: position,
                    timeout: 0,
                    type: type,
                    thumbnail: '<img width="40" height="40" style="display: inline-block;" src="assets/img/profiles/avatar2x.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">'
                }).show();
            } else if (style == 'Alert') {
                // Simple notification having bootstrap's .alert class
                $('body').pgNotification({
                    style: 'simple',
                    message: message,
                    position: position,
                    timeout: 0,
                    type: type
                }).show();
            } else {
                return;
            }

            e.preventDefault();

    }    


    



})(window.jQuery);



