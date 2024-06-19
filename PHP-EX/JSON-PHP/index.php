<script src="index.js"></script>
<?php
$user=new StdClass();
$user->name='Armando';
$user->lastname='Anescu';
$user->age=69;
$user->hobbies=['programming','gaming','Nintending','Mewing'];
$user->isAvailable=false;
$user->money=-4955495495;
echo json_encode($user);