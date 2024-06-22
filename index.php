
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Miku Channel</title>
  <meta content="@tcpfox | @Iris_CNC" property="og:title" />
  <meta content="Welcome to!" property="og:description" />
  <link rel="shortcut icon" href="./assets/img.png" type="image/x-icon">
  <link rel="stylesheet" href="./styles.css" />
  <style>
    .key-box {
      display: inline-block;
      border: 1px solid #ccc;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
      position: relative;
    }
  </style>
</head>

<body>
  <div class="circle1"></div>
  <div class="circle2"></div>

  <div class="wrapper">
    <div class="card-wrapper">
      <div>
        <img src="./assets/img.png" alt="user" />
      </div>
      <div class="user-name">
        <h2 class="bold">Iris CNC</h2>
      </div>
      <div class="designation">
        <h3>#L4/L7 Powerful</h3>
      </div>
      <div class="bottom-group">
        <button onclick="openModal()" class="btn-share btn-card">
          <i class="fa fa-key"></i>
          <div>Code Here</div>
        </button>

        <button target="_blank" onclick="window.location.href = 'https://t.me/Iris_CNC';" class="btn-follow btn-card">  Telegram  <i class="fa-regular fa-user"></i></button>
      </div>
      <figure>
        <audio controls autoplay loop>
          <source src="music.mp3" type="audio/mpeg">
        </audio>
      </figure>
    </div>
  </div>

  <!-- Modal Component -->
  <div class="modal">
    <div class="modal-header">
      <h1>Your Code</h1>
      <div>
        <i onclick="closeModal()" class="fa-solid fa-xmark close"></i>
      </div>
    </div>
    <div class="modal-content">
      <div class="buttons">
        <h3 id="copiedKey">-> 
          <div class="key-box" id="keyBox">
            <span id="keyValue"></span>
            <i id="copyButton" class="fa-solid fa-copy" style="cursor: pointer; margin-left: 10px;"></i>
          </div>
        </h3>
      </div>
    </div>
  </div>

  <script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const keyParam = urlParams.get('key');

    const copiedKey = document.getElementById("copiedKey");
    const keyValueSpan = document.getElementById("keyValue");
    const copyButton = document.getElementById("copyButton");

    if (keyParam) {
      keyValueSpan.innerText = keyParam;
      copiedKey.style.display = "block";
    } else {
      keyValueSpan.innerText = "Hãy là 1 người văn minh và hãy vượt Link đi :))";
      copiedKey.style.display = "block";
    }

    copyButton.addEventListener("click", () => {
      const key = keyValueSpan.innerText;
      navigator.clipboard.writeText(key).then(() => {
        alert("Đã sao chép Code rồi đó!");
      }).catch(err => {
        console.error('Failed to copy: ', err);
      });
    });
  </script>

  <!-- Overlay -->
  <div class="overlay" onclick="closeModal()"></div>

  <script src="https://kit.fontawesome.com/58a810656e.js" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>
