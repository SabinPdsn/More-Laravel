<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Notifications</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
</head>
<body>
    <h1>Real-Time Notifications</h1>
    <div id="notification">
        <!-- Notifications will appear here -->
    </div>

    <script>
        // Enable Pusher logging for debugging during development
        // Pusher.logToConsole = true;

        // Initialize Pusher with your app key and cluster
        const pusher = new Pusher('Replace with your Pusher App Key', { // Replace with your Pusher App Key
            cluster: 'ap2', // Replace with your Pusher cluster
            encrypted: true
        });

        // Subscribe to the channel
       // Replace with your channel name

        // Listen for the 'user-notified' event
        pusher.subscribe('notifications').bind('user-notified', function(data) {
            console.log('Received event data:', data); // Log the full data object to console
            // Check if the 'message' property exists and display it, or show an error
            const message = data?.message || 'Message property is missing in the event data.';
            document.getElementById('notification').innerHTML += `<p>${message}</p>`;
        });
    </script>
</body>
</html>
