
<form class="form-inline" action="/action_page.php">
  <div class="form-group">
    <label for="email">ID : </label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd"> PASSWORD : </label>
    <input type="password" class="form-control" id="pwd">
  </div>
 
  <a class="btn b-sm btn-primary" href="<?= \yii\helpers\Url::to(['user-profile/profile']) ?>">ถัดไป profile</a>
</form>

<br>
<div>USERNAME : <?= $users["username"]; ?></div>
<div>NICKNAME : <?= $users["fname"]; ?></div>
<div>LASTNAME : <?= $users["lastname"]; ?></div>
<div>TEL. : <?= $users["telephon"]; ?></div>

<h1 style="border:2px solid Tomato;"><div>USERNAME : <?= $users["username"]; ?></div></h1>

