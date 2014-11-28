<?php 
$resultArray = array();
$tmparray=array();
?>

@foreach( $users as $user)
	<?php array_push($tmparray,array("id"=>$user->id,"username"=>$user->username,"email"=>$user->email,
		"equal"=>Hash::check($hashtoken,$user->password)?"true":"false"
	)); ?>
@endforeach
<?php 
array_push($resultArray, array("users"=>$tmparray));
echo json_encode($resultArray);