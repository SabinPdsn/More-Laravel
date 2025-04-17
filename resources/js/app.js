import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;
window.Echo = new Echo({
    broadcaster : 'pusher',
    key:'local',
    cluster:'mt1',
    forceTLS: false,
    wsHost:'127.0.0.1',
    wsPort:6001,
    disableStats:true,
    enabledTransports: ['ws'] // Only use WebSocket, not HTTP

});
console.log('Echo initialized:', window.Echo);


document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM loaded, attempting to connect to WebSocket...');

    window.Echo.channel('notifications')
        .listen('.user-notified', (event) => { // Match the exact event name from broadcastAs
            console.log('Notification received:', event);
            alert('Notification received: ' + event .message);
        });
});

