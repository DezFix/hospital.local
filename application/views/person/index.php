<h2>Lists and Descriptions</h2>
<div class="row">
    <div class="col">
        <ul>
            <li>Sed ut perspiciatis unde omnis iste</li>
            <li>Lorem ipsum dolor sit amet</li>
            <li>At vero eos et accusamus et iusto</li>
            <li>Et harum quidem rerum facilis</li>
        </ul>
    </div>
    <div class="col">
        <ol>
            <li>Sed ut perspiciatis unde omnis iste</li>
            <li>Lorem ipsum dolor sit amet</li>
            <li>At vero eos et accusamus et iusto</li>
            <li>Et harum quidem rerum facilis</li>
        </ol>
    </div>
    <div class="col">
        <dl>
            <dt>Sed ut perspiciatis unde omnis iste</dt>
            <dd>Lorem ipsum dolor sit amet</dd>
            <dt>At vero eos et accusamus et iusto</dt>
            <dd>Et harum quidem rerum facilis</dd>
        </dl>
    </div>
</div>
<?php

use application\models\Users;

$user = new Users();

if(isset($_POST['submit'])){
    $user->login($_POST['user'], $_POST['pass']);
}
if(isset($_GET['do']) and $_GET['do'] == 'logout'){
    $user->out();
}

if (isset(['authorize']['id'])){
    echo "Привет: " . $_SESSION['user'] . "<br>";

    echo "<a href=\"/account/out\"><button>Выход</button></a>";
}

?>