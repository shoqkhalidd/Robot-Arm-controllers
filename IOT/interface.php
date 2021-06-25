
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width", initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Robot controls</title>
</head>
<body>
<section>
  
  <div class="container">
    <h1>Robot controls</h1>
    <div class="background">
  
      <div class="box">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="content">
            
          <form action="motors.php" method="post">
      
            <label for="Moter1">Moter 1 </label>
            <input class="slider" type="range" name="m1" max="180" min="0" oninput="rangeval1(this.value)" value="0" > <a class="m1" id="m1"></a>
            <br>

            <label for="Moter1">Moter 2 </label>
            <input  class="slider" type="range" name="m2" max="180" min="0" oninput="rangeval2(this.value)" value="0" >
            <a id="m2"></a>
            <br>
     
            <label for="Moter1">Moter 3 </label>
            <input  class="slider" type="range" name="m3" max="180" min="0" oninput="rangeval3(this.value)" value="0" >
            <a id="m3"></a>
            <br>
            <label for="Moter1">Moter 4 </label>
            <input  class="slider" type="range" name="m4" max="180" min="0" oninput="rangeval4(this.value)" value="0" >
            <a id="m4"></a>
            <br>
     
     
            <label for="Moter1">Moter 5 </label>
            <input  class="slider" type="range" name="m5" max="180" min="0" oninput="rangeval5(this.value)" value="0" >
            <a id="m5"></a>
            <br>

            <label for="Moter1">Moter 6 </label>
            <input  class="slider" type="range" name="m6" max="180" min="0"    oninput="rangeval6(this.value)" value="0" >
            <a id="m6"></a>
            <br>
     
     
            <button class="h"type="submit" name="save"> save changes </button>
            <button class="h"type="submit" name="run"> Run </button>
    
        
          </form>
        
        </div>
      </div>
      <div class="box2">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="content2">
            
          <form action="direction.php" method="post">
            
            <button class="f"type="submit" name="f"> forward </button>
            <button class="h"type="submit" name="r"> right </button>
            <button class="h" type="submit" name="s"> Stop </button>
            <button class="h"type="submit" name="l"> left </button>
            <button class="g"type="submit" name="b"> backward </button>
        
          </form>
        
        </div>
      </div>
    </div>
  </section>
  <script src="script.js"></script>
</body>
</html>