<!DOCTYPE html>
<html>
<head>
    <title>Simple Music Player</title>
    <style>
        .music-list {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding: 20px;
        }
        .music-item {
            flex: 0 0 auto;
            width: 200px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="music.css">
</head>
<body>
<h2>Music App Dashboard</h2>

<div class="dashboard">

 <div class="profile">
 <a href="index.php"><i class="fas fa-user"></i> About Us </a>


 <!-- User profile content here -->

</div>

 <div class="songs">
 <a href="musicupload.php"><i class="fas fa-music"></i> Music </a>



 <!-- Songs content here -->

 </div>

 <div class="player">
 <a href="music.php"><i class="fas fa-play-circle"></i> List of music </a>




 <!-- Music player content here -->

 </div> 
<!-- Add more music items as needed -->

 </div>
    <div class="music-list">
        <div class="balam pichkari" id="song1">
            <img src="musics/music-images/Balam-Pichkari.jpg" alt="Balam-Pichkari" width="100%">
            <audio id="audio1" src="musics/Balam-Pichkari(PaglaSongs).mp3"></audio>
            <button onclick="togglePlayPause('song1')">Play</button>
        </div>
        <div class="gulabi-sadi" id="song2">
            <img src="musics/music-images/gulabi-sadi.jpg" alt="gulabi-sadi" width="100%">
            <audio id="audio1" src="musics/Gulabi-Sadi(PaglaSongs).mp3"></audio>
            <button onclick="togglePlayPause('song2')">Play</button>
        </div>
        <div class="gulabi-sarara" id="song3">
            <img src="musics/music-images/gulabi-sarara.jpg" alt="gulabi-sarara" width="100%">
            <audio id="audio1" src="musics/Gulabi-Sharara(PaglaSongs).mp3"></audio>
            <button onclick="togglePlayPause('song3')">Play</button>
        </div>
        <div class="" id="song4">
            <img src="musics/music-images/laal-bindi.jpg" alt="" width="100%">
            <audio id="audio1" src="musics/Laal-Bindi(PaglaSongs).mp3"></audio>
            <button onclick="togglePlayPause('song4')">Play</button>
        </div>
        <div class="tu-he-kaha" id="song5">
            <img src="musics/music-images/tu-he-kaha.jpg" alt="" width="100%">
            <audio id="audio1" src="musics/Tu-Hai-Kahan(PaglaSongs).mp3"></audio>
            <button onclick="togglePlayPause('song5')">Play</button>
        </div>
        <div class="tu-he-kaha2" id="song6">
            <img src="musics/music-images/tu-he-kaha.jpg" alt="" width="100%">
            <audio id="audio1" src="musics/Tu-Hai-Kahan(PaglaSongs).mp3"></audio>
            <button onclick="togglePlayPause('song5')">Play</button>
        </div>
        
        
        <!-- Add more songs as needed -->
    </div>

    <script>
        function togglePlayPause(songId) {
            var song = document.getElementById(songId);
            var audio = song.getElementsByTagName('audio')[0];
            var button = song.getElementsByTagName('button')[0];

            if (audio.paused) {
                audio.play();
                button.textContent = 'Pause';
            } else {
                audio.pause();
                button.textContent = 'Play';
            }
        }
    </script>
</body>
</html>

