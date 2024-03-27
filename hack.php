<?php
include("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coding Contests</title>
  <style>
    /* Basic styling for the grid view */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #2174fb;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 0 20px;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }
    .contest {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
    .contest h2 {
      margin-top: 0;
    }
  </style>
</head>
<body>
  <header>
    <h1>Coding Contests</h1>
  </header>

  <div class="container">
    <div class="grid">
      <!-- Contest 1 -->
      <div class="contest">
        <h2>Contest </h2>
        <button onclick="joinContest(1)">Create Contest</button>
      </div>
      

    </div>
  </div>

  <script>
    // JavaScript code for joining contests
    function joinContest(contestId) {
      alert("You joined Contest " + contestId);
      window.location.href = "https://www.hackerrank.com/administration/contests/create"; 
    }
  </script>
</body>
</html>
