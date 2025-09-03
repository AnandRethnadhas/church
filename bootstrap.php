<html>
<head>
    <title>SM CSI Church</title>
    <link rel="stylesheet" type="text/css" href="styles/indexstyle.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark container mt-5">
        <p class="text-primary">Primary colored text.</p>
<p class="text-success">Success colored text.</p>
<p class="text-danger">Danger colored text.</p>
<p class="text-warning">Warning colored text.</p>
<p class="text-info">Info colored text.</p>
<p class="text-muted">Muted text (lighter gray).</p>


<p class="text-start">Left aligned text.</p>    
<p class="text-center">Center aligned text.</p>
<p class="text-end">Right aligned text.</p>

<p class="text-uppercase">Uppercase text.</p>
<p class="text-lowercase">Lowercase text.</p>
<p class="text-capitalize">Capitalized text.</p>
<p class="text-decoration-underline">Underlined text.</p>
<p class="text-decoration-line-through">Strikethrough text.</p>
<p class="text-decoration-none">No text decoration.</p>
<p class="text-break">Text that breaks to the next line if it exceeds the width of its container.</p>
<p class="text-nowrap">Text that does not wrap to the next line.</p>



<p class="fw-bold">Bold paragraph.</p>
<p class="fw-semibold">Semi-bold paragraph.</p>
<p class="fw-light">Light paragraph.</p>
<p class="fst-italic">Italic paragraph.</p>


<p class="lead">This is a lead paragraph — it stands out more with larger font size.</p>



<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<p>This is a <span>highlighted</span> word.</p>

<div>This is a block of text inside a div.</div>

<p id="demo">Hello <span id="name">User</span>!</p>

<script>
  document.getElementById("name").innerText = "Anand";
</script>




<h1 id="demo">Welcome</h1>
  <button onclick="changeText()">Click Me</button>

  <script>
    function changeText() {
      document.getElementById("demo").innerHTML = "Hello, JavaScript is working!";
    }
  </script>
</body>
</html>
