<?php
    $users = array( 
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel') 
    );
?>
<html>
<body>
    <div class='content'>
        <h1><?= count($users) ?> Users</h1>
<?php   foreach($users as $user) {    ?>
        <p><?= $user['first_name']?> <?= $user['last_name']?></p>
<?php   }    ?>
    </div>
</body>
</html>