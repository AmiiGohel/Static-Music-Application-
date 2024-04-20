<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Music Streaming App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            animation: slide 15s infinite;
        }
        @keyframes slide{
    0%{ background-image: url('images/image7.jpg') ;}
    22%{ background-image: url('images/image8.jpg') ;}
    44%{ background-image: url('images/image9.jpg') ;}
    66%{ background-image: url('images/image14.jpg') ;}
    88%{ background-image: url('images/image15.jpg') ;}
    100%{ background-image: url('images/image13.jpg') ;}
}
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            text-decoration: underline;
        }
        .content-section {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
        }
        .content-section h2 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
        }
        .content-section p,
        .content-section ul {
            font-weight: bold;
        }
        .content-section ul {
            list-style: none;
            padding: 0;
        }
        .content-section li {
            background-color: rgba(0, 0, 0, 0.05);
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>About Our Music Streaming App</h1>
        </div>
        <div class="content-section">
            <p>Our Music Streaming App is a platform that allows you to stream and enjoy your favorite music anytime, anywhere. With a vast library of songs from various genres and eras, we aim to provide a seamless and enjoyable music listening experience for all music lovers.</p>
        </div>
        <div class="content-section">
            <h2>Features</h2>
            <ul>
                <li>Stream unlimited music</li>
                <li>Create and share your own playlists</li>
                <li>Discover new music through our curated playlists</li>
                <li>High-quality audio streaming</li>
            </ul>
        </div>
        <div class="content-section">
            <h2>The Team</h2>
            <p>Our team is composed of passionate individuals who are dedicated to bringing you the best music streaming experience. We are constantly working on improving our app and adding new features to enhance your music listening experience.</p>
        </div>
    </div>
</body>
</html>
