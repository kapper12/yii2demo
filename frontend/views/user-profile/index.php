
<h1 style="border:5px solid Tomato;"><div>PROFILE</div></h1>
<div class="btn-group btn-group-justified">
          <a href="#" class="btn btn-primary"><?= $user["lastname"]; ?></a>
          <a href="#" class="btn btn-primary"><?= $user["tel"]; ?></a>
          <a href="#" class="btn btn-primary"><?= $user["email"]; ?></a>
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Profile <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="<?= \yii\helpers\Url::to(['user-profile/customer']) ?>">USERNAME : <?= $user["username"]; ?></a></li>
      <li><a href="#">LASTNAME : <?= $user["lastname"]; ?></a></li>
      <li><a href="#">TEL.. : <?= $user["tel"]; ?></a></li>
      <li><a href="#">E-MAIL : <?= $user["email"]; ?></a></li>
      <li><a href="#">SEX : <?= $user["sex"]; ?></a></li>
    </ul>
  </div>
 </div>
<br>
<br>
<div>USERNAME : <?= $user["username"]; ?></div>
<div>LASTNAME : <?= $user["lastname"]; ?></div>
<div>TEL.. : <?= $user["tel"]; ?></div>
<div>E-MAIL : <?= $user["email"]; ?></div>
<div>SEX : <?= $user["sex"]; ?></div>
<br>
<div class="form-group">
  <label for="sel1">Profile list:</label>
  <select class="form-control" id="sel1">
    <option>USERNAME : <?= $user["username"]; ?></option>
    <option>LASTNAME : <?= $user["lastname"]; ?></option>
    <option>TEL.. : <?= $user["tel"]; ?></option>
    <option>E-MAIL : <?= $user["email"]; ?></option>
    <option>SEX : <?= $user["sex"]; ?></option>
  </select>
</div>
<br>
<div class="btn-group btn-group-justified">
  <a href="<?= \yii\helpers\Url::to(['user-profile/customer']) ?>" class="btn btn-primary"><?= $user["username"]; ?></a>
  <a href="#" class="btn btn-primary"><?= $user["lastname"]; ?></a>
  <a href="#" class="btn btn-primary"><?= $user["tel"]; ?></a>
  <a href="#" class="btn btn-primary"><?= $user["email"]; ?></a>
  <a href="#" class="btn btn-primary"><?= $user["sex"]; ?></a>
</div>

<div class="table-responsive">
    <table class="table">
       <thead>
     <td><center>1</center></td>
     <td><center>2</center></td>
     <td><center>3</center></td>
     <td><center>4</center></td>
     <td><center>5</center></td>
    </table>
      

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<Center>
<a class="btn b-sm btn-primary" href="<?= \yii\helpers\Url::to(['user-profile/profile']) ?>">ถัดไป profile</a>
<a class="btn b-sm btn-danger" href="<?= \yii\helpers\Url::to(['user-profile/customer']) ?>">ถัดไป conn</a>
</Center>