<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/header.css">
<?if(empty($_SESSION['sum'])){
      $_SESSION['sum'] = '0';
     }
 ?>
 <div class = 'header'>
 	<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ebe134;">
  <div class="container">
    <a class="navbar-brand" href="/">Главная</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <? if(!$_SESSION['user'])echo '<a class="nav-link "  href="/registration">Регистрация</a>'; ?>
        <? if(!$_SESSION['user'])echo '<a class="nav-link"  href="/authorization">Авторизация</a>';?>
        <? if($_SESSION['user_status']==1) echo '<a class="nav-link"  href="/admin">Кабинет</a>'; ?>
        <? if($_SESSION['user']) echo '<a class="nav-link" href="/basket" id="basket">Корзина: '.$_SESSION['sum'].'</a>'?>
        <? if($_SESSION['user']) echo '<a class="nav-link"  href="/exit">Выйти</a>'; ?>
    </div>      
  </div>
</div>
</nav>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.basket').click(function(){
            var id = $(this).attr("id");
            $.ajax({
                method: 'POST',
                url: '/basket/'+id,
                data: {}
            })
                .done(function(data) {
                   $('#basket').html('Корзина:'+data);
                   alert('Товар был добавлен в корзину');
                });
           });
      });
</script> 

<?
if (!isset($_SESSION['user'])) {
  echo '<script type="text/javascript">
  $(document).ready(function(){
     $(".basket").css("display", "none");
  });
</script>';
}
 ?>
