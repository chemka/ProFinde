 <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="#"><?php echo $config['title']; ?></a>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wyzi.html">ВУЗы</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Тесты на профориентацию</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <!--<a class="dropdown-item" href="test-1.html">Отсеивающий тест</a>-->
          <a class="dropdown-item" href="test-1.php">Тест на 15 вопросов</a>
          <a class="dropdown-item" href="#">Тест на 50 вопросов</a>
        </div>
      </li> 
      <?php 
        $categoty_q = mysqli_query($connaction, "SELECT * FROM id_categori");
        $categoty = array();
        while ( $cat = mysqli_fetch_assoc($categoty_q) ) 
        {
          $categoty[] = $cat;
        }

         ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">categoty</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
        <?php
       foreach ($categoty as $cat) {
        
       
        
          ?>
           <a class="dropdown-item" href="/CAT.php?id=<?php echo $cat['id']?>"><?php echo $cat['name']; ?></a>
           <?php
        }
        ?>
        </div>
      </li>
      <a class="nav-link" href="глстр.html">О нас <span class="sr-only">(current)</span></a>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Поиск">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
    </form>
  </div>
</nav>


